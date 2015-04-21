<?php require_once  "headercode.php"; ?>

<link rel="stylesheet" type="text/css" href="../css/register.css">
<script src="../js/register.js" type="text/javascript" ></script>
<script src="../js/encrypt/md5.js" type="text/javascript" ></script>
<script src="../js/encrypt/base64.js" type="text/javascript" ></script>
<script src="../js/encrypt/sha1.js" type="text/javascript" ></script>
<div class="re_box">
	<div class="input_box">
		<h2 style="text-align: center">用户注册</h2>
	</div>
	<hr/>
	<div class="input_box"></div>
	<form action="registersave.php" method="post" name="register_form" class="register_form">
		
	<div class="box">
		
	
	<div class="input_box">
		<label>用户名:</label><input type="text" name="username" value="" class="username"  tip="由字母数字下划线组成(3-16)"  ><span class="simspan">由字母数字下划线组成(3-16)</span>
	</div>
		<div class="input_box">
		<label>密码:</label><input type="password" name="password" value="" class="password" tip="由字母数字下划线组成(6-18)" ><span class="simspan">由字母数字下划线组成(6-18)</span>
	</div>
		<div class="input_box">
		<label>再次输入:</label><input type="password"  value="" class="password2" tip="两次密码必须一致"><span class="simspan"></span>
	</div>
		<div class="input_box">
		<label>邮箱:</label><input type="email" name="email" value="" class="email" tip="邮箱格式：xxxx@xxx.xxx"><span class="simspan">邮箱格式：xxxx@xxx.xxx</span>
	</div>
	<div class="input_box">
		<label>手机号:</label><input type="tel" name="phone" value="" class="phone" tip="手机号为11位数字"><span class="simspan">手机号位11位数字</span>
	</div>
	</div>
	<div style="width: 100%; position: relative;">
		<input type="submit" value="注&#09;册" class="submit"><br>
		<div class="box">
		<input type="checkbox"  checked="checked" name="read_before" value="read" class="checkbox" style="margin-left: 130px; margin-top: 8px; height: 16px; width: 16px;">&nbsp;
		
		<span style="font-size: 14px;">请阅读<a href="#" title="用户注册协议，勾选则代表阅读并同意">《用户注册协议》</a></span>
	</div>
	</div>
	<div class="input_box" style="margin-top: 10px;">
		<a href="login.php" title="返回登录" style="margin-left: 130px;">返回登录</a><a href="#" title="找回密码" style="margin-left: 100px;">找回密码</a>
	</div>

	

	</form>

</div>



















<?php require_once  "footercode.php"; ?>