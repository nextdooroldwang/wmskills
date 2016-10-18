<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 食材名称
 * 杨子杰 2016-04-03
 */
class FoodController extends BaseController
{

    public function index()
    {
        $food = D("foodView");
        $foodList = $food->select();

        $kind = M("kind");
        $kindList = $kind->select();

        $this->assign("foodList", $foodList);
        $this->assign("kindList", $kindList);

        $this->display("food");
    }

    public function addfood()
    {
        $food = M("food");
        $food->create();

        $foodId = $food->add();
        if ($foodId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function updatefood()
    {
        $food = M("food");
        $food->create();

        $foodId = $food->save();
        if ($foodId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function deletefood()
    {
        $food_id = I("get.food_id");

        $food = M("food");

        $delCount = $food->delete($food_id);

        if ($delCount > 0) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }
}
