$(function(){

	//----全局变量---------------------------
			var menu_inde=0;
			var menu_ind_tem=1000;
			var pages=1;
			var limitcount=16;
			var typename="";
			var sumpages=0;
			var sumcount=0;
//-----------------------------------------------------------------------------
	//初始化
	baner(3);	
	//定义一个全局变量
	var baner_index=0;
		//自动轮播
		function baner_fn(){
			var temp=baner_index%4;
			baner(temp);
			baner_index++;
			
			}
			//定时器
		var baner_timer=setInterval(baner_fn,5000);
		//轮播函数	
		function baner(sn){
			if(sn==3){
				$(".bannerpic img").eq(0).css({"left":"0","opacity":"1","zIndex":"96"});

				$(".bannerpic img").eq(sn).animate({"left":"-1400px","opacity":"0"},2000);
				
			}else if(sn==0){

				$(".bannerpic img").eq(sn).css({"zIndex":"100","opacity":"1"});
				$(".bannerpic img").eq(sn+1).css({"left":"0","opacity":"1"});

				$(".bannerpic img").eq(sn).animate({"left":"-1400px","opacity":"0"},2000);
				
			}else{
				$(".bannerpic img").eq(sn+1).css({"left":"0","opacity":"1"});

				$(".bannerpic img").eq(sn).animate({"left":"-1400px","opacity":"0"},2000);
			}
		}
			

//-----------------------------------------------------------------------------

	//视频区js
	var temp1=1;
	$(".sidebar").click(function(){
		
		if(temp1==1){
			$(".videomenu").animate({"marginLeft": "-180px"});
			$(".v_playbox").animate({"width": "980px"});
			temp1=0;
			
		}else if(temp1==0)
		{
			$(".videomenu").animate({"marginLeft": "0px"});
			$(".v_playbox").animate({"width": "800px"});
			temp1=1;
			
		}
		
	});		

//-----------------------------------------------------------------------------

//右边导航栏

var istop=true;
var timetop=null;
var scrollTop=0;

$(window).scroll(function(){

	scrollTop=document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;

	if(scrollTop>=365){

		$(".bannermenubox").fadeIn(200);

		$(".head_menu").fadeIn(100);

		
	}else{
		$(".bannermenubox").fadeOut(200);
		$(".head_menu").fadeOut(100);
	}

	if(!istop){
		clearInterval(timetop);
	}
	istop=false;


	
});



$(".backtop").click(function(){//点击事件
	timetop=setInterval(function(){
		var speed=Math.ceil(scrollTop / 5);
		scrollTop=document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
		istop=true;
		if(scrollTop>0){
 			document.body.scrollTop=window.pageYOffset=document.documentElement.scrollTop= scrollTop-speed; 
 			
		}else{
			clearInterval(timetop);
		}
	
},30);
	
});

/*回到顶部*/
$(".backtop").hover(function(){

	$(this).css({"color":"white"});
	$(this).html("回到顶部");
},function(){
	$(this).html("<img src='images/ico/backtop.png' width=38 height=38/>");
});

/*右侧侧边导航栏*/
$(".bannermenu li").hover(function(){
	$(this).animate({"marginLeft":"-50px"},200);
},function(){
	$(this).animate({"marginLeft":"0px"},200);
});


//-----------------------------------------------------------------------------
//滚动照片


$(".pleft").click(function(){
	$(".picconbox").animate({"marginLeft":"0px"},1000);
});

$(".pright").click(function(){
	$(".picconbox").animate({"marginLeft":"-1000px"},1000);
});












		/*$(".picconbox img").eq(0).animate({"marginLeft":"-200px"}, 1000);
		$(".picconbox img").eq(1).delay(1500).animate({"marginLeft":"-200px"}, 1000);
		$(".picconbox img").eq(2).delay(3000).animate({"marginLeft":"-200px"}, 1000);
		$(".picconbox img").eq(3).delay(4500).animate({"marginLeft":"-200px"}, 1000);
		$(".picconbox img").eq(4).delay(6000).animate({"marginLeft":"-200px"}, 1000);
		$(".picconbox img").eq(5).delay(7500).animate({"marginLeft":"-200px"}, 1000);
		$(".picconbox img").eq(6).delay(9000).animate({"marginLeft":"-200px"}, 1000);
		$(".picconbox img").eq(7).delay(10500).animate({"marginLeft":"-200px"}, 1000);*/


	
	





//-----------------------------------------------------------------------------


//-------------------------------------------------------------

			getimfor(typename,pages);
			function getimfor(str,page){

				$.ajax({
				type:"POST",
				url:"php/showimfor.php",
				data:"tablename=article&tt=1&limitcount="+limitcount+"&page="+page+"&typename="+str+"&rad="+Math.random(),
				dataType:"json",
				success:function(msg){
					 $.each(msg, function(i,val){ 
					 	
					 		$(".newsbox ol").eq(0).append("<li><a href='php/articleshow.php?articleid="+val.articleid+"' target=_blank>"+val.theme+"</a><span class='timeset'>"+val.addtime.substring(0,10)+"</span></li>");

  						});
					 	
				}
			});

			}

			//-------------------------------------------------------------






















});



