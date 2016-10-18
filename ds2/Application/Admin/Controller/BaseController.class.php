<?php
namespace Admin\Controller;

use Think\Controller;

/**
 * Base
 * 杨子杰 2016-04-03
 */
class BaseController extends Controller
{
    public function _initialize()
    {
        if (!session("user_username")) {
            $this->error("请先登陆！", U("Admin/Index/login"), 3);
        }
    }
}
