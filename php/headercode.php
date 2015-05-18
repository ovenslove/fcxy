<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>风彩校园-湖南工业大学毕业设计</title>
	<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
    <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/webmodle.base.css">
    
    </head>

<body>
	<header id="header" class="f_header" >
				<div class="head_box">
		<a href="../index.php" ><img src="../images/indexlogo1.png" ></a>
		<div class="head_menu ">
			<ul>
				
				<li><a href="schoolshow.php" title="校园景色">校园景色</a></li>
				<li><a href="hutxueyuan.php" title="学院概况">学院概况</a></li>
				<li><a href="http://218.75.197.124:8090/" title="图书馆">图书馆</a></li>
				<li><a href="teachershow.php" title="学校领导">学校领导</a></li>
				<li><a href="abouthut.php" title="工大简介">工大简介</a></li>
				<li><a href="xiaofeng.php" title="校风校训">校风校训</a></li>
			</ul>
		</div>
		<div class="head_login_box">
		<?php  if(isset($_SESSION['username'])){
			if($_SESSION['usertype']=="学生"){
			 		$homesrc="homepage.php";
			 	}else{
			 		$homesrc="adminmanage.php";
			 	}
			echo "欢迎您 <a href='{$homesrc}' >".$_SESSION['username']."</a><a  target='_self' href='loginout.php?action=out' title=''> 退出</a>";
		}else{

			echo '<a href="register.php" title="注册" target="_blank">注册</a>
			<a href="login.php" title="登录" target="_blank">登录</a>';
		}



		 ?>
			<!-- <a href="php/register.php" title="注册" target="_blank">注册</a>
			<a href="php/login.php" title="登录" target="_blank">登录</a> -->
		</div>
	</div>
	</header><!-- /header -->

	<div class="mainbox" >