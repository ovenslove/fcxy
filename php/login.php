
<?php require_once  "headercode.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script src="../js/login.js" type="text/javascript" ></script>
<script src="../js/encrypt/md5.js" type="text/javascript" ></script>
<script src="../js/encrypt/base64.js" type="text/javascript" ></script>
<script src="../js/encrypt/sha1.js" type="text/javascript" ></script>
<script src="../js/jquery.cookie.js" type="text/javascript" ></script>

<style type="text/css" media="screen">
	html{background-size: 100% 100%;background-image: url("../images/schoolpic/t3.jpg");}
	.re_box{background: rgba(255, 255, 255, 1); box-shadow:0 0 10px 5px rgba(0, 0, 0, 0.3);}
</style>
<div class="re_box">
		<div class="input_box">
		<h2 style="text-align: center">用户登录</h2>
	</div>
	<hr/>

	<form  method="post" >
		
	
	<div class="input_box loginstadu" style="text-align: center;"></div>

	<div class="box">

	<div class="input_box">
		<label>账号:</label><input type="text" name="username" value="" class="username"  tip=""><span>(用户名/邮箱/手机号)</span>
	</div>

	<div class="input_box">
		<label>密码:</label><input type="password" name="password" value="" class="password" tip=""><span></span>
	</div>

	<div class="input_box">
	<label>验证码:</label><input type="text" name="checkcode" value="" style="width: 120px;" class="checkcode" tip=""><img src="../php/imagecreate.php" alt="点我刷新" id="checkpic"><span></span>
	</div>

	</div>

	<div class="input_box">
		<label></label><input type="button"  value="登录" class="submit">
	</div>
	</form>
	<div class="input_box">
		<label></label><input type="checkbox" name="rememberpsd" value="yes" id="checkbox" class="checkbox" checked><span>记住密码</span>
		<a href="register.php" title="返回注册" style="margin-left: 40px;"><span>返回注册</span></a>
	</div>
	<div class="input_box"><label></label><a href="adminlogin.php" title="管理员入口">管理员入口</a></div>

</div>












<?php require_once  "footercode.php"; ?>