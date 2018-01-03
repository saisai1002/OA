<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/3
 * Time: 下午4:33
 */
//1.声明命名空间
namespace Home\Controller;

//2.引入Controller基类
use Think\Controller;


//3.声明当前用户创建的控制器并继承基类Controller
class TestController extends Controller{
    function index(){
        $str = 3;
        $int = 20;
        $this->assign('s',$str);
        $this->assign('a',$int);

        $this->display('index');
    }
}