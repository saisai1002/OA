<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/3
 * Time: 下午5:25
 */

namespace Admin\Controller;
use Think\Controller;

class MainController extends Controller{
    //后台进入的首页面
    public function index(){
        $this->display('index');
    }

    //后台进入首页面的中间部分
    public function home(){
        $this->display('home');
    }
}