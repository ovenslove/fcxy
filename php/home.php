
<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script src="../js/home.js" type="text/javascript" ></script>


<link rel="stylesheet" type="text/css" href="../css/imgupload.css">
<link rel="stylesheet" type="text/css" href="../css/webuploader.css">


	<style type="text/css" media="screen">
		*{
			margin:0;
			border:0;
		}
		ul,li {
			list-style:none;
			
		}
		.mainbox1{min-height:1000px; width: 650px; margin:0;}
		.simbox{ 
			min-height:80px; 
			width: 100%; 
			background:#E4E4E4; 
			margin-bottom: 10px; 
			border:1px solid #909090;
			box-shadow: 0px 1px 2px black ;
		}
		.contentbox { min-height:0px;}
		.topinput{height:80px; width: 100%; border-bottom:1px solid #909090;}
		.home_input { height:70px; width: 590px; float:left; padding:5px; overflow-y: auto; line-height:20px;}
		.home_input img { display:inline-block;}
		.imagebtn{height:100%; min-width: 30px; float:left; border-left:1px solid #909090; line-height:90px; padding: 0 8px; color:#414448;}
		.topadd{ display:none; height:30px; width: 100%; line-height:30px; padding-left:10px; position:relative;}
		 .seaarea{ z-index:500;position: absolute; right:100px; min-height:24px; width: 150px; margin:2px 5px; display:inline-block;font-size:14px;}
		 .topadd input{position: absolute; right:10px;height:24px; width: 70px; margin:3px 5px; background:#598BEC;}
		  .seaarea ul { display:none;}
		 .seaarea li{ border:1px solid #B0B0B0; width: 80px; margin-left: 65px; background:#FFFFFF;}
		  .seaarea li i { margin:0 8px;}
		  #areasel{ margin-left:15px;}
		  #imagefacebox{ z-index:500; display:none;position: absolute; height:200px; width: 335px; border:1px solid black; left:0px; background:#fff; overflow-y: auto;} 
		  #imagefacebox img { margin:0px 1px; height:24px; width: 24px; }
		  .picadd {min-height: 200px; width: 100%; border-top:1px solid #ccc; }
		  .file-item{ height:250px;  margin:5px ; display:inline-block;}
		  .info{ width:100%; overflow-x: hidden;}
		  .webuploader-pick div{position: absolute; top: 0px; left: 218px !important; width: 168px !important; height: 44px !important; overflow: hidden; bottom: auto !important; right: auto !important;}
		  .c_top_box { height: 60px; width: 100%; }
		  .c_top_box img { width: 50px; height: 50px; float:left; margin-left:10px; margin-top:5px; border-radius:10px;} 
		  .c_top_box span{ display:inline-block; height: 24px;margin-top:4px; line-height:24px; margin-left:10px;}
		  .c_content_box { min-height: 0px; width: 100%;}
		  .c_comment_add{ min-height: 30px; width: 100%; border-top:1px solid  #ccc;  position:relative;}
		  .c_content_word { margin: 5px 10px;  min-height: 24px;}
		  .c_content_img { margin:5px 10px; width: 630px; min-height:0px; padding:5px 0 10px;}
		  .c_content_img img{ height:150px;  width: 142px; border:5px solid #FFFFFF; margin:5px 10px 10px 5px; box-shadow: 0 0 5px 5px rgba(0,0,0,0.2); box-sizing: border-box;}
		  .c_comment_bar { height:25px; width: 100%; background:#DFDDDB; line-height:25px; }
		  .c_comment_bar i { margin-left:30px;}


		  .c_comment_show{ min-height: 0px; width: 100%; background:#DFDDDB; padding:5px 0;}

		  .c_comment_show ul { margin-left:10px;}
		  .c_comment_show ul li { height:36px; width: 100%; margin: 8px 0; line-height:30px;}
		  .c_comment_show ul li  span{ display:block;height: 18px;line-height:18px; margin-left:10px; font-size:12px; color:red;}

		  .c_comment_show img{ height: 36px; width: 36px; margin-right:10px; float:left; border-radius:5px;}
		  .c_comment{ min-height:30px; width: 590px; display:inline-block;  padding:2px 5px; position:relative; top:0; border-top:1px solid #ccc;}
		  .c_comment_add input { height:34px; width: 50px; position:absolute;  bottom:0; background:#DFDDDB; border-top:1px solid #ccc;}
		  
		  #imgshowbox { position:fixed;height:450px; width: 900px;  border:1px solid #ccc; z-index:1000; margin-left:-125px; display:none;}
		  .maskdemo { position:absolute; height:100%; width: 100%; background:rgba(0,0,0,0.2);z-index:90; }
		  #imgshowbox img{
		  	max-width:100%;
		  	height:100%;  
		  	position:relative;
		  	 left:50%;  
		  	transform: translateX(-50%);
		  	-webkit-transform: translateX(-50%);
		  	-moz-transform: translateX(-50%);
		  	  }
		  #imgshowboxbtn{ height: 24px; width: 24px; position:absolute; top:0; right:0; }
		  #imgshowboxbtn i{ left: 4px; top:0px; position:relative; color:rgba(0,0,0,0.5); z-index:100;}
		  .lr_btn{ height: 100%; width: 50px;   position:absolute;  overflow-x: hidden; z-index:99;}
		  .lr_btn:hover{background:rgba(0,0,0,0.15);}
		  .lr_btn:hover i:first-child{ color:rgba(255,255,255,0.8);} 
		  .lr_btn i{display:block; height:84px; width: 100%; padding: 0 6px 0 12px;top:50%; position:absolute; margin-top:-42px; color:rgba(0,0,0,0.5);}
		  .left_btn{ left:0;}
		 
		  .right_btn{ right:0;}
		  
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

	<div class="mainbox1">
		<div class="simbox top1">
			<form >
				
				
			<div class="topinput">
					
					<div class="home_input" contenteditable="true" id="home_input"></div>
					<div class="imagebtn" >
						<i class="fa fa-camera-retro fa-2x"></i>
					</div>
					
					
				
			</div>
			<div class="topadd">
						<i class="fa fa-meh-o fa-lg" id="imagefacebtn"></i>
						
						<div class="seaarea">	

						<span>可见范围：</span><span id="areasel"><oven>所有人</oven><i class="fa fa-angle-down fa-lg "></i></span>
						<ul>
							<li><i class="fa fa-lock "></i>所有人</li>
							<li><i class="fa fa-lock "></i>仅自己</li>
						</ul>
						
						</div>

						<input type="button" value="发表" class="submitbtn">
						<div id="imagefacebox"></div>
			</div>
			</form>

	<div  style="display:none">
				
			
			<div class="picadd">
		

					<div id="uploader" class="wu-example">
					    <div class="queueList">
					        <div id="dndArea" class="placeholder">
					            <div id="filePicker" class="webuploader-container">
					            	<!-- 此处js自动添加内容 -->
					       
					            </div>
					            <p>或将照片拖到这里，单次最多可选300张</p>
					        </div>

					    <ul class="filelist"></ul></div>

					    <div class="statusBar" style="display:none;">
					        <div class="progress" style="display: none;">
					            <span class="text">0%</span>
					            <span class="percentage" style="width: 0%;"></span>
					        </div><div class="info">共0张（0B），已上传0张</div>
					        <div class="btns">
					            <div id="filePicker2" class="webuploader-container">
					            	<!-- 此处js自动添加内容 -->
					            </div>
					            <div class="uploadBtn state-pedding">开始上传</div>
					        </div>
					    </div>
					</div>


			<script type="text/javascript"> // 添加全局站点信息
			var BASE_URL = '..';
			    </script>
	

			<script src="../js/webuploader.js" type="text/javascript" charset="utf-8" async defer></script>
			<script src="../js/imgupload.js" type="text/javascript" charset="utf-8" async defer></script>


		</div>

	</div>


		</div><!-- top1 -->


<div class="imgshowboxlist">


<?php  getsimptalk(0,10)?>
	
</div>

<div class="morsimptalk" style="height:30px; width:100%; ">
	
</div>









	</div>


<?php 
	function getsimptalk($pages ,$limit){
			$pages=$pages;
			$limit=$limit;
		$limitstar=$pages *$limit; 
			require_once '../php/mysqlcon.class.php';
	        $db=new mysqlcon();
		    $sql1="SELECT * FROM  `simpletalk` ORDER BY id  DESC limit {$limitstar},{$limit}";

	        $std1= $db->db_prepare($sql1);


	         if( $std1->execute()) {
	         		 $result=$std1->fetchall(PDO::FETCH_BOTH);
	         		 foreach ($result as $key => $value) {
	         		 	 //var_dump($value);
	         		 	$value['addtime']=substr($value['addtime'],10,6);

	     		  		 	$sql3="SELECT userlogo FROM `user` WHERE  username='".$value['username']."'";
	     		  		 
		          		 	$std3= $db->db_prepare($sql3);
		          		 	$std3->execute();
		          		 	$result3=$std3->fetchall(PDO::FETCH_BOTH);
		
	         		 	echo <<<oven
	         		 	<div class="simbox contentbox">
						<div  class="c_top_box">
						<a href="#"><img src="{$result3[0]['userlogo']}" ></a><span><a href="#">{$value['username']}</a></span><br><span>{$value['addtime']}</span>
						<input type="hidden" value="{$value['simpletalkid']}">
						</div>
						<div class="c_content_box">
							<div class="c_content_word">
								{$value['simpletalk']}
					
						</div>
						<div class="c_content_img">


oven;

	         		 	
	         		 	$sql2="SELECT * FROM  `images` WHERE  simpletalkid=".$value['simpletalkid'];
	         		 	$std2= $db->db_prepare($sql2);
	         		 	$std2->execute();
	         		 	$result2=$std2->fetchall(PDO::FETCH_BOTH);
	         		 	//var_dump($result2);
	         		 	 if(result2!=""){
							foreach ($result2 as $key2 => $value2) {
								         		 	 
								echo "<img src='".$value2['imgsrc']."'>";
								         		 	 	
							 }


	         		 	 }else{
	         		 	 	echo "暂无照片！";
	         		 	 }
	         		 	 
						
echo <<<ovenslove
						</div>

</div>

			<div class="c_comment_add">
				<div class="c_comment_bar">
					<i class="fa fa-thumbs-o-up ">({$value['goodnum']}次)</i>
				</div>
				<div class="c_comment_show">
					<ul>

ovenslove;

						// <li><a href="#"><img src="../images/logo.jpg" ></a><span><a href="#">瓜瓜</a>：你好！</span><span>12:21</span></li>	
						
							$sql4="SELECT * FROM `comment` c , `user` u WHERE  u.username='".$value['username']."' and  c.simpletalkid=".$value['simpletalkid']  ;
	     		  		 	//echo $sql4;
		          		 	$std4= $db->db_prepare($sql4);
		          		 	$std4->execute();
		          		 	$result4=$std4->fetchall(PDO::FETCH_BOTH);
		          		 	//var_dump($result4);
							foreach ($result4 as $key4 => $value4) {

									//$std2->execute();
	         		 				//$result5=$std2->fetchall(PDO::FETCH_BOTH);
									// var_dump($value4);
								echo '<li><a href="#"><img src="'.$value4['userlogo'].'" ></a><span><a href="#">'.$value4[2].'</a>：'.$value4['comment'].'</span><span>'.substr($value4['addtime'],10,6).'</span></li>	';
							}

echo '				
						
					</ul>
					
				</div>
				<div style="position: relative;">
					<div class="c_comment" contenteditable="true">我也说一句</div>
					<input type="button" value="评论" class="c_comment_btn">
				</div>
				
			</div>
		</div>

'	;

						

	         		 }



	         }else {
	         	echo "faild";
	         }     






	}










 ?>



