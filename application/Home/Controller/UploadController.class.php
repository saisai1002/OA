<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/10
 * Time: 下午5:59
 */

namespace Home\Controller;
use Think\Controller;

class UploadController extends Controller{
    public function index(){
        $this->display();
    }

    //主要功能是实现图片的上传功能
    public function upload(){
        $config = array(
            'maxSize' => 5242880,
            'exts'      =>     array('jpg', 'gif', 'png', 'jpeg'),
            'rootPath'  =>    './Uploads/',//项目的根目录
        );

        $upload = new \Think\Upload($config);
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            dump($upload->getError());
            $this->error($upload->getError());
        }else{// 上传成功
            dump($info);
            $this->success('上传成功！');
        }
    }

}