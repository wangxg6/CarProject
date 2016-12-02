<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width"/>
	<style>
		form {
			width: 200px;
			margin: auto;
			line-height: 30px;
			border: 1px solid rgba(0,0,0,0.2);
	    padding: 10px;
	    border-radius: 8px;
	    margin-top: 200px;
		}

		h3 {
			text-align: center;
    	margin: 0;
    	color: red;
		}

		.submitbtn {
			background-color: rgba(0,39,80,0.2);
	    border-radius: 2px;
	    display: block;
	    margin: 10px auto 0;
		}
	</style>
	<title>表单</title>
</head>
<body>
		<form class="login" method="post" action="">
			<h3>用户名或密码错误</h3>
			用户名：<input type="text" name="username" id="username">
			<br>
			密码：<input type="password" name="password" id="password">
			<br>
			<input class="submitbtn" type="submit" value="登录">
		</form>
</body>
</html>