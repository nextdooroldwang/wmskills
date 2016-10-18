<?php
namespace Admin\Model;
use Think\Model\ViewModel;

/**
 * 订单
 * 杨子杰 2016-04-03
 */
class BillViewModel extends ViewModel {
	public $viewFields = array(
		"bill" => array(
			"bill_id",
			"bill_price",
			"bill_sum",
			"bill_total",
			"bill_date",
		),
		"user" => array(
			"user_id",
			"user_username",
			"user_line",
			"_on" => "bill.user_id=user.user_id",
		),
		"kind" => array(
			"kind_id",
			"kind_name",
			"_on" => "bill.kind_id=kind.kind_id",
		),
		"food" => array(
			"food_id",
			"food_name",
			"food_unit",
			"_on" => "bill.food_id=food.food_id",
		),
	);
}