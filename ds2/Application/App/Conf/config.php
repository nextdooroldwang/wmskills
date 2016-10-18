<?php
return array(
	/* 数据库设置 */
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => '127.0.0.1', // 服务器地址
	'DB_NAME' => 'ds', // 数据库名
	'DB_USER' => 'root', // 用户名
	'DB_PWD' => 'xingYUN123', // 密码
	'DB_PORT' => '3306', // 端口
	'DB_PREFIX' => 'ds_', // 数据库表前缀

	/* URL设置 */
	'URL_MODEL' => 1, // PATHINFO 模式
	'URL_CASE_INSENSITIVE' => true, //不区分大小写

	'LIMIT_HOUR' => 11,	// 中队修改订单的限制时间，当日11点前

	'EXCEL_TEMPLATE_PATH_PURCHASE_BILL' => 'C:\\Users\\dreamswhite\\Desktop\\bills\\template\\purchaseb_bill.xlsx',
	'EXCEL_TEMPLATE_PATH_SORT_BILL' => 'C:\\Users\\dreamswhite\\Desktop\\bills\\template\\sort_bill.xlsx',
	'EXCEL_TEMPLATE_PATH_DELIVER_BILL' => 'C:\\Users\\dreamswhite\\Desktop\\bills\\template\\deliver_bill.xlsx',
	'EXCEL_TEMPLATE_PATH_BILL' => 'C:\\Users\\dreamswhite\\Desktop\\bills\\template\\bill.xlsx',

	'EXCEL_TEMP_PATH' => 'C:\\Users\\dreamswhite\\Desktop\bills\\bills\\',

);
