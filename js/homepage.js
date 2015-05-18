
var docheight=0;

$(function(){

getContent('home.php');

function getContent(urls){

	$.ajax({
				type:"GET",
				url:urls,
				data:"rad="+Math.random(),
				dataType:"html",
				success:function(msg){
					$(".h_infobox").html(msg);
					 docheight=$(document).height();
					 	//console.log(docheight);
				}
			});


}



var istop=true;
var timetop=null;
var scrollTop=0;

$(window).scroll(function(){

	scrollTop=document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;

	if(scrollTop>=365){

		$(".backtop").fadeIn(200);

		

		
	}else{
		$(".backtop").fadeOut(200);
		
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
	$(this).css({"background":"#ccc"});
	$(this).css({"color":"white"});
	$(this).html("回到顶部");
},function(){
	$(this).html("<img src='../images/ico/backtop.png' width=38 height=38/>");
});

/*右侧侧边导航栏*/
$(".bannermenu li").hover(function(){
	$(this).animate({"marginLeft":"-50px"},200);
},function(){
	$(this).animate({"marginLeft":"0px"},200);
});




// console.log('浏览器时下窗口可视区域高度'+$(window).height()); //浏览器时下窗口可视区域高度 
// console.log('浏览器时下窗口文档的高度'+$(document).height()); //浏览器时下窗口文档的高度 
// console.log('浏览器时下窗口文档body的高度'+$(document.body).height());//浏览器时下窗口文档body的高度 
// console.log('浏览器时下窗口文档body的总高度'+$(document.body).outerHeight(true));//浏览器时下窗口文档body的总高度 包括border padding margin 
// console.log('浏览器时下窗口可视区域宽度'+$(window).width()); //浏览器时下窗口可视区域宽度 
// console.log('浏览器时下窗口文档对于象宽度'+$(document).width());//浏览器时下窗口文档对于象宽度 
// console.log('浏览器时下窗口文档body的高度'+$(document.body).width());//浏览器时下窗口文档body的高度 
// console.log('浏览器时下窗口文档body的总宽度'+$(document.body).outerWidth(true));//浏览器时下窗口文档body的总宽度 包括border padding 







$(".per_info").click(function(){

getContent('per_info.php');
	
});
$(".homepage").click(function(){

getContent('home.php');
	
});






$(".c_comment_btn").delegate("click",function(){alert("1111");});






});//func结束







