<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/1/5
 * Time: 下午1:05
 */
function my_test(){
    echo 1111;
}


//无限极分类函数调用
function getTree($data,$parent_id = 0,$dept_level = 0){
    static $tree = [];
    foreach ($data as $row){
        if($row['dept_pid'] == $parent_id){
            $row['dept_level'] = $dept_level;
            $tree[] = $row;
            getTree($data,$row['dept_id'],$dept_level+1);
        }
    }
    return $tree;
}