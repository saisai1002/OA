<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "hello world!";
    }

    public function url_test(){
        echo U('Home/Index/index');

    }
}