<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/5
 * Time: 下午3:44
 */

namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller{
    //显示用户列表
    public function index(){
        $pagesize = 2;
        $pageno = I('get.p',1);

        $data = D('user')->alias('u')
            ->field('u.*,d.dept_name')
            ->page($pageno,$pagesize)
            ->join('left join oa_dept as d on u.user_dept_id = d.dept_id')
            ->select();
        //dump($data);die;
        $this->assign('data',$data);

        $count = D('user')->count();
        $page =new \Think\Page($count,$pagesize);

        $p = $page->show();


        $this->assign('p',$p);

        $this->display('index');
    }

    //添加用户
    public  function add(){
        if(IS_POST){
            $data = I('post.');
            $data['user_created'] = date('Y-m-d H:i:s');
            $result = D('user')->add($data);
            if ($result){
                $this->success('添加用户成功',U('index'),3);
            }else{
                $this->error('添加用户失败',U('add',3));
            }
        }else{
            $data = D('dept')->select();
            //dump($data);die;
            $this->assign('data',$data);
            $this->display('add');
        }
    }


    //编辑用户信息
    public function edit(){
        $user_id = I('get.user_id');
        $context = [
            'user_id' => $user_id
        ];
        if(IS_POST){
            $data = I('post.');
            $data['user_updated'] = date('Y-m-d H:i:s');
            $result = D('user')
                ->where($context)
                ->save($data);
            if ($result){
                $this->success('修改用户成功',U('index'),3);
            }else{
                $this->error('修改用户失败',U('index'),3);
            }
        }else{
            $list = D('dept')->select();
            $data = D('user')->where($context)->find();
            $this->assign('data',$data);
            $this->assign('list',$list);
            $this->display('edit');
        }
    }


    //删除单条用户信息
    public function delete(){
        $user_id = I('get.user_id');
        //echo $user_id;die;
        $context = [
            'user_id' => $user_id
        ];
        $result = D('user')->where($context)->delete();
        if ($result){
            $this->success('删除用户成功',U('index'),3);
        }else{
            $this->error('删除用户失败',U('index'),3);
        }

    }
}