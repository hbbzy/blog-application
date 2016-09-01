<?php
namespace frontend\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Manage = M('Manage');// 实例化Data数据模型
        $result = $Manage->find(1);
        $this->assign('result',$result);
        $this->display();
    }
}