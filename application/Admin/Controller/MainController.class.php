<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/3
 * Time: 下午5:25
 */

namespace Admin\Controller;

class MainController extends CommonController{
    //后台进入的首页面
    public function index(){


        $user_name = session('user_name');
        $this->assign('user_name',$user_name);



        $this->display('index');
    }

    //后台进入首页面的中间部分
    public function home(){
        $this->display('home');
    }

    //退出系统
    public function logout(){
        //将session中的值清除
        session(null);
        $this->success('退出系统成功',U('Index/login'),3);

    }
}