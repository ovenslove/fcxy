$(function(){



$(".home_input").focus(function(){
	$(".topadd").slideDown();
});


$(".seaarea").hover(function(){
	$(".seaarea ul").slideDown();
	$("#areasel i").attr('class','fa fa-angle-up fa-lg ')
},function(){
	$(".seaarea ul").slideUp();
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

});

//--------------------------------------------------------------------------











});