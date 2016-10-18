<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 管理员订单统计
 * 杨子杰 2016-04-03
 */
class AdminBillController extends BaseController
{

    public function bill()
    {
        $this->display("bill");
    }

    public function getUserList()
    {
        $user = M("user");
        $userCondition["user_id"] = array("gt", 1);
        $userList = $user->where($userCondition)->select();

        for ($i = 0; $i < count($userList); $i++) {
            $data[$i]["id"] = $userList[$i]["user_id"];
            $data[$i]["text"] = $userList[$i]["user_username"];
        }

        $this->ajaxReturn($data);
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

    public function defaultSearch()
    {
        $draw = $_GET['draw'];
        $start = $_GET["start"];
        $length = $_GET["length"];

        $bill = D("billView");
        $condition["bill_date"] = date("Y-m-d");
        $recordsTotal = $bill->count();
        $billList = $bill->where($condition)->limit($start . "," . $length)->select();

        $recordsFilteredList = $bill->where($condition)->select();
        $recordsFiltered = count($recordsFilteredList);

        $infos = array();
        for ($i = 0; $i < count($billList); $i++) {
            $row = $billList[$i];
            $obj = array(
                $row["bill_id"],
                $row["user_line"],
                $row["user_username"],
                $row["kind_name"],
                $row["food_name"],
                $row["food_unit"],
                $row["bill_sum"],
                $row["bill_price"],
                $row["bill_total"],
                $row["bill_date"],
            );
            array_push($infos, $obj);
        }

        $returnArray = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($recordsTotal),
            "recordsFiltered" => intval($recordsFiltered),
            "data" => $infos,
        );

        $this->ajaxReturn($returnArray);
    }

    public function defaultSearchCount()
    {
        $bill = D("billView");
        $condition["bill_date"] = date("Y-m-d");
        $data["totalSum"] = $bill->where($condition)->sum("bill_sum");
        $data["totalPrice"] = $bill->where($condition)->sum("bill_total");

        $this->ajaxReturn($data);
    }

    public function search()
    {
        $draw = $_GET['draw'];
        $start = $_GET["start"];
        $length = $_GET["length"];

        $bill = D("billView");

        $user_id = I("get.user_id");
        $kind_id = I("get.kind_id");
        $food_id = I("get.food_id");
        $start_date = I("get.start_date");
        $end_date = I("get.end_date");

        if ($user_id != null) {
            $condition["user_id"] = $user_id;
        }
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

        $billList = $bill->where($condition)->limit($start . "," . $length)->select();

        $infos = array();
        for ($i = 0; $i < count($billList); $i++) {
            $row = $billList[$i];
            $obj = array(
                $row["bill_id"],
                $row["user_line"],
                $row["user_username"],
                $row["kind_name"],
                $row["food_name"],
                $row["food_unit"],
                $row["bill_sum"],
                $row["bill_price"],
                $row["bill_total"],
                $row["bill_date"],
            );
            array_push($infos, $obj);
        }

        $recordsTotal = $bill->count();
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

    public function SearchCount()
    {
        $bill = D("billView");

        $user_id = I("get.user_id");
        $kind_id = I("get.kind_id");
        $food_id = I("get.food_id");
        $start_date = I("get.start_date");
        $end_date = I("get.end_date");

        if ($user_id != null) {
            $condition["user_id"] = $user_id;
        }
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

        $data["totalSum"] = $bill->where($condition)->sum("bill_sum");
        $data["totalPrice"] = $bill->where($condition)->sum("bill_total");

        $this->ajaxReturn($data);
    }

    public function addSingleBill()
    {
        $user_id = I("post.add_user_id");
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

    public function export()
    {
        $bill = D("billView");

        $user_id = I("get.user_id");
        $kind_id = I("get.kind_id");
        $food_id = I("get.food_id");
        $start_date = I("get.start_date");
        $end_date = I("get.end_date");

        if ($user_id != null) {
            $condition["user_id"] = $user_id;
        }
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

        $billList = $bill->where($condition)->order("user_line, user_id, kind_id, food_id")->select();

        $inputFileName = C("EXCEL_TEMPLATE_PATH_BILL");
        $title = "订单";
        $fixedData = array();
        $listStartRowNum = 2;
        $listTitle = array(
            "A" => "user_line",
            "B" => "user_username",
            "C" => "kind_name",
            "D" => "food_name",
            "E" => "food_unit",
            "F" => "bill_sum",
            "G" => "bill_price",
            "H" => "bill_total",
            "I" => "bill_date",
        );
        $listData = $billList;
        $fileName = $start_date . "-" . $end_date . ".xlsx";
        $fileName = mb_convert_encoding($fileName, "GBK", "UTF-8");
        $outputFilename = C("EXCEL_TEMP_PATH") . $fileName;

        exportExcelByTemplate($inputFileName, $title, $fixedData, $listStartRowNum, $listTitle, $listData, $outputFilename);

    }
}
