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


//提交前检查
$(".submit").click(function(){

	$(".box input").blur();

	if($(".re_error").length>0){
		return false;
	}else{
		$(".password").val(hex_sha1(hex_md5($(".password").val())));

		

		var username=$(".username").val();
		var password=$(".password").val();
		$.ajax({
				type:"POST",
				url:"logincheck.php",
				data:"username="+username+"&password="+password+"&rad="+Math.random(),
				success:function(msg){
					if(msg=='true'){
						
						if($(".checkbox").is(':checked')){
								 $.cookie($(".username").val(), $(".password").val(), { 
          						path: "/", expires: 7 }) 
							}
							$(".loginstadu").html("<h3 style='color:green;'>登录成功，3秒后前往个人空间</h3>");
							setTimeout(move,3000);
							//3秒后定向到homepage
					}else {

						$(".loginstadu").html("<h3 style='color:red;'>登录失败，请重新登录</h3>");

						setTimeout(function(){$(".loginstadu").html("")},2000);
						$(".box input").val("");
					}					 	
				}									
		});




		function move(){
			window.location='homepage.php';
		}
		
		

		}


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














































});