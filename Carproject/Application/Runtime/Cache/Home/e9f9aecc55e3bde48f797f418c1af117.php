<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width"/>
	<style>
		input {
			font-size: 12px;
		}

		.blockarea {
			border: 1px solid rgba(0,0,0,0.2);
	    padding: 10px;
	    border-radius: 8px;
	    margin: 10px auto;
	    line-height: 30px;
		}

		h1 {
			text-align: center;
		}

		.btn {
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
    padding: 2px 6px 3px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonface;
    border-image: initial;
    background-color: rgba(0,39,80,0.2);
    border-radius: 2px;
    display: block;
    margin: 10px auto 0;
    width: 70px;
    font-size: 12px;
    text-decoration: none;
		}
	</style>
	<title>表单</title>
</head>
<body>
	<div class="main">
		<form action="../Main/submit" method="post" >
			<div class="blockarea">
				<h1 class="title">车展现场</h1>
				凯美瑞：<input type="text" id="camry1" name="CAR10">
				<br>
				凯美瑞双擎：<input type="text" id="camrydouble1" name="CAR20">
				<br>
				雷凌：<input type="text" id="leiling1" name="CAR30">
				<br>
				雷凌双擎：<input type="text" id="leilingdouble1" name="CAR40">
				<br>
				致炫：<input type="text" id="zhixuan1" name="CAR50">
				<br>
				汉兰达：<input type="text" id="hanlanda1" name="CAR60">
				<br>
				逸致：<input type="text" id="yizhi1" name="CAR70">
			</div>
			<div class="blockarea">
				<h1 class="title">展厅</h1>
				凯美瑞：<input type="text" id="camry2" name="CAR11">
				<br>
				凯美瑞双擎：<input type="text" id="camrydouble2" name="CAR21">
				<br>
				雷凌：<input type="text" id="leiling2" name="CAR31">
				<br>
				雷凌双擎：<input type="text" id="leilingdouble2" name="CAR41">
				<br>
				致炫：<input type="text" id="zhixuan2" name="CAR51">
				<br>
				汉兰达：<input type="text" id="hanlanda2" name="CAR61">
				<br>
				逸致：<input type="text" id="yizhi2" name="CAR71">
			</div>
			<input class="btn" type="submit" value="提交">
		</form>
		<a href="../User/change" class="changebtn">修改密码
			<a href="../User/logout" class="changebtn">切换用户	
	</div>
</body>
</html>