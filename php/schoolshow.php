<?php require_once  "headercode.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/awesome/css/font-awesome.min.css" >

<script>
	
	$(function(){
		$(".scenery_list").delegate('img','click',function(){
			
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








	});
</script>
<style type="text/css" media="screen">


/* scenery */
.scenery { float: left; width: 966px; border: 1px solid #cacaca; margin-bottom: 15px; }
.scenery_list { padding: 5px 13px; }
.scenery_list ul li { float: left; width: 215px; padding: 10px 10px 0 10px; }
.scenery_list ul li span { display: block; padding-bottom: 10px; background: url(../images/scenery_img_10.jpg) no-repeat bottom center; }
.scenery_list ul li span div img { padding: 3px; border: 1px solid #dbdbdb; box-shadow:0 0 2px 2px rgba(0,0,0,0.3); }
.scenery_list ul li span div:hover img { border: 1px solid #b3318b; }
.scenery_list ul li p div { display: block; width: 240px; height: 20px; line-height: 20px; text-align: center; font-family: "Simsun"; }
.scenery_list ul li p div:hover { color: #b3318b; }


#imgshowbox { position:fixed;height:500px; width: 1000px;  border:1px solid #ccc; z-index:1000; margin-left:-20px; display:none;}
.maskdemo { position:absolute; height:100%; width: 100%; background:rgba(0,0,0,0.2);z-index:90; }
#imgshowbox img{
			height:100%;
			max-width:100%;  
		  	position:relative;
		  	 left:50%;  
		  	transform: translateX(-50%);
		  	-webkit-transform: translateX(-50%);
		  	-moz-transform: translateX(-50%);}
#imgshowboxbtn{ height: 30px; width: 30px; position:absolute; top:0; right:0; }
#imgshowboxbtn i{ left: 4px; top:0px; position:relative; color:rgba(0,0,0,0.5); z-index:100;}
#imgshowboxbtn:hover>i{ color:rgba(255,255,255,0.8);}
.lr_btn{ height: 500px; width: 50px;   position:absolute;  overflow-x: hidden; z-index:99;}
.lr_btn:hover{background:rgba(0,0,0,0.15);}
.lr_btn:hover i:first-child{ color:rgba(255,255,255,0.8);} 
.lr_btn i{display:block; height:84px; width: 100%; padding: 0 6px 0 12px;top:50%; position:absolute; margin-top:-42px; color:rgba(0,0,0,0.5);}
.left_btn{ left:0;}
		 
.right_btn{ right:0;}

.imgdisplay{ display:none;}
.showdis{ height:154px; width:207px;}
.pictype{ text-align:center;}


</style>

	<div id="imgshowbox">
		<div id="imgshowboxbtn"><i class="fa fa-remove fa-lg"></i></div>
		<span class="left_btn lr_btn"><i class="fa fa-angle-left fa-5x"></i></span>
		<span class="right_btn lr_btn"><i class="fa fa-angle-right fa-5x"></i></span>
		<div class="maskdemo"></div>
		<div style="height:100%; width: 100%; position:relative;">
			<img src="">
		</div>
	</div>
<h1 style="text-align: center; margin:10px 0;">校园风景</h1>
<hr>
<div class="scenery_list clearfix">
                    <ul>
                        
                        <li><span>
                            <div >
                                 <img src="../images/schoolpic/dm1.jpg"  alt="学校大门" class="showdis">

                            </div></span>
                            <p>
                                <div class="pictype">学校大门</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                                <img src="../images/schoolpic/qj1.jpg"  alt="学校全景" class="showdis">
                                <img src="../images/schoolpic/qj2.jpg" alt="学校全景"class="imgdisplay">
                                <img src="../images/schoolpic/qj3.jpg" alt="学校全景"class="imgdisplay">
                                <img src="../images/schoolpic/qj3.jpg" alt="学校全景"class="imgdisplay">

                            </div></span>
                            <p>
                                <div class="pictype">学校全景</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                                 <img src="../images/schoolpic/js1.jpg"  alt="学校景色" class="showdis">
                                <img src="../images/schoolpic/js2.jpg" alt="学校景色"class="imgdisplay">
                                <img src="../images/schoolpic/js3.jpg" alt="学校景色"class="imgdisplay">
                            </div></span>
                            <p>
                                <div class="pictype">学校景色</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                                <img src="../images/schoolpic/y1.jpg"  alt="学校夜景" class="showdis">
                                <img src="../images/schoolpic/y2.jpg" alt="学校夜景"class="imgdisplay">
                                <img src="../images/schoolpic/y3.jpg" alt="学校夜景"class="imgdisplay">
                                <img src="../images/schoolpic/y4.jpg" alt="学校夜景"class="imgdisplay">
                                <img src="../images/schoolpic/y5.jpg" alt="学校夜景"class="imgdisplay">
                                <img src="../images/schoolpic/y6.jpg" alt="学校夜景"class="imgdisplay">
                                <img src="../images/schoolpic/y7.jpg" alt="学校夜景"class="imgdisplay">
                               </div></span>
                            <p>
                                <div class="pictype">学校夜景</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                               	<img src="../images/schoolpic/t1.jpg"  alt="图书馆" class="showdis">
                                <img src="../images/schoolpic/t2.jpg" alt="图书馆"class="imgdisplay">
                                <img src="../images/schoolpic/t3.jpg" alt="图书馆"class="imgdisplay">
                                <img src="../images/schoolpic/t4.jpg" alt="图书馆"class="imgdisplay">

                            </div></span>
                            <p>
                                <div class="pictype">图书馆</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                                <img src="../images/schoolpic/l1.jpg"  alt="教学楼群" class="showdis">
                                <img src="../images/schoolpic/l2.jpg" alt="教学楼群"class="imgdisplay">
                                <img src="../images/schoolpic/l3.jpg" alt="教学楼群"class="imgdisplay">
                                <img src="../images/schoolpic/l4.jpg" alt="教学楼群"class="imgdisplay">
                                <img src="../images/schoolpic/l5.jpg" alt="教学楼群"class="imgdisplay">
                                <img src="../images/schoolpic/l6.jpg" alt="教学楼群"class="imgdisplay">
                            </div></span>
                            <p>
                                <div class="pictype">教学楼群</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                              	<img src="../images/schoolpic/s1.jpg"  alt="学生宿舍" class="showdis">
                                <img src="../images/schoolpic/s2.jpg" alt="学生宿舍"class="imgdisplay">
                                <img src="../images/schoolpic/s3.jpg" alt="学生宿舍"class="imgdisplay">
                                <img src="../images/schoolpic/s4.jpg" alt="学生宿舍"class="imgdisplay">
                            </div></span>
                            <p>
                                <div class="pictype">学生宿舍</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                               <img src="../images/schoolpic/st1.jpg"  alt="学生食堂" class="showdis">
                                <img src="../images/schoolpic/st2.jpg" alt="学生食堂"class="imgdisplay">
                            </div></span>
                            <p>
                                <div class="pictype">学生食堂</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                                <img src="../images/schoolpic/cl1.jpg"  alt="包装设计学院陈列室" class="showdis">
                                <img src="../images/schoolpic/cl2.jpg" alt="包装设计学院陈列室"class="imgdisplay">
                            </div></span>
                            <p>
                                <div class="pictype">包装设计学院陈列室</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                                <img src="../images/schoolpic/xx1.jpg"  alt="校训" class="showdis">
                            </div></span>
                            <p>
                                <div class="pictype">校训</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                                 <img src="../images/schoolpic/txh1.jpg"  alt="同心湖" class="showdis">
                                <img src="../images/schoolpic/txh2.jpg" alt="同心湖"class="imgdisplay">
                            </div></span>
                            <p>
                                <div class="pictype">同心湖</div></p>
                        </li>
                        
                        <li><span>
                            <div >
                             	<img src="../images/schoolpic/xs3.jpg"  alt="校园生活" class="showdis">
                                <img src="../images/schoolpic/xs1.jpg" alt="校园生活"class="imgdisplay"> 
                                <img src="../images/schoolpic/xs2.jpg" alt="校园生活"class="imgdisplay"> 
                                <img src="../images/schoolpic/xs4.jpg" alt="校园生活"class="imgdisplay">   
                                <img src="../images/schoolpic/xs5.jpg" alt="校园生活"class="imgdisplay">   
                                <img src="../images/schoolpic/xs6.jpg" alt="校园生活"class="imgdisplay">   
                                <img src="../images/schoolpic/xs7.jpg" alt="校园生活"class="imgdisplay">   
                                <img src="../images/schoolpic/xs8.jpg" alt="校园生活"class="imgdisplay">   

                            </div></span>
                            <p>
                                <div class="pictype">校园生活</div></p>
                        </li>
                        
                    </ul>

</div>


	












<?php require_once  "footercode.php"; ?>