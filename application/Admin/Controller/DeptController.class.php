<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/3
 * Time: 下午5:25
 */

namespace Admin\Controller;

class DeptController extends CommonController{


    //显示部门列表页
    public function index(){
        //实例化模型并调用select方法查询数据表中的数据

        $pagesize = 2;

        $pageno = I('get.p',1);


        //$data = D('dept');
        //dump($data);die;
        $list = D('dept')->alias('d1')
            ->field('d1.dept_id,d1.dept_name,d1.dept_sort,d1.dept_remark,d1.dept_pid,d1.dept_level,d2.dept_name as name')
            ->page($pageno,$pagesize)
            ->join('left join oa_dept d2 on d1.dept_pid = d2.dept_id')
            ->select();
        //$list = getTree($list);
        //dump($list);die;
        $this->assign('data',$list);


        //当前表中总的记录数
        $count = D('dept')->count();
        //echo $count;die;

        $page = new \Think\Page($count,$pagesize);

        $p = $page->show();
        $this->assign('p',$p);
        $this->display('index');
    }

    //添加部门
    public function add(){
        //如果是post提交则入库，否则显示添加部门页面
        if (IS_POST){
            $data = I('post.');
            $data['dept_created'] = date('Y-m-d H:i:s');
            $result = D('dept')->add($data);
            if ($result){
                $this->success('添加部门成功',U('index'),3);
            }else{
                $this->error('添加部门失败',U('add'),3);
            }
        }else{
            $list = D('dept')->select();
            $this->assign('data',$list);
            $this->display('add');
        }
    }


    //删除单条数据
    public function delete(){
        $dept_id = I('get.dept_id');
        $result = D('dept')->where('dept_id = '.$dept_id)->delete();
        if ($result){
            $this->success('删除部门成功',U('index'),3);
        }else{
            $this->error('删除部门失败',U('index'),3);
        }
    }

    //编辑单条数据
    public function edit(){
        $dept_id = I('get.dept_id');
        if (IS_POST){
            $data = I('post.');
            $data['dept_id'] = $dept_id;
            $data['dept_updated'] = date('Y-m-d H:i:s');
            //dump($data);die;
            $result = D('dept')->where('dept_id = '.$data['dept_id'])->save($data);
            if ($result){
                $this->success('修改部门成功',U('index'),3);
            }else{
                $this->error('修改部门失败',U('index',3));
            }
        }else{
            $list = D('dept')->where('dept_id = '.$dept_id)->find();
            $this->assign('data',$list);
            $this->display('edit');
        }
    }
}