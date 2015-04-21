$(function(){

var reg = new Array();
reg['username']=/^[A-Za-z0-9_-]{3,16}$/;
reg['password']=/^[A-Za-z0-9_-]{6,18}$/;
reg['password2']=/^[A-Za-z0-9_-]{6,18}$/;
reg['email']=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
reg['phone']=/1[3|4|5|7|8|][0-9]{9}$/;

$(".box input").blur(function(){
	var classname=$(this).attr("class");
	switch(classname){
		case "username":
			var tip=$(this).attr("tip");
			if(checkinput(classname,reg[classname])){
				formcheck(classname,"用户名已存在，请重新输入！");
				
			}else{
				errorshow(classname);
			}
			break;
		case "password":
			var tip=$(this).attr("tip");
			if(checkinput(classname,reg[classname])){
				rightshow(classname);
			}else{
				errorshow(classname);
			}
			break;
		case "password2":
			var tip=$(this).attr("tip");
			if(checkinput(classname,reg[classname])){
				if($("."+classname).val()==$(".password").val()&&$(this).val()!=""){
					rightshow(classname);
				}else{
					errorshow(classname);
				}				
			}else{
				errorshow(classname);
			}
			break;
		case "email":
			var tip=$(this).attr("tip");
			if(checkinput(classname,reg[classname])){
				formcheck("email","邮箱已被注册，请更换邮箱！");
				rightshow(classname);
			}else{
				errorshow(classname);
			}
			break;
		case "phone":
			var tip=$(this).attr("tip");
			if(checkinput(classname,reg[classname])){
				formcheck("phone","手机号已被绑定，请更换手机号！");
				rightshow(classname);
			}else{
				errorshow(classname);
			}
			break;
		case "checkbox":
			var tip=$(this).attr("tip");
			if($(this).is(':checked')){
					var rig=$(this).parent().find("span");
					rig.removeClass("re_error")
					rig.addClass('re_right');
				}else{
					var err=$(this).parent().find("span");
					err.removeClass("re_right")
					err.addClass('re_error');

				}
			break;
		
			//如果需要添加，请在此后添加case
		
	}	
});


//提交前检查
$(".submit").click(function(){

	$(".box input").blur();
	
	if($(".re_error").length>0){
		return false;
	}else{
		$(".password").val(hex_sha1(hex_md5($(".password").val())));
		$(".password2").val(hex_sha1(hex_md5($(".password2").val())));
		return true;
		}
});

//正则验证函数
function checkinput(classname ,str ){
		var values=$("."+classname).val();
		if(str.test(values)){			
			return true;
		}else{			
			return false;
		}		
	}

function rightshow(classname){
		var rig=$("."+classname).parent().find("span");
		rig.removeClass("re_error")
		rig.html("正确");
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

function formcheck(classname,tip){
	var str=classname;
	var values=$("."+str).val();
	$.ajax({
				type:"POST",
				url:"formcheck.php",
				data:"tablename=user&typename="+str+"&values="+values+"&rad="+Math.random(),
				dataType:"json",
				success:function(msg){
					if(msg==1){
						var err=$("."+str).parent().find("span");
						err.removeClass("re_right")
						err.html(tip);
						err.addClass('re_error');
						$("."+str).css({"color":"red","borderColor":"red"});
					}else if(msg==0){
						rightshow(classname);
						}					 	
				}									
	});
}//formcheck



});