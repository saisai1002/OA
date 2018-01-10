<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/10
 * Time: 下午6:52
 */

namespace Admin\Controller;

class DocController extends CommonController{
    public function index(){
        $this->display('index');
    }

    public function add(){
        $this->display('add');
    }
}