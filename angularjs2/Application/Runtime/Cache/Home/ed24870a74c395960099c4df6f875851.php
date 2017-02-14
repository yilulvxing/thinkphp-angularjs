<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="/bbs/Public/css/common.css"/>
	<link rel="stylesheet" type="text/css" href="/bbs/Public/css/main.css"/>
	<script type="text/javascript" language="javascript" src="/bbs/Public/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="/bbs/Public/js/style.js"></script>
	<!-- 对话框的 css 和 js -->
	<link rel="stylesheet" href="/bbs/Public/css/boxy.css" type="text/css" />
	<script type="text/javascript" src="/bbs/Public/js/jquery.boxy.js"></script>
	<!-- 滑动条 -->
	<script src="/bbs/Public/js/jquery.mCustomScrollbar.min.js"></script>
	<link href="/bbs/Public/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
</head>
<body>
<div class="header">
	<div class="header_logo fl"><a href="#"><img src="/bbs/Public/images/logo.png"></a></div>
	<div class="header_menu">
		<ul>
			<li><a href="#" class="astyle">网站首页</a></li>
		</ul>
	</div>
	<div class="header_user">
		<ul>
			<li>欢迎您：管理员</li>
			<li><a href="#">修改密码</a></li>
			<li><a href="#">退出</a></li>
		</ul>
	</div>
</div>

<div class="container clearfix" id="container_height">
	<div class="container-left">
		<div class="container-left-title">帖子列表</div>
		<ul class="sidebar-list">
			<li><a href="/bbs/index.php/Home/Index/index">列表</a></li>
		</ul>
	</div>

	<div class="container-right">
		<div class="container-right-title">
			当前位置：首页&nbsp;&gt;&nbsp;系统管理
		</div>

		<div class="result-wrap">
			<div class="result-content">
				<table class="insert-tab">
					<tr>
						<th>标题：新开的帖子</th>
						<td></td>
					</tr>
					<tr>
						<th></th>
						<td><p><span>张三:</span>你好<span></span></p></td>
					</tr>
				</table>
			</div>
		</div>

	</div>
</div>

<div class="footer">
	<div>版权所有&nbsp;&copy;&nbsp;2014-2015&nbsp;上海猎鹰网络有限公司&nbsp;并保留所有权利</div>
</div>
<script>
	function addTie() {
		var author = $("#author").val();
		var content = $("#content").val();
		if (author == '') {
			alert('作者不能为空');return;
		}
		if (content == '') {
			alert('内容不能为空');return;
		}
		$.post('http://localhost/bbs/index.php/Home/Index/doAdd', {author:author, content:content}, function(data){
			if (data.code=90200) {
				window.location.href = "http://localhost/bbs/index.php/Home/Index/index";
			} else {
				alert(data.msg);
			}
		});
	}
</script>
</body>
</html>