


$(function(){
	var tempi=1;
	var articleid = $.getUrlVar('articleid');
	getdiscussimfor();
	function getdiscussimfor(){
		var percentcount=$(".discussshow li").length;
		$.ajax({
				type:"POST",
				url:"discussshow.php",
				data:"tablename=discuss&percentcount="+percentcount+"&articleid="+articleid+"&rad="+Math.random(),
				dataType:"json",
				success:function(msg){
					
					 $.each(msg, function(i,val){ 
					 		
					 		$(".discussshow ul").eq(0).append("<li>第"+tempi+"楼："+val.discusscontent+"<span class='disaddtimeset'>"+val.discussaddtime.substring(5,19)+"</span></li>");
					 		tempi++;
  						});
					 	
				}
			});
	}

	//-------------------discuss_more更多-----------------------------------

	$(".discuss_more span").click(function(){
		getdiscussimfor();
	});
	//-------------------discuss_more更多-----------------------------------

	//-----------------------imagefacebtn动画------------------------------

	$("#imagefacebtn").click(function(){
		$("#imagefacebox").slideToggle(300);
		//$("#discussarea").append("<img src='../images/facegif/14.gif'>");
		for(var i=1;i<=132;i++){
			$("#imagefacebox").append("<img src='../images/facegif/"+i+".gif'>");
		}
	});



	$("#imagefacebox").delegate("img","click",function(){
		var imgindex=$(this).index()+1;
		$("#discussarea").append("<img src='../images/facegif/"+imgindex+".gif'>");
		
	});

	//---------------------------------------------------------------------












	$("#discussaddbtn").click(function(){
		$(".discussaddbox").toggle();
		
	});

	$("#submitbtn").click(function(){
		var disarea=$("#discussarea").html();
		if(disarea==""){
			$("#discussarea").html("");
		}else{

			$.ajax({
				type:"POST",
				url:"discussadd.php",
				data:"tablename=discuss&disarea="+disarea+"&articleid="+articleid+"&rad="+Math.random(),
				success:function(msg){
					
					if(msg=="true"){
						tempi=1;
						alert("评论成功！")
						window.location.reload();
						$("#discussarea").val("");
						$(".discussaddbox").toggle();
						getdiscussimfor();
					}else{
						alert("评论失败！请重新评论。")
					}
				}
			});


		}
	});



	$("#discusshelp").change(function() {
		var discusstemp=$(this).val();
		$("#discussarea").html(discusstemp);
	});


});














//------------感谢万能的网友提供这几行代码--------------------------
$.extend({
  getUrlVars: function(){
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  },
  getUrlVar: function(name){
    return $.getUrlVars()[name];
  }
});
//------------感谢万能的网友提供这几行代码--------------------------