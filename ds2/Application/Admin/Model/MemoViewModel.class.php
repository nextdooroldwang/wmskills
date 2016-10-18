<?php
namespace Admin\Model;
use Think\Model\ViewModel;

/**
 * 订单备注
 * 杨子杰 2016-04-03
 */
class MemoViewModel extends ViewModel {
	public $viewFields = array(
		"memo" => array(
			"memo_id",
			"user_id",
			"bill_date",
			"memo_text",
		),
		"user" => array(
			"user_username",
			"_on" => "memo.user_id=user.user_id",
		),
	);
}