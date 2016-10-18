<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

/**
 * 食材种类
 * 杨子杰 2016-04-03
 */
class KindController extends BaseController
{

    public function index()
    {
        $kind = M("kind");

        $kindList = $kind->select();

        $this->assign("kindList", $kindList);

        $this->display("kind");
    }

    public function addKind()
    {
        $kind = M("kind");
        $kind->create();

        $kindId = $kind->add();
        if ($kindId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function updateKind()
    {
        $kind = M("kind");
        $kind->create();

        $kindId = $kind->save();
        if ($kindId) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }

    public function deleteKind()
    {
        $kind_id = I("get.kind_id");

        $kind = M("kind");

        $delCount = $kind->delete($kind_id);

        if ($delCount > 0) {
            $data["success"] = true;
        } else {
            $data["success"] = false;
        }

        $this->ajaxReturn($data);
    }
}
