<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 配送单管理
 * 杨子杰 2016-04-03
 */
class AdminDeliverBillController extends BaseController
{

    public function deliverBill()
    {
        $user = M("user");
        $userCondition["user_id"] = array("gt", 1);
        $userList = $user->where($userCondition)->select();

        $this->assign("userList", $userList);

        $this->display("deliverBill");
    }

    public function deliverBillDetail()
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

        $this->display("deliverBillDetail");
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

        $bill = M("bill");
        $total = $bill->where($condition)->sum("bill_total");

        $inputFileName = C("EXCEL_TEMPLATE_PATH_DELIVER_BILL");
        $title = "配送单";
        $fixedData = array(
            "K1" => $user_username,
            "B2" => $bill_date,
            "H2" => $total,
        );
        $listStartRowNum = 4;
        $listTitleLeft = array(
            "A" => "kind_name",
            "B" => "food_name",
            "C" => "food_unit",
            "D" => "bill_sum",
            "E" => "bill_price",
            "F" => "bill_total",
        );
        $listTitleRight = array(
            "G" => "kind_name",
            "H" => "food_name",
            "I" => "food_unit",
            "J" => "bill_sum",
            "K" => "bill_price",
            "L" => "bill_total",
        );
        $listData = $billList;
        $fileName = $bill_date . "_" . $title . "_" . $user_username . ".xlsx";
        $fileName = mb_convert_encoding($fileName, "GBK", "UTF-8");
        $outputFilename = C("EXCEL_TEMP_PATH") . $fileName;

        exportExcelByTemplateDouble($inputFileName, $title, $fixedData, $listStartRowNum, $listTitleLeft, $listTitleRight, $listData, $outputFilename);

    }

}
