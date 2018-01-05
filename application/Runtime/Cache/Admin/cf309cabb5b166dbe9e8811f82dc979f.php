<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
<title>移动办公自动化系统</title>
<style>
	.main p input {
		float:none;
	}
</style>
</head>

<body>
<div class="title"><h2>信息登记</h2></div>
<form action="" method="post">
<div class="main">
    <p class="short-input ue-clear">
    	<label>用户名：</label>
        <input type="text" name="user_name" placeholder="用户名" />
    </p>
    <p class="short-input ue-clear">
        <label>昵称：</label>
        <input type="text" name="user_nickname" placeholder="昵称" />
    </p>
    <p class="short-input ue-clear">
        <label>性别：</label>
        <input type="radio" name="user_sex" value="1" checked="checked" />男&nbsp;&nbsp;
        <input type="radio" name="user_sex" value="2" />女
    </p>
    <p class="short-input ue-clear">
    	<label>密码：</label>
        <input type="text" name="user_password" placeholder="密码" />
    </p>
    <!--<p class="short-input ue-clear">-->
    	<!--<label>密码确认：</label>-->
        <!--<input type="text" name="re-password" placeholder="密码确认" />-->
    <!--</p>-->
    <div class="short-input select ue-clear">
    	<label>所属部门：</label>
        <select name="user_dept_id">
            <option >请选择所属部门</option>
            <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo["dept_id"]); ?>"><?php echo ($vo["dept_name"]); ?></option><?php endforeach; endif; ?>
        </select>
    </div>
    <p class="short-input ue-clear">
    	<label>生日：</label>
        <input type="text" name="user_birthday" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
    </p>
    <p class="short-input ue-clear">
    	<label>电话：</label>
        <input type="text" name="user_tel" />
    </p>
    <p class="short-input ue-clear">
    	<label>email：</label>
        <input type="text" name="user_email" />
    </p>
</div>
<div class="btn ue-clear">
	<a href="javascript:;" class="confirm">确定</a>
    <a href="<?php echo U('User/index');?>" class="clear">返回</a>
</div>
</form>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript">
    $('.confirm').click(function () {
        $('form').submit();
    })




/*$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});


showRemind('input[type=text], textarea','placeholder');*/
</script>
</html>