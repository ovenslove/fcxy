<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
	<title>风彩校园</title>
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/awesome/css/font-awesome.min.css" >

</head>
<body onload="initialize()">
<header id="header" class="f_header">
	<div class="head_box">
		<img src="images/indexlogo1.png" >
		<div class="head_menu ">
			<ul>
				<li><a href="php/schoolshow.php" title="校园景色">校园景色</a></li>
				<li><a href="php/hutxueyuan.php" title="学院概况">学院概况</a></li>
				<li><a href="http://218.75.197.124:8090/" title="图书馆">图书馆</a></li>
				<li><a href="php/teachershow.php" title="学校领导">学校领导</a></li>
				<li><a href="php/abouthut.php" title="工大简介">工大简介</a></li>
				<li><a href="php/xiaofeng.php" title="校风校训">校风校训</a></li>
			</ul>
		</div>
		<div class="head_login_box">
			<?php 
			$rand=rand();
			 if(isset($_SESSION['username'])){
			 	if($_SESSION['usertype']=="学生"){
			 		$homesrc="php/homepage.php";
			 	}else{
			 		$homesrc="php/adminmanage.php";
			 	}
			echo "欢迎您 <a href='{$homesrc}' >".$_SESSION['username']."</a><a  target='_self' href='php/loginout.php?action=indexout&ran={$rand}' title=''> 退出</a>";
		}else{

			echo '<a href="php/register.php" title="注册" target="_blank">注册</a>
			<a href="php/login.php" title="登录" target="_blank">登录</a>
			';
		}
		?>
		</div>
	</div>
</header><!-- /header -->
	<div class="bannerpic">
		<img src="images/backgroundpic/backpic1.jpg" style="z-index: 200;">
		<img src="images/backgroundpic/backpic2.jpg" style="z-index: 99;">
		<img src="images/backgroundpic/backpic3.jpg" style="z-index: 98;">
		<img src="images/backgroundpic/backpic4.jpg" style="z-index: 97;">
	</div>
	
	<div class="bannermenubox">
		<div class="bannermenu">
			<ul>
				<li><a href="#news">新闻&nbsp;&nbsp;资讯</a></li>
				<li><a href="#picture">图片&nbsp;&nbsp;生活</a></li>
				<li><a href="#video">视频&nbsp;&nbsp;专区</a></li>
				<li><a href="#map">地图&nbsp;&nbsp;工大</a></li>
			</ul>
		</div>
		<div class="backtop">
			<img src='images/ico/backtop.png' width=38 height=38/>
		</div>
	</div>
	<div class="mainbox">

		
		
		<div class="mainleftbox" id="news">
			<div  class="topmenubox"><span>最新报道</span>
			<ul>
				<li>校园新闻</li>
				<li>社团资讯</li>
				<li>校园求助</li>
				<li>校园招聘</li>
				<li>全部</li>
				
			</ul>

			</div><!-- 顶部栏目 -->
			<div class="newsbox">
				<ol>
					
				</ol>


			</div>
			<div class="newsboxctr">
				<ul>
					<li class="newsboxctrli">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>

				</ul>
			</div>
		</div><!--mainleftbox-->

		<div class="mainrightbox">
			<div class="noticebox">
				<span class="boxtitle">公告栏</span>
				<div class="noticeboxcontent" style="position:relative;">
					<?php 
						require_once 'php/mysqlcon.class.php';
        				$db=new mysqlcon();
        				$sql="SELECT * FROM  `gonggao` WHERE  statu=1 ORDER BY addtime DESC limit 1" ;
        				$std= $db->db_prepare($sql); 
        				$std->execute(); 
       					$result=$std->fetchall(PDO::FETCH_ASSOC);
       					echo $result[0]['content'];
       					echo "<p style='position: absolute; bottom: 0px; text-align: right; display: block; width:90%;'>发布时间：".substr($result[0]['addtime'], 0,10)."</p>";
					 ?>
					 
				</div>
			</div>
			<div class="aboutlink">
				<span class="boxtitle">快速通道</span>
				<p><a href="http://www.hut.edu.cn/" title="湖南工业大学" target="_blank">湖南工业大学</a></p>
				<p><a href="http://218.75.197.124:83/" title="教务系统" target="_blank">湖南工业大学教务系统</a></p>
				<p><a href="http://218.75.197.124:8090/" title="图书馆" target="_blank">湖南工业大学图书馆</a></p>
				<p><a href="http://computer.hut.edu.cn/" title="计通学院" target="_blank">湖南工业大学计通学院</a></p>
				<p><a href="http://jwc.hut.edu.cn/" title="教务办" target="_blank">湖南工业大学教务办</a></p>
				<p><a href="http://218.75.197.120:8021/XSCK/Login_Students.aspx" title="电费查询" target="_blank">湖南工业大学电费查询</a></p>
				
			</div>
		</div><!--mainrightbox-->


		<div class="roundpicbox" id="picture">
			<!-- <div class="roundpicbar pleft"></div>
			<div class="roundpicbar pright"></div> -->
		<div class="picconbox">
			
				
				<a href="php/imageshow.php"><img src ="images/schoolpic/t1.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/t2.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/l5.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/s3.jpg" alt=""></a>
			</div>
			<div class="picconbox">
				<a href="php/imageshow.php"><img src ="images/schoolpic/y1.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/y2.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/y3.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/y4.jpg" alt=""></a>
				
			</div>
			<div class="picconbox">
				<a href="php/imageshow.php"><img src ="images/schoolpic/xs3.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/xs5.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/xs6.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/xs8.jpg" alt=""></a>
			</div>
			<div class="picconbox">
				<a href="php/imageshow.php"><img src ="images/schoolpic/s1.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/l4.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/l5.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/js2.jpg" alt=""></a>
			</div>
			<div class="picconbox">
				<a href="php/imageshow.php"><img src ="images/schoolpic/cl1.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/t3.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/cl2.jpg" alt=""></a>
				<a href="php/imageshow.php"><img src ="images/schoolpic/xs4.jpg" alt=""></a>
			</div>

		</div><!--roundpicbox-->

		<div class="videoshowbox" id="video">
			<div class="videomenu">
				<ul>
					<?php 
						
        				$sql1="SELECT * FROM  `vedio` WHERE  statu=1 ORDER BY addtime DESC limit 10" ;
        				$std1= $db->db_prepare($sql1); 
        				$std1->execute(); 
       					$result1=$std1->fetchall(PDO::FETCH_ASSOC);
       					foreach ($result1 as $key => $value) {
       						echo "<li vidsrc='{$value['link']}'>{$value['title']}</li>";
       					}
    					
       					
					 ?>


				</ul>
				
			</div>
			<div class="videoplaybox">
				<div class="sidebar"><i class="fa fa-chevron-left"></i></div>
				<div class="v_playbox">
					<embed src="http://player.youku.com/player.php/sid/XNTk3NTMxNjgw/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
				</div>
			</div>
		</div><!--videoshowbox-->

		<div class="schoolrecommend" id="map">
			
			<!-- <div class="recommendbar">
				<ul>
					<li>外卖</li>
					<li>快递</li>
					<li>超市</li>
					<li>银行</li>
				</ul>
			</div> -->
			<div id="recommendbox" style="width:100%;">
				
			</div>

				<script type  ="text/javascript">
				//异步加载
				function init() {
				var d= new Date();
				var map= new AMap.Map(recommendbox, {
				view:new AMap.View2D({
				center: new AMap.LngLat(113.10562134,27.81600099),
				zoom:15
				})
				
				});
				
				
				


				//地图鹰眼插件。
				map.plugin(["AMap.OverView"],function(){
   		 		var view = new AMap.OverView();
   			 	map.addControl(view);
				}); 

				map.plugin(["AMap.ToolBar"],function(){
				    //加载工具条
				    var tool = new AMap.ToolBar();
				    map.addControl(tool);    
				});
				 
				 //---------------------
				//控制条

				map.plugin(["AMap.Scale"],function(){
				    var scale = new AMap.Scale();
				    map.addControl(scale);   
				});
				 //-------------------------------------

				
				

				//-------------------------------------
				}

				function loadScript() {
				var script    = document.createElement("script");
				script.type   = "text/javascript";
				script.src    = "http://webapi.amap.com/maps?v=1.3&key=3237995043e1669596504a91b0da61c1&callback=init";
				document.body.appendChild(script);
				}
				window.onload = loadScript;

				</script>

		</div>



	</div><!--mainbox-->
<footer style="background: url('images/footerback.png') no-repeat ; background-size: 100% 100%;" >
	<p align="center"style="color:white; margin: 10px 0; color: black; font-size: 16px;">湖南工业大学毕业设计项目-风彩校园</p>
	<p align="center" style="color:white; margin: 10px 0;color: black; font-size: 16px;">项目作者:刘文文 指导导师：易德成导师</p>
	<p align="center" style="color:white; margin: 10px 0;color: black; font-size: 16px;">项目时间：2015年4月-5月</p>
	</footer>
</body>
</html>

