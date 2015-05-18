$(function(){

var nowpicindex=111;
var piccount=0;
var srcarr=new Array();

$(".home_input").focus(function(){
	$(".topadd").slideDown();
});

$(".imagebtn").click(function() {
	$(".webuploader-pick").next().css({'height':'44px','width':'168px','left':'218px'});
	$(".picadd").parent().slideToggle();
	

});


$(".seaarea").hover(function(){
	$(".seaarea ul").stop(false,true).slideDown();
	$("#areasel i").attr('class','fa fa-angle-up fa-lg ')
},function(){
	$(".seaarea ul").stop(false,true).slideUp();
	$("#areasel i").attr('class','fa fa-angle-down  fa-lg')
});



$(".seaarea li").click(function(event) {
	$("#areasel oven").text($(this).text());
});

//----------------------------------------------------------------------
$("#imagefacebtn").click(function(){
		$("#imagefacebox").slideToggle(300);
		//$("#discussarea").append("<img src='../images/facegif/14.gif'>");
		for(var i=1;i<=132;i++){
			$("#imagefacebox").append("<img src='../images/facegif/"+i+".gif'>");
		}
	});



	$("#imagefacebox").delegate("img","click",function(){
		var imgindex=$(this).index()+1;
		$(".home_input").append("<img src='../images/facegif/"+imgindex+".gif'>");
		
	});

//----------------------------------------------------------------------
//发表事件
$(".submitbtn").click(function(){
	var simpletalk=$(".home_input").html();
	var seaarea = $("#areasel oven").text();
	var simpletalkid=$("#inns").val()==undefined?new Date().getTime():$("#inns").val();

	//alert(simpletalk + "-------"+simpletalkid+"-------"+seaarea);
	if(simpletalk!=""){


	$.ajax({
				type:"POST",
				url:"simpletalk.php",
				data:"simpletalkid="+simpletalkid+"&simpletalk="+simpletalk+"&seaarea="+seaarea+"&rad="+Math.random(),
				success:function(msg){
					if (msg=="true") {
						alert("发布成功！");
						window.location="homepage.php";
					}else{
						alert("你的说说被外星人劫持了，再发一次就好了")
					};




				}
			});
}else{
	alert("想发布总得写点东西吧")
}

});

//--------------------------------------------------------------------------


$(".c_content_img").delegate('img','click',function(){
	
	srcarr=[];
	var src=$(this).attr("src");
	$(this).parent().find("img").each(function(index, el) {
		srcarr[index]=$(this).attr("src");
	});
	nowpicindex=$(this).index();
	piccount=$(this).parent().find("img").length;
	console.log(piccount);
	$("#imgshowbox").fadeIn();
	$("#imgshowbox img").attr("src",src);

});

$("#imgshowboxbtn").click(function() {
	

	$(this).parent().fadeOut();
});






$(document).keydown(function(event){
 //console.log(event.keyCode);
if(event.keyCode==27){
	$("#imgshowbox").fadeOut();
}else if(event.keyCode==39){
	 console.log("nowpicindex"+nowpicindex);
	$(".right_btn").click();
	
}else if(event.keyCode==37){
	 console.log("11111"+nowpicindex);
	$(".left_btn").click();
}

});





$(".right_btn").click(function(){
	// console.log(nowpicindex);
	// console.log(piccount);
	if(nowpicindex>piccount-2){
		alert("已经是最后一张了")
	}else{
		var src=srcarr[nowpicindex+1];
		$("#imgshowbox img").attr("src",src);
		nowpicindex++;
	}
	
});


$(".left_btn").click(function(){
	// console.log(nowpicindex);
	// console.log(piccount);
	if(nowpicindex<1){
		alert("已经是第一张了")
	}else{
		var src=srcarr[nowpicindex-1];
		$("#imgshowbox img").attr("src",src);
		nowpicindex--;
	}
	
});


$(".c_comment").focusin(function(){
	$(this).text("");
});

$(".c_comment_btn").click(function(event) {
	var c_comment=$(this).parent().find("div").text();
	var simpletalkid=$(this).parent().parent().parent().find("div[class='c_top_box']").find('input').val();
	var c_comment_show=$(this).parent().parent().find("div[class='c_comment_show']");
	var contentname=$(this).parent().parent().parent().find("div[class='c_top_box']").find('span').eq(0).text();
	/*alert(contentname);*/
	if(c_comment!=""){


			$.ajax({
				type:"POST",
				url:"c_comment_solve.php",
				data:"simpletalkid="+simpletalkid+"&c_comment="+c_comment+"&contentname="+contentname+"&rad="+Math.random(),
				dataType:"json",
				success:function(msg){
					// alert(msg)
					if (msg) {
						alert("发布成功！");
						window.location="homepage.php";
					}else{
						alert("你的评论被外星人劫持了，再发一次就好了")
					};


				}
			});
			
	}else{
		alert("总要说点什么吧！")
	}





});











});




 
 


