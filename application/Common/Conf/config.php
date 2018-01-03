<?php
return array(
	//'配置项'=>'配置值'

    //设置页面Trace信息
    'SHOW_PAGE_TRACE' => true,

    //设置URL的访问模式
    'URL_MODEL'       => 2,

    //设置url伪静态后缀,通常使用html，这样便于搜索引擎搜索到
    //'URL_HTML_SUFFIX' => 'jsp',


    //配置css、js、images绝对路径
    'TMPL_PARSE_STRING' => array(
        '__ADMINCSS__' =>  '/Public/Admin/css',
        '__ADMINJS__'  =>  '/Public/Admin/js',
        '__ADMINIMG__' =>  '/Public/Admin/images',
    ),

    //允许访问的模块
    'MODULE_ALLOW_LIST' => array('Admin','Home'),

    //默认访问的模块
    'DEFAULT_MODULE'    => 'Admin',
);