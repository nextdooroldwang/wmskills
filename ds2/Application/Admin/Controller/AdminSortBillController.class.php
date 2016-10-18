<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 分拣单管理
 * 杨子杰 2016-04-03
 */
class AdminSortBillController extends BaseController
{

    public function sortBill()
    {
        $user = M("user");
        $userCondition["user_id"] = array("gt", 1);
        $userList = $user->where($userCondition)->select();

        $this->assign("userList", $userList);

        $this->display("sortBill");
    }

    public function sortBillDetail()
    {
        $user_id = I("get.user_id");
        $user_username = I("get.user_username");
        $bill_date = I("get.bill_date");

        $billView = D("billView");

        $condition["user_id"] = $user_id;
        $condition["bill_date"] = $bill_date;

        $billList = $billView->where($condition)->select();

        $bill = M("bill");
        $total = $bill->where($condition)->sum("bill_total");

        $this->assign("user_id", $user_id);
        $this->assign("user_username", $user_username);
        $this->assign("bill_date", $bill_date);
        $this->assign("total", $total);
        $this->assign("billList", $billList);

        $this->display("sortBillDetail");
    }

    public function updateBill()
    {
        $bill = M("bill");

        $data["bill_id"] = I("post.update_bill_id");
        $data["bill_sum"] = I("post.update_bill_sum");
        $data["bill_total"] = I("post.update_bill_sum") * I("post.update_bill_price");

        $billId = $bill->save($data);
        if ($billId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function export()
    {
        $user_id = I("get.user_id");
        $user_username = I("get.user_username");
        $bill_date = I("get.bill_date");

        $billView = D("billView");

        $condition["user_id"] = $user_id;
        $condition["bill_date"] = $bill_date;

        $billList = $billView->where($condition)->order("kind_id, food_id")->select();

        $inputFileName = C("EXCEL_TEMPLATE_PATH_SORT_BILL");
        $title = "分拣单";
        $fixedData = array(
            "G1" => $user_username,
            "A2" => $bill_date,
        );
        $listStartRowNum = 4;
        $listTitleLeft = array(
            "A" => "kind_name",
            "B" => "food_name",
            "C" => "food_unit",
            "D" => "bill_sum",
        );
        $listTitleRight = array(
            "E" => "kind_name",
            "F" => "food_name",
            "G" => "food_unit",
            "H" => "bill_sum",
        );
        $listData = $billList;
        $fileName = $bill_date . "_" . $title . "_" . $user_username . ".xlsx";
        $fileName = mb_convert_encoding($fileName, "GBK", "UTF-8");
        $outputFilename = C("EXCEL_TEMP_PATH") . $fileName;

        exportExcelByTemplateDouble($inputFileName, $title, $fixedData, $listStartRowNum, $listTitleLeft, $listTitleRight, $listData, $outputFilename);

    }

}
