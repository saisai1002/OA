<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-mgt.css" />
<link rel="stylesheet" href="/Public/Admin/css/WdatePicker.css" />
<title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>信息管理</h2></div>
<!--<div class="table-operate ue-clear">-->
	<!--<a href="javascript:;" class="add">添加</a>-->
    <!--<a href="javascript:;" class="del">删除</a>-->
    <!--<a href="javascript:;" class="edit">编辑</a>-->
    <!--<a href="javascript:;" class="count">统计</a>-->
    <!--<a href="javascript:;" class="check">审核</a>-->
<!--</div>-->
<div class="table-box">
	<table>
    	<thead>
        	<tr>
        		<th></th>
            	<th class="num">序号</th>
                <th class="name">部门名称</th>
                <th class="process">上级部门</th>
                <th class="node">排序</th>
                <th class="time">备注信息</th>
                <th class="operate">操作</th>
            </tr>
        </thead>
        <tbody>
        	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        		<td style="width:30px"><input type="checkbox" name="c" value="<?php echo ($vo["dept_id"]); ?>" /></td>
            	<td class="num"><?php echo ($vo["dept_id"]); ?></td>
                <td class="name">
                	<?php echo (str_repeat('---',$vo["dept_level"])); echo ($vo["dept_name"]); ?>
                </td>
                <td class="process"><?php echo ((isset($vo["name"]) && ($vo["name"] !== ""))?($vo["name"]):'顶级部门'); ?></td>
                <td class="node"><?php echo ($vo["dept_sort"]); ?></td>
                <td class="time"><?php echo ($vo["dept_remark"]); ?></td>
                <td class="operate">
                	<a href="<?php echo U('del', 'id='.$vo['dept_id']);?>">删除</a>&nbsp;&nbsp;|
                	<a href="<?php echo U('edit', 'id='.$vo['dept_id']);?>">编辑</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<!--<div class="pagination ue-clear">-->
	<!--<input type="button" value="全选" onclick="selectAll()" /> -->
	<!--<input type="button" value="全消" onclick="cancelAll()" />-->
<!--</div>-->
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.pagination.js"></script>
<script type="text/javascript">
function selectAll(){
	// 获取所有name=c的标签， list保存的是所有input对象，是一个集合（collection），可以当成数组来使用
	var list = document.getElementsByName('c');
	// list对象是一个  NodeList对象
	//alert(list);
	// 遍历list中的每一个input  type=checkbox 对象
	for(i = 0; i < list.length; i++){
		//判断每一个 checked属性是否为true，不为true，则该为true
		if(list[i].checked != true){
			list[i].checked = true;
		}
	}
}

function cancelAll(){
	var list = document.getElementsByName('c');
	for(i = 0; i < list.length; i++){
		if(list[i].checked != false){
			list[i].checked = false;
		}
	}
}
//获取del对象，并且注册点击事件
$('.del').click(function(){
	// 获取所有选中的checkbox
	// $(':checkbox') 获取所有的checkbox
	// $(':checkbox:checked') 获取所有选中的checkbox
	// obj_list 包含多个checkbox
	var obj_list = $(':checkbox:checked');
	// 遍历obj_list，获取所有的value值（dept_id的值）
	// obj_list是一个被jquery封装过的对象, 不能使用for循环来处理
	// alert(obj_list);
	var ids = "";
	// 遍历obj_list对象，取出每一个对象的value值，拼接成一个字符串
	obj_list.each(function(){
		// ids中保存所有选中的checkbox的value值。
		ids += $(this).val() + ",";
	})
	// 去掉最后一个 ，
	ids = ids.substr(0, ids.length-1);
	// 跳转到 Dept/dels方法中
	location.href = "/Admin/Dept/dels/ids/"+ids;
});

$(".select-title").on("click",function(){
	$(".select-list").hide();
	$(this).siblings($(".select-list")).show();
	return false;
})
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(this).parent($(".select-list")).siblings($(".select-title")).find("span").text(txt);
})

/* $('.pagination').pagination(100,{
	callback: function(page){
		alert(page);	
	},
	display_msg: true,
	setPageNo: true
});*/


$("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

showRemind('input[type=text], textarea','placeholder');
</script>
</html>