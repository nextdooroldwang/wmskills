<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 中队订单
 * 杨子杰 2016-04-03
 */
class TeamBillController extends BaseController
{

    public function addBill()
    {
        $kind = M("kind");
        $kindList = $kind->select();

        $this->assign("kindList", $kindList);

        $this->display("addBill");
    }

    public function getKindList()
    {
        $kind = M("kind");
        $kindList = $kind->select();

        for ($i = 0; $i < count($kindList); $i++) {
            $data[$i]["id"] = $kindList[$i]["kind_id"];
            $data[$i]["text"] = $kindList[$i]["kind_name"];
        }

        $this->ajaxReturn($data);
    }

    public function getFoodListByKind()
    {
        $kind_id = I("get.kind_id");

        $food = M("food");
        $condition["kind_id"] = $kind_id;
        $foodList = $food->where($condition)->select();

        for ($i = 0; $i < count($foodList); $i++) {
            $data[$i]["id"] = $foodList[$i]["food_id"];
            $data[$i]["text"] = $foodList[$i]["food_name"];
        }

        $this->ajaxReturn($data);
    }

    public function getCurrentFood()
    {
        $food_id = I("get.food_id");

        $food = M("food");
        $currentFood = $food->find($food_id);
        $food_unit = $currentFood["food_unit"];

        echo $food_unit;
    }

    public function saveBill()
    {
        $user_id = session("user_id");
        $bill_date = I("post.bill_date");

        $bill = M("bill");
        $condition["user_id"] = $user_id;
        $condition["bill_date"] = $bill_date;
        $count = $bill->where($condition)->count();
        if ($count > 0) {
            $data["success"] = false;
            $data["message"] = "本日已上报过订单，无法再次上报！";
        } else {
            $addTableCount = I("post.addTableCount");

            $billCount = 10 * $addTableCount + 11;
            for ($i = 1; $i < $billCount; $i++) {
                $kind_id = I("post.kind_id_" . $i);

                if ($kind_id != "0") {
                    $food_id = I("post.food_id_" . $i);
                    $bill_sum = I("post.bill_sum_" . $i);

                    $bill = M("bill");

                    $data["user_id"] = $user_id;
                    $data["bill_date"] = $bill_date;
                    $data["kind_id"] = $kind_id;
                    $data["food_id"] = $food_id;
                    $data["bill_sum"] = $bill_sum;

                    $bill->add($data);
                }
            }

            $data["success"] = true;
            $data["message"] = "订单上报成功！";
        }
        $this->ajaxReturn($data);
    }

    public function addSingleBill()
    {
        $user_id = session("user_id");
        $kind_id = I("post.add_kind_id");
        $food_id = I("post.add_food_id");
        $bill_sum = I("post.add_bill_sum");
        $bill_date = I("post.add_bill_date");

        $bill = M("bill");

        $condition["user_id"] = $user_id;
        $condition["food_id"] = $food_id;
        $condition["bill_date"] = $bill_date;

        $count = $bill->where($condition)->count();
        if ($count > 0) {
            $data["success"] = false;
            $data["message"] = "订单中存在此食材，请修改原订单！";
        } else {
            $bill->user_id = $user_id;
            $bill->kind_id = $kind_id;
            $bill->food_id = $food_id;
            $bill->bill_sum = $bill_sum;
            $bill->bill_date = $bill_date;

            $addedBill = $bill->add();

            if ($addedBill) {
                $data["success"] = true;
                $data["message"] = "新增成功！";
            } else {
                $data["success"] = false;
                $data["message"] = "新增失败！";
            }
        }

        $this->ajaxReturn($data);
    }

    public function bill()
    {
        $kind = M("kind");
        $kindList = $kind->select();

        $this->assign("userList", $userList);
        $this->assign("kindList", $kindList);
        // $this->assign("foodList", $foodList);

        $this->display("bill");
    }

    public function defaultSearch()
    {
        $draw = $_GET['draw'];
        $start = $_GET["start"];
        $length = $_GET["length"];

        $bill = D("billView");

        $condition["user_id"] = session("user_id");

        $recordsTotal = $bill->where($condition)->count();

        $billList = $bill->where($condition)->limit($start . "," . $length)->select();

        $infos = array();
        $recordsFiltered = count($billList);
        for ($i = 0; $i < $recordsFiltered; $i++) {
            $row = $billList[$i];
            $obj = array(
                $row["bill_id"],
                $row["kind_name"],
                $row["food_name"],
                $row["food_unit"],
                $row["bill_sum"],
                $row["bill_date"],
            );
            array_push($infos, $obj);
        }

        $returnArray = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($recordsTotal),
            "recordsFiltered" => intval($recordsTotal),
            "data" => $infos,
        );

        $this->ajaxReturn($returnArray);
    }

    public function search()
    {
        $draw = $_GET['draw'];
        $start = $_GET["start"];
        $length = $_GET["length"];

        $bill = D("billView");

        $kind_id = I("get.kind_id");
        $food_id = I("get.food_id");
        $start_date = I("get.start_date");
        $end_date = I("get.end_date");

        if ($kind_id != null) {
            $condition["kind_id"] = $kind_id;
        }
        if ($food_id != null) {
            $condition["food_id"] = $food_id;
        }
        if ($start_date != null && $end_date != null) {
            $condition["bill_date"] = array(
                array("egt", $start_date),
                array("elt", $end_date),
            );
        } elseif ($start_date != null && $end_date == null) {
            $condition["bill_date"] = array("egt", $start_date);
        } elseif ($start_date == null && $end_date != null) {
            $condition["bill_date"] = array("elt", $end_date);
        }
        $condition["user_id"] = session("user_id");

        $billList = $bill->where($condition)->limit($start . "," . $length)->select();

        $infos = array();
        for ($i = 0; $i < count($billList); $i++) {
            $row = $billList[$i];
            $obj = array(
                $row["bill_id"],
                $row["kind_name"],
                $row["food_name"],
                $row["food_unit"],
                $row["bill_sum"],
                $row["bill_date"],
            );
            array_push($infos, $obj);
        }

        $userCondition["user_id"] = session("user_id");
        $recordsTotal = $bill->where($userCondition)->count();
        $recordsFilteredList = $bill->where($condition)->select();
        $recordsFiltered = count($recordsFilteredList);
        $returnArray = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($recordsTotal),
            "recordsFiltered" => intval($recordsFiltered),
            "data" => $infos,
        );

        $this->ajaxReturn($returnArray);
    }

    public function updateBill()
    {
        $bill = M("bill");

        $data["bill_id"] = I("post.update_bill_id");
        $data["bill_sum"] = I("post.update_bill_sum");

        $billId = $bill->save($data);
        if ($billId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function deleteBill()
    {
        $bill_id = I("get.bill_id");

        $bill = M("bill");

        $delCount = $bill->delete($bill_id);

        if ($delCount > 0) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function saveMemo()
    {
        $user_id = session("user_id");
        $bill_date = I("post.bill_date");
        $memo_text = I("post.memo_text");

        $memo = M("memo");
        $memo->user_id = $user_id;
        $memo->bill_date = $bill_date;
        $memo->memo_text = $memo_text;

        $newMemoId = $memo->add();

        if ($newMemoId) {
            $data["success"] = true;
            $data["message"] = "备注保存成功！";
        } else {
            $data["success"] = false;
            $data["message"] = "备注保存失败！";
        }

        $this->ajaxReturn($data);
    }

}
