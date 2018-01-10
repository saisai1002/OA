<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/10
 * Time: 下午4:17
 */

namespace Admin\Controller;
use Think\Controller;


class CommonController extends Controller
{
    public function _initialize(){
        if(!session('?user_id')){
            $this->error('请先登录，再访问',U('Index/login'),3);
        }
    }
}