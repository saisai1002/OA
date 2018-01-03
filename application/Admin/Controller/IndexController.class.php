<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    //后台登录首页面
    public function login(){
        $this->display('login');
    }
}