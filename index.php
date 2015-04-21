<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
	<title>风彩校园</title>
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
</head>
<body onload="initialize()">
<header id="header" class="f_header">
	<div class="head_box">
		<div class="head_menu ">
			<ul>
				<li>官方新闻</li>
				<li>校园资讯</li>
				<li>社团活动</li>
				<li>招聘广告</li>
			</ul>
		</div>
		<div class="head_login_box">
			<a href="php/register.php" title="注册" target="_blank">注册</a>
			<a href="php/login.php" title="登录" target="_blank">登录</a>
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
				<li>新闻&nbsp;资讯</li>
				<li>图片&nbsp;生活</li>
				<li>视频&nbsp;专区</li>
				<li>地图&nbsp;工大</li>
			</ul>
		</div>
		<div class="backtop">
			<img src='images/ico/backtop.png' width=38 height=38/>
		</div>
	</div>
	<div class="mainbox">

		
		
		<div class="mainleftbox">
			<div  class="topmenubox"><span>最新报道</span>
			<ul>
				<li>官方新闻</li>
				<li>校园资讯</li>
				<li>社团活动</li>
				<li>招聘广告</li>
			</ul>

			</div><!-- 顶部栏目 -->
			<div class="newsbox">
				<ol>
					
				</ol>


			</div>
			<div class="newsboxctr">
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>

				</ul>
			</div>
		</div><!--mainleftbox-->

		<div class="mainrightbox">
			<div class="noticebox">
				<span style="display: block; height:30px; width: 100%; background:#66F462; text-align: center;">公告</span>
				<div class="noticeboxcontent">
					公告内容公告内容公告内容公告内容公告内容公告内容公告内容公告内容公告内容公告内容
				</div>
			</div>
			<div class="aboutlink">
				<span style="display: block; height:30px; width: 100%; background:#66F462; text-align: center;">链接</span>
				<p><a href="" title="教务系统">湖南工业大学教务系统</a></p>
				<p><a href="" title="图书馆">湖南工业大学图书馆</a></p>
				<p><a href="" title="计通学院">湖南工业大学计通学院</a></p>
				<p><a href="" title="教务办">湖南工业大学教务办</a></p>
				<p><a href="" title="电费查询">湖南工业大学电费查询</a></p>
			</div>
		</div><!--mainrightbox-->


		<div class="roundpicbox">
			<div class="roundpicbar pleft"></div>
			<div class="roundpicbar pright"></div>
		<div class="picconbox">
			
		
			<img src ="images/roundpic/round1.jpg" alt="">
			<img src ="images/roundpic/round2.jpg" alt="">
			<img src ="images/roundpic/round3.jpg" alt="">
			<img src ="images/roundpic/round4.jpg" alt="">
			<img src ="images/roundpic/round5.jpg" alt="">
			<img src ="images/roundpic/round6.jpg" alt="">
			<img src ="images/roundpic/round7.jpg" alt="">
			<img src ="images/roundpic/round8.jpg" alt="">
			<img src ="images/roundpic/round9.jpg" alt="">
			<img src ="images/roundpic/round10.jpg" alt="">
			

			</div>

		</div><!--roundpicbox-->

		<div class="videoshowbox">
			<div class="videomenu">
			
				视频菜单
			</div>
			<div class="videoplaybox">
				<div class="sidebar">sidebar</div>
				<div class="v_playbox">
					<embed src="http://player.youku.com/player.php/sid/XOTM1Mjg4MTY0/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
				</div>
			</div>
		</div><!--videoshowbox-->

		<div class="schoolrecommend">
			
			<div class="recommendbar">
				<ul>
					<li>外卖</li>
					<li>快递</li>
					<li>超市</li>
					<li>银行</li>
				</ul>
			</div>
			<div id="recommendbox">
				
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
<footer>
	
</footer>
</body>
</html>

