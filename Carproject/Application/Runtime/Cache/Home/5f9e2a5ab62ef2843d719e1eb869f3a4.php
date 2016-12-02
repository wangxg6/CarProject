<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width"/>
	<style>
		form {
			width: 250px;
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
		}

		.submitbtn {
			background-color: rgba(0,39,80,0.2);
	    border-radius: 2px;
	    display: block;
	    margin: 10px auto 0;
		}

		#wrong {
			margin-top: 50px;
			font-size: 16px;
			width: 100%;
			text-align: center;
			color: red;
			display: none;
		}

		#check {
			background-color: rgba(0,39,80,0.2);
	    border-radius: 2px;
	    display: block;
	    margin: 10px auto 0;

		}
		.changebtn {
			align-items: flex-start;
		text-align: center;
		cursor: default;
		color: buttontext;
		background-color: buttonface;
		box-sizing: border-box;
		border-width: 2px;
		border-style: outset;
		border-color: buttonface;
		border-image: initial;
		background-color: rgba(0,39,80,0.2);
		border-radius: 1px;
		display: block;
		margin: 10px auto 0;
		width:40px;
		font-size: 10px;
		text-decoration: none;
		}
	</style>
	<title>表单</title>
</head>
<body>
		<form class="login" action="../User/changepassword" method="post">
			<h3>修改密码</h3>
			旧密码：<input type="text" name="oldpassword" id="oldpassword">
			<br>
			新密码：<input type="password" name="newpassword" id="newpassword">
			<br>
			密码确认：<input type="password" name="confirmpassword" id="confirmpassword">
			<br>
			<input class="submitbtn" id="submit" type="submit" value="修改">
			<a href="../Main/main" class="changebtn">返回
		</form>
		<div id="wrong">两次密码不正确</div>
		<script>
				var newpassword = document.getElementById('newpassword');
				var confirmpassword = document.getElementById('confirmpassword');
				var submitbtn = document.getElementById('submit');
				function displaynone() {
					wrong.style.display = "none";
				}
				newpassword.addEventListener('change', function() {
					if(newpassword.value !== confirmpassword.value) {
						wrong.style.display = "block";
						submitbtn.disabled = true;
					}
					else {
						submitbtn.disabled = false;
						displaynone();
					}
				})
				confirmpassword.addEventListener('change', function() {
					if(newpassword.value !== confirmpassword.value) {
						wrong.style.display = "block";
						submitbtn.disabled = true;
					}
					else {
						submitbtn.disabled = false;
						displaynone();
					}
				})
		</script>
</body>
</html>