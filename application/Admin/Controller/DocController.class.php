<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/10
 * Time: 下午6:52
 */

namespace Admin\Controller;


use Think\Upload;

class DocController extends CommonController{
    //显示列表
    public function index(){
            $list = D('doc')->select();
            $this->assign('data',$list);
            $this->display('index');
    }


    //添加公文
    public function add(){
        if (IS_POST){
            //存储上传的图片处理
            $config = array(
                'maxSize' => 5242880,
                'exts'      =>     array('jpg', 'gif', 'png', 'jpeg'),
                'rootPath'  =>    C('UPLOAD_PATH'),//项目的根目录
            );
            $upload = new Upload($config);
            $info = $upload->upload();
            if (!$info){
                $this->error($upload->getError());
            }


            $data = I('post.');
            $data['doc_created'] = date('Y-m-d H:i:s');
            $data['doc_nickname'] = session('user_nickname');
            $data['doc_file'] = "/".C('UPLOAD_PATH').$info['doc_file']['savepath'].$info['doc_file']['savename'];
            //dump($data);die;
            $result = D('doc')->add($data);
            if($result){
                $this->success('添加公文成功',U('index'),3);
            }else{
                $this->error('添加公文失败',U('add'),3);
            }


        }else {
            $this->display('add');
        }
    }
    //编辑公文----待完成
    public function edit(){
        $doc_id = I('get.doc_id');
        $condition = [
            'doc_id' => $doc_id
        ];
        if (IS_POST){

        }else{
            $data = D('doc')->where($condition)->find();
            $this->assign('data',$data);
            $this->display('edit');
        }


    }





    //删除公文
    public function delete(){
        $doc_id = I('get.doc_id');
        $result = D('doc')->delete($doc_id);
        if ($result){
            $this->success('删除公文成功',U('index'),3);
        }else{
            $this->error('删除公文失败',U('index'),3);
        }
    }
}