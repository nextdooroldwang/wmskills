<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;
use Think\Model;

/**
 * 采购单管理
 * 杨子杰 2016-04-03
 */
class AdminPurchaseBillController extends BaseController
{

    public function purchaseBill()
    {
        $this->display("purchaseBill");
    }

    public function purchaseBillSearch()
    {
        $draw = $_GET['draw'];
        $start = $_GET["start"];
        $length = $_GET["length"];

        $bill_date = I("get.bill_date");

        if ($bill_date == null) {
            $bill_date = date("Y-m-d");
        }

        $sql = "select
					distinct bill.kind_id,
					kind.kind_name
				from
					ds_bill as bill,
					ds_kind as kind
				where
					bill.bill_date = '$bill_date'
				and bill.kind_id = kind.kind_id
				limit $start, $length";

        $totalSql = "select
					distinct bill.kind_id,
					kind.kind_name
				from
					ds_bill as bill,
					ds_kind as kind
				where
					bill.bill_date = '$bill_date'
				and bill.kind_id = kind.kind_id";

        $model = new Model();
        $kindList = $model->query($sql);
        $recordsTotal = count($model->query($totalSql));

        $infos = array();
        for ($i = 0; $i < count($kindList); $i++) {
            $row = $kindList[$i];
            $obj = array(
                $row["kind_id"],
                $row["kind_name"],
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

    public function purchaseBillDetail()
    {
        $kind_id = I("get.kind_id");
        $kind_name = I("get.kind_name");
        $bill_date = I("get.bill_date");

        $sql = "select
					bill.food_id,
					food.food_name,
					food.food_unit,
					food.food_default_price,
					sum(bill.bill_sum) as food_sum,
					cast(avg(bill.bill_price) as decimal(4,1)) as food_price
				from
					ds_bill as bill,
					ds_food as food
				where
					bill.kind_id = $kind_id
				and bill_date =  '$bill_date'
				and bill.food_id = food.food_id
				group by
					food_id";

        $model = new Model();
        $foodList = $model->query($sql);
        $foodListCount = count($foodList);

        $this->assign("kind_id", $kind_id);
        $this->assign("kind_name", $kind_name);
        $this->assign("bill_date", $bill_date);
        $this->assign("foodList", $foodList);
        $this->assign("foodListCount", $foodListCount);

        $this->display("purchaseBillDetail");
    }

    public function updatePrice()
    {
        $bill_date = I("post.bill_date");
        $foodListCount = I("post.foodListCount");

        $condition["bill_date"] = $bill_date;
        for ($i = 0; $i < $foodListCount; $i++) {
            $food_id = I("post.food_id_" . $i);
            $bill_price = I("post.bill_price_" . $i);

            $condition["food_id"] = $food_id;

            $bill = M("bill");

            $billList = $bill->where($condition)->select();
            for ($j = 0; $j < count($billList); $j++) {
                $currentBill = M("bill");
                $currentBill->bill_price = $bill_price;
                $currentBill->bill_total = $bill_price * $billList[$j]["bill_sum"];
                $currentBill->where("bill_id=" . $billList[$j]["bill_id"])->save();
            }
        }

        $data["success"] = true;
        $data["message"] = "价格更新成功！";

        $this->ajaxReturn($data);
    }

    public function export()
    {
        $kind_id = I("get.kind_id");
        $kind_name = I("get.kind_name");
        $bill_date = I("get.bill_date");

        $sql = "select
					bill.food_id,
					food.food_name,
					food.food_unit,
					food.food_default_price,
					sum(bill.bill_sum) as food_sum,
					cast(avg(bill.bill_price) as decimal(4,1)) as food_price
				from
					ds_bill as bill,
					ds_food as food
				where
					bill.kind_id = $kind_id
				and bill_date =  '$bill_date'
				and bill.food_id = food.food_id
				group by
					food_id";

        $model = new Model();
        $foodList = $model->query($sql);

        // downloadExcel($foodList);

        $inputFileName = C("EXCEL_TEMPLATE_PATH_PURCHASE_BILL");
        $title = "采购单";
        $fixedData = array(
            "G1" => $kind_name,
            "A2" => $bill_date,
        );
        $listStartRowNum = 4;
        $listTitleLeft = array(
            "A" => "food_name",
            "B" => "food_unit",
            "C" => "food_sum",
        );
        $listTitleRight = array(
            "E" => "food_name",
            "F" => "food_unit",
            "G" => "food_sum",
        );
        $listData = $foodList;
        $fileName = $bill_date . "_" . $title . "_" . $kind_name . ".xlsx";
        $fileName = mb_convert_encoding($fileName, "GBK", "UTF-8");
        $outputFilename = C("EXCEL_TEMP_PATH") . $fileName;

        exportExcelByTemplateDouble($inputFileName, $title, $fixedData, $listStartRowNum, $listTitleLeft, $listTitleRight, $listData, $outputFilename);
    }

}
