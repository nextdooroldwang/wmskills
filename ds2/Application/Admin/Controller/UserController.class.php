<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 用户
 * 杨子杰 2016-04-03
 */
class UserController extends BaseController
{

    public function index()
    {
        $user = M("user");
        $userList = $user->select();

        $this->assign("userList", $userList);

        $this->display("user");
    }

    public function addUser()
    {
        $user = M("user");
        $user->create();

        $userId = $user->add();
        if ($userId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function updateUser()
    {
        $user = M("user");
        $user->create();

        $userId = $user->save();
        if ($userId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function deleteUser()
    {
        $user_id = I("get.user_id");

        $user = M("user");

        $delCount = $user->delete($user_id);

        if ($delCount > 0) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }
}
