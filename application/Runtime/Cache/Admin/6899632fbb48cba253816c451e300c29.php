<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-mgt.css" />
<link rel="stylesheet" href="/Public/Admin/css/WdatePicker.css" />
<title>移动办公自动化系统</title>
<style type='text/css'>
	table tr .num{ width:63px; text-align: center;}
	table tr .name{ width:63px; padding-left:17px;}
	table tr .nickname{ width:63px; padding-left:13px;}
	table tr .dept{ width:63px; padding-left:13px;}
	table tr .role{ width:63px; padding-left:13px;}
	table tr .sex{ width:63px; padding-left:13px;}
	table tr .birthday{ width:63px; padding-left:13px;}
	table tr .tel{ width:63px; padding-left:13px;}
	table tr .email{ width:63px; padding-left:13px;}
	table tr .ctime{ width:63px; padding-left:13px;}
	table tr .operate{ width:63px; padding-left:15px;}
	table tr .operate a{ color:#2c7bbc;}
	table tr .operate a:hover{ text-decoration:underline;}
</style>
</head>

<body>
<div class="title"><h2>信息管理</h2></div>
<div class="table-operate ue-clear">
	<!--<a href="javascript:;" class="add">添加</a>-->
    <!--<a href="javascript:;" class="del">删除</a>-->
    <!--<a href="javascript:;" class="edit">编辑</a>-->
    <a href="<?php echo U('User/count');?>" class="count">统计</a>
    <a href="javascript:;" class="check">审核</a>
</div>
<div class="table-box">
	<table>
    	<thead>
        	<tr>
            	<th class="num">序号</th>
                <th class="name">姓名</th>
                <th class="nickname">昵称</th>
                <th class="dept">部门</th>
                <th class="role">角色</th>
                <th class="sex">性别</th>
                <th class="birthday">生日</th>
                <th class="tel">电话</th>
                <th class="email">邮箱</th>
                <th class="ctime">添加时间</th>
                <th class="operate">操作</th>
            </tr>
        </thead>
        <tbody>
        	<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                    <td class="num"><?php echo ($vo["user_id"]); ?></th>
                    <td class="num"><?php echo ($vo["user_name"]); ?></th>
                    <td class="name"><?php echo ($vo["user_nickname"]); ?></th>
                    <td class="nickname"><?php echo ($vo["dept_name"]); ?></th>
                    <td class="dept"><?php echo ($vo["user_id"]); ?></th>

                    <td class="role">
                        <?php if($vo['user_sex'] == 1 ): ?>男
                            <?php else: ?> 女<?php endif; ?>
                    </th>



                    <td class="sex"><?php echo ($vo["user_birthday"]); ?></th>
                    <td class="birthday"><?php echo ($vo["user_tel"]); ?></th>
                    <th class="tel"><?php echo ($vo["user_email"]); ?></th>
                    <th class="email"><?php echo ($vo["user_created"]); ?></th>
                    <th class="operate">
                        <a href="<?php echo U('edit','user_id='.$vo['user_id']);?>">编辑</a>
                        |
                        <a href="<?php echo U('delete','user_id='.$vo['user_id']);?>">删除</a>
                    </th>
                </tr><?php endforeach; endif; ?>


            
        </tbody>
    </table>
</div>
<div class="pagination ue-clear"><?php echo ($p); ?></div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.pagination.js"></script>
<script type="text/javascript">




/*$(".select-title").on("click",function(){
	$(".select-list").hide();
	$(this).siblings($(".select-list")).show();
	return false;
})
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(this).parent($(".select-list")).siblings($(".select-title")).find("span").text(txt);
})

$('.pagination').pagination(100,{
	callback: function(page){
		alert(page);
	},
	display_msg: true,
	setPageNo: true
});

$("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

showRemind('input[type=text], textarea','placeholder');*/




</script>
</html>