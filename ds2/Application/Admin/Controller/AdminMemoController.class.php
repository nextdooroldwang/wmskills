<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 管理员订单备注查看
 * 杨子杰 2016-04-03
 */
class AdminMemoController extends BaseController
{
    public function memo()
    {
        $this->display("memo");
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

    public function defaultSearch()
    {
        $draw = $_GET['draw'];
        $start = $_GET["start"];
        $length = $_GET["length"];

        $memo = D("memoView");
        $condition["bill_date"] = date("Y-m-d");
        $recordsTotal = $memo->count();
        $memoList = $memo->where($condition)->limit($start . "," . $length)->select();

        $recordsFilteredList = $memo->where($condition)->select();
        $recordsFiltered = count($recordsFilteredList);

        $infos = array();
        for ($i = 0; $i < count($memoList); $i++) {
            $row = $memoList[$i];
            $obj = array(
                $row["memo_id"],
                $row["user_username"],
                $row["bill_date"],
                $row["memo_text"],
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

    public function search()
    {
        $draw = $_GET['draw'];
        $start = $_GET["start"];
        $length = $_GET["length"];

        $memo = D("memoView");

        $user_id = I("get.user_id");
        $bill_date = I("get.bill_date");

        if ($user_id != null) {
            $condition["user_id"] = $user_id;
        }
        if ($bill_date != null) {
            $condition["bill_date"] = $bill_date;
        }

        $memoList = $memo->where($condition)->limit($start . "," . $length)->select();

        $infos = array();
        for ($i = 0; $i < count($memoList); $i++) {
            $row = $memoList[$i];
            $obj = array(
                $row["memo_id"],
                $row["user_username"],
                $row["bill_date"],
                $row["memo_text"],
            );
            array_push($infos, $obj);
        }

        $recordsTotal = $memo->count();
        $recordsFilteredList = $memo->where($condition)->select();
        $recordsFiltered = count($recordsFilteredList);
        $returnArray = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($recordsTotal),
            "recordsFiltered" => intval($recordsFiltered),
            "data" => $infos,
        );

        $this->ajaxReturn($returnArray);
    }

    public function getMemo()
    {
        $memo_id = I("get.memo_id");
        $memo = D("memoView");
        $condition["memo_id"] = $memo_id;

        $currentMemo = $memo->where($condition)->find();

        if (count($currentMemo) > 0) {
            $data["success"] = true;
            $data["memo"] = $currentMemo;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }
}
