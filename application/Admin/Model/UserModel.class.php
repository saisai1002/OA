<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/10
 * Time: 下午3:39
 */
namespace Admin\Model;
use Think\Model;
class UserModel extends Model
{
    public function checkLogin($user_name,$user_password){
        $condition = [
            'user_name' => $user_name,
        ];
        $info = $this->where($condition)->find();
        if(!$info){
            return false;
        }elseif ($info['user_password'] == $user_password){
            session('user_id',$info['user_id']);
            session('user_password',$info['user_password']);
            session('user_nickname',$info['user_nickname']);
            session('user_dept_id',$info['user_dept_id']);
            return true;
        }
    }
}