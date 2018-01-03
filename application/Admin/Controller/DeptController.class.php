<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/3
 * Time: 下午5:25
 */

namespace Admin\Controller;
use Think\Controller;

class DeptController extends Controller{


    //显示部门列表页
    public function index(){
        //实例化模型并调用select方法查询数据表中的数据
        $list = D('dept')->select();
        $this->assign('data',$list);
        $this->display('index');
    }

    //添加部门
    public function add(){
        $list = D('dept')->select();
        $this->assign('data',$list);
        $this->display('add');
    }

    //收集数据并将数据入库
    public function addOk(){
        $data = I('post.');
        $data['dept_created'] = date('Y-m-d H:i:s');
        $result = D('dept')->add($data);
        if ($result){
            $this->success('添加部门成功',U('index'),3);
        }else{
            $this->error('添加部门失败',U('add'),3);
        }
    }
}