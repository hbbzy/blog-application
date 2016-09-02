<?php
namespace manage\Controller;
use Think\Controller;
class BlogController extends Controller {
    public function index(){
        $this->display('default:blog');
    }
    
    public function edit(){
        $this->display('default:blog-edit');
    }
}