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
    public function index(){
        $this->display('index');
    }

    public function home(){
        $this->display();
    }
}