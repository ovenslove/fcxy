 KindEditor.ready(function(K) {

			window.editor = K.create('#editor_id', {
				uploadJson : '../kindeditor/php/upload_json.php',
				fileManagerJson : '../kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				 resizeType : 0,  

			});
			
		});



		var marktemp=0;
		var markvsum="";
		var markvcount=0;

        $(function(){
        	//--类型列表--------------------------------------------------------------------
        	var menutemp="";
        	$.ajax({
				type:"POST",
				url:"../php/showmenu.php",
				data:"tablename=type_son&menutemp="+menutemp+"&rad="+Math.random(),
				dataType:"json",
				success:function(msg){
					/**/
					$.each(msg, function(i,val){ 
					 	
					 		$(".codetype").append("<option value='"+val.type_name+"'>"+val.type_name+"</option>");

  						}); //each  

					}//success
			});//ajax
        	//---------类型列表-------------------------------------------------------------

        	/**/
        	$("#moremark").click(function(){
        		
        		if (marktemp==0) {
        			$(".markbox").slideDown(200);
        			marktemp=1;
        		}else{
        			$(".markbox").slideUp(200);
        			marktemp=0;
        		}
        		
        	});


        	$.ajax({
				type:"POST",
				url:"../php/showimfor.php",
				data:"tablename=mark&limitcount=25&tt=2&rad="+Math.random(),
				dataType:"json",
				success:function(msg){
					 $.each(msg, function(i,val){ 
					 	
					 		$(".markbox").append("<span>"+val.mark_title+"</span>");

  						});   
					
				}
			});//ajax-------------------

			$(".markbox").delegate("span","click",function(){
				if(markvcount<5){
					$(this).css({"background":"#CAC1C1"});
					var markvalue=$(this).html();
					if(markvsum.indexOf(markvalue)==-1){
					if(markvcount==0){
							markvsum=markvalue+markvsum;
							
						}else{
							markvsum=markvalue+"/"+markvsum;
						}
					$("#mark").val(markvsum);
					markvcount++;
					}else{
						
					}
					
				}
				
				
			});

			//-------------------------------------------
			$("#clearbtn").click(function(){
					markvsum="";
					markvcount=0;
					$(".markbox span").css({"background":"#FAF6FA"});
					$("#mark").val(markvsum);
			});



			$("#submit").click(function(){
				editor.sync();
				if($("#editor_id").val()==""){
					$("#textareaspan").attr('class', ' checksstatu error');
					$("#textareaspan").html("此项不得为空");

				}else{
					$("#textareaspan").attr('class', 'checksstatu right');
					$("#textareaspan").html("");
				}
				$(".onebox input").trigger("blur");
				var errornum=$(".error").length;
				if(errornum){
					return false;
				}
			});

			//-----------表单失焦事件----------------------------------



			$(".onebox input").blur(function(){
				if($(this).val()==""){
					$(this).parent().find("span").attr('class', 'checksstatu error');
					$(this).parent().find("span").html("此项不得为空");
				}else{
					$(this).parent().find("span").attr('class', 'checksstatu right');
					$(this).parent().find("span").html("OK");
				}
			});


			

			//-----------表单失焦事件----------------------------------

			
			//----自定义-------------------------------------

			$("#design_personal").click(function(){
				$("#mark_add").toggle();
			});
		
			$("#mark_add input").eq(1).click(function(){
				
				if(markvcount<5){
					$(this).css({"background":"#CAC1C1"});
					var markvalue=$("#mark_add input").eq(0).val();
					if(markvsum.indexOf(markvalue)==-1){
						if(markvcount==0){
							markvsum=markvalue+markvsum;
							
						}else{
							markvsum=markvalue+"/"+markvsum;
						}
					
					$("#mark").val(markvsum);
					markvcount++;
					}else{
						
					}
					
				}
			});
			//----自定义-------------------------------------



        });