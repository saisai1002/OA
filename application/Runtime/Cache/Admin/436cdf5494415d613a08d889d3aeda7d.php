<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />

	<script type="text/javascript" charset="utf-8" src="/Public/Common//ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="/Public/Common//ueditor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="/Public/Common//ueditor/lang/zh-cn/zh-cn.js"></script>


	<title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>信息登记</h2></div>
<form action="/Admin/Doc/addOk" method="post" enctype='multipart/form-data'>
<div class="main">
    <p class="short-input ue-clear">
    	<label>标题：</label>
        <input name="doc_name" type="text" placeholder="公文标题" />
    </p>
	<p class="short-input ue-clear">
    	<label>附件：</label>
        <input type="file" name="doc_file" />
    </p>
    <p class="short-input ue-clear" style="float:left;">
    	<label>内容：</label>
    </p>
	<p style='width:900px; padding-left:0; float:left;'>
		<textarea name="doc_content" id="editor" style="width:800px;height:400px"></textarea>
	</p>
	<div style='clear:both;'></div>
</div>
<div class="btn ue-clear">
	<a href="javascript:;" class="confirm" >确定</a>
    <a href="<?php echo U('Doc/index');?>" class="clear" id='btnReset'>返回</a>
</div>
</form>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');




$(function(){
	$('#btnSubmit').bind('click',function(){
		$('form').submit();
	});
	
	$('#btnReset').bind('click',function(){
		$('form')[0].reset();
	});
});	

$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});

showRemind('input[type=text], textarea','placeholder');
</script>
</html>