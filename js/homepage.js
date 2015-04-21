$(function(){

getContent();

function getContent(){

	$.ajax({
				type:"GET",
				url:"home.php",
				data:"rad="+Math.random(),
				dataType:"html",
				success:function(msg){
					$(".h_infobox").html(msg);
					 	
				}
			});


}








































});//func结束