<?php
namespace manage\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        //判断是否登录
        if(I('session.userid')){
            $this->redirect('/manage.php/Index/index','', 5, '页面跳转中...');
        }else{
            $this->display('default:login');
        }
    }
    
    public function login(){
        //判断是否登录
        if(I('session.userid')){
            $this->redirect('/manage.php/Index/index','', 5, '页面跳转中...');
        }else{
            $email = I('get.email');
            $pwd = I('get.pwd');
            
            $Manage = M('Manage');// 实例化Data数据模型
            $result = $Manage->where("email='{$email}'")->find();
            if(!$result){
                $this->error('登录失败');
            }
            $passwd = md5($pwd.$result['halt']);
            if($passwd === $result['pwd']){
                $_SESSION['userid'] = $result['id'];
                $this->success('登录成功','/manage.php/Index/index');
            }else{
                $this->error('登录失败');
            }
        }
    }
}