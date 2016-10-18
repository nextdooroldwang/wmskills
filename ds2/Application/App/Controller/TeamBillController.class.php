<?php
namespace App\Controller;
use Think\Controller;

/**
 * 中队订单
 * 杨子杰 2016-04-03
 */
class TeamBillController extends Controller {

	public function getData()	{
		$data = array();

		$kind = M("kind");
		$kindList = $kind->select();

		for ($i = 0; $i < count($kindList); $i++) { 
			$currentKind = $kindList[$i];
			$kindData["name"] = $currentKind["kind_name"];

			$kind_id = $currentKind["kind_id"];
			$food = M("food");
			$condition["kind_id"] = $kind_id;
			$foodList = $food->where($condition)->select();

			$foodData = array();
			for ($j = 0; $j < count($foodList); $j++) { 
				$currentFood = $foodList[$j];

				$foodInfo["name"] = $currentFood["food_name"] . " (" . $currentFood["food_unit"] . ")";

				array_push($foodData, $foodInfo);
			}

			$kindData["sub"] = $foodData;

			array_push($data, $kindData);
		}

		$this->ajaxReturn($data);
	}

}