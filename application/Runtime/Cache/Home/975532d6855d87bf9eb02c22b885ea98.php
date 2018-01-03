<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<hr>
： 会替换成当前网站的地址（不含域名）<br>
： 会替换成当前应用的URL地址 （不含域名）<br>
/Home：会替换成当前模块的URL地址 （不含域名）<br>
/Home/Test（__或者/Home/Test 兼容考虑）： 会替换成当前控制器的URL地址（不含域名）<br>
/Home/Test/index：会替换成当前操作的URL地址 （不含域名）<br>
/index.php/home/Test/index： 会替换成当前的页面URL<br>
/Public：会被替换成当前网站的公共目录 通常是 /Public/<br>
</body>
</html>