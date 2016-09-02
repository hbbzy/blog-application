<?php
namespace manage\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('default:index');
    }
    
    public function home(){
        $this->display('default:index_v4');
    }
}