<?php
namespace Admin\Model;
use Think\Model\ViewModel;

/**
 * 食材名称
 * 杨子杰 2016-04-03
 */
class FoodViewModel extends ViewModel {
	public $viewFields = array(
		"food" => array(
			"food_id",
			"food_name",
			"food_unit",
			"food_default_price",
		),
		"kind" => array(
			"kind_id",
			"kind_name",
			"_on" => "food.kind_id=kind.kind_id",
		),
	);
}