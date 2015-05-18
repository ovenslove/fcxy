<?php session_start(); ?>
<?php require_once  "headercode.php"; ?>
<?php 
		
	if(isset($_POST['username'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username=="admin123"&&$password=="admin123"){
			$_SESSION['username']=$username;
			$_SESSION['usertype']="管理员";
			header("location: adminmanage.php");
		}else{
			header("location: adminlogin.php");
		}
		
	}else{
		header("localtion: adminlogin.php");
	}


 ?>
<link rel="stylesheet" type="text/css" href="../css/login.css">

<script>
	$(function(){
		$("#checkpic").click(function(){
				$(this).attr("src",'imagecreate.php?' + Math.random());
				
			});

$(".username").blur(function(){
	var values=$(this).val();
	if(values==""){
		$(this).attr("tip","用户名不得为空");
		errorshow("username");
	}else{
		
		rightshow("username");
	}
	
});

$(".password").blur(function(){
	var values=$(this).val();
	if(values==""){
		$(this).attr("tip","密码不得为空");
		errorshow("password");
	}else{
		
		rightshow("password");

	}
	
});


$(".checkcode").blur(function(){
	var values=$(this).val();
	if(values==""){
		$(this).attr("tip","验证码不得为空");
		errorshow("checkcode");
	}else{
		$(this).attr("tip","验证码错误");
		yanzhengmacheck(values);
	}
	
});


$(".submit").click(function(){

	$(".box input").blur();

	if($(".re_error").length>0){
		alert("请输入正确后点击登录！")
		return false;
	}else{
		$("#form").submit();
		}


});




	});

function yanzhengmacheck(values){

	$.ajax({
				type:"POST",
				url:"yanzhengmacheck.php",
				data:"values="+values+"&rad="+Math.random(),
				success:function(msg){
					if(msg){
						rightshow("checkcode");
					}else {
						errorshow("checkcode");
					}					 	
				}									
	});
}


function rightshow(classname){
		var rig=$("."+classname).parent().find("span");
		rig.removeClass("re_error")
		rig.html("OK");
		rig.addClass('re_right');
		$("."+classname).css({"color":"black","borderColor":"#ccc"});
}

function errorshow(classname){
		var err=$("."+classname).parent().find("span");
		err.removeClass("re_right")
		err.html($("."+classname).attr("tip"));
		err.addClass('re_error');
		$("."+classname).css({"color":"red","borderColor":"red"});
}
</script>


<style type="text/css" media="screen">
	html{background-size: 100% 100%;background-image: url("../images/schoolpic/t3.jpg");}
	.re_box{background: rgba(255, 255, 255, 1); box-shadow:0 0 10px 5px rgba(0, 0, 0, 0.3);}
</style>
<div class="re_box">
		<div class="input_box">
		<h2 style="text-align: center">管理员登录</h2>
	</div>
	<hr/>

	<form  method="post"  action="adminlogin.php" id="form">
	<input type="hidden" name="rand" value='<?php rand(); ?>'>
	
	<div class="input_box loginstadu" style="text-align: center;"></div>

	<div class="box">

	<div class="input_box">
		<label>账号:</label><input type="text" name="username" value="" class="username"  tip=""><span>(管理员用户名)</span>
	</div>

	<div class="input_box">
		<label>密码:</label><input type="password" name="password" value="" class="password" tip=""><span>(登录密码)</span>
	</div>

	<div class="input_box">
	<label>验证码:</label><input type="text" name="checkcode" value="" style="width: 120px;" class="checkcode" tip=""><img src="../php/imagecreate.php" alt="点我刷新" id="checkpic"><span></span>
	</div>

	</div>

	<div class="input_box">
		<label></label><input type="submit"  value="登录" class="submit">
	</div>
	</form>
	
	

</div>









<?php require_once  "footercode.php"; ?>