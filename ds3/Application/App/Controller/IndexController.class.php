<?php
namespace App\Controller;
use Think\Controller;

/**
 * 首页(登录页)
 * 杨子杰 2016-04-03
 */
class IndexController extends Controller {

	public function login() {
		$this->display();
	}

	public function doLogin() {
		$user_username = I("post.user_username");
		$user_password = I("post.user_password");

		$user = M("user");
		$loginUser = $user->where("user_username='" . $user_username . "'")->find();

		if ($user_password == $loginUser["user_password"]) {
			session("user_id", $loginUser["user_id"]);
			session("user_username", $loginUser["user_username"]);
			session("user_role", $loginUser["user_role"]);

			$data["success"] = true;
			$data["message"] = "登陆成功";
			$data["user_role"] = $loginUser["user_role"];
		} else {
			$data["success"] = false;
			$data["message"] = "用户名或密码错误";
		}

		$this->ajaxReturn($data);
	}

	public function doLogout() {
		// 清空session
		session("user_id", null);
		session("user_username", null);
		session("user_role", null);

		href(U("Admin/Index/login"));
	}

}