<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>测试上传</title>
</head>
<body>
<form action="<?php echo U('upload');?>" enctype="multipart/form-data" method="post" >
    <input type="text" name="name" />
    <input type="file" name="photo" /><br>
    <input type="submit" value="提交" >
</form>
</body>
</html>