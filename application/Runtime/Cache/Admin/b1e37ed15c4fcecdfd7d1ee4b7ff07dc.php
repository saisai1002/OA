<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/Public/Admin/css/base.css" />
    <link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
    <title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>部门信息</h2></div>
<form action="" method="post">
    <div class="main">
        <p class="short-input ue-clear">
            <label>部门名称：</label>
            <input type="text" name="dept_name" value="<?php echo ($data["dept_name"]); ?>" placeholder="部门名称" />
        </p>
        <div class="short-input select ue-clear">
            <label>上级部门：</label>
            <div class="select-wrap">
                <select name="dept_pid">
                    <option value="0">顶级部门</option>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["dept_id"]); ?>"><?php echo ($vo["dept_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <p class="short-input ue-clear">
            <label>排序：</label>
            <input type="text" name="dept_sort" value="<?php echo ($data["dept_sort"]); ?>" />
        </p>
        <p class="short-input ue-clear">
            <label>备注信息：</label>
            <textarea placeholder="请输入内容" name="dept_remark"><?php echo ($data["dept_remark"]); ?></textarea>
        </p>
    </div>
    <div class="btn ue-clear">
        <a href="javascript:;" class="confirm">确定</a>
        <a href="javascript:;" class="clear">返回</a>
    </div>
</form>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript">
    //给确定按钮增加点击确定事件
    $(".confirm").click(function () {
        $("form").submit();
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