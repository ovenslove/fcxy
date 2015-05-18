<?php session_start(); 
if (!isset($_SESSION['username'])) {
	header("location: ../index.php");
}
?>
<?php require_once  "headercode.php"; ?>

<?php 

	if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		
	}else{
	
	}
		$tablename="user";

		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
        $sql="SELECT * FROM  ". $tablename." WHERE username='{$username}'";

		$std= $db->db_prepare($sql);     
					
        $std->execute(); 
        $result=$std->fetchall(PDO::FETCH_BOTH);
      // print_r($result);

 ?>









<link rel="stylesheet" type="text/css" href="../css/homepage.css">
<link rel="stylesheet" type="text/css" href="../css/awesome/css/font-awesome.min.css" >
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<script src="../js/homepage.js" type="text/javascript" ></script>
<script src="../js/home.js" type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href="../css/time-jalendar.css">

<script src="../js/time-jalendar.js" type="text/javascript" ></script>

<script type="text/javascript">
$(function () {
  	var myDate = new Date(); 

    $('#myId2').jalendar({
        customDay: myDate.getFullYear()+'/'+myDate.getMonth()+'/'+myDate.getDate(),
        color: '#ADB0E2',
        lang: 'ZN'
    });

   //getsimpletalkin(0,7);

});

</script>

<div class="topmenubox">
	<div class="toplogobox">
	<?php  echo "<img src='{$result[0][userlogo]}'>"; ?>
		
	</div>
	<div class="topmenu">
		<ul>
			<li>
			<div class="menuline"></div>
			<a href="../index.php" title="首页"><div class="menu">首页</div></a>
			</li>
			<li>
			<div class="menuline"></div>
			<div class="menu homepage">我的主页</div>
			</li>
			<li>
			<div class="menuline"></div>
			<div class="menu per_info">个人信息</div>
			</li>
			<li>
			<div class="menuline"></div>
			<a href="imageshow.php" title="照片墙" target="_block"><div class="menu imageshow">照片墙</div></a>
			</li>
			<li>
			<div class="menuline"></div>
			<a href="aboutfcxy.php" title="关于本站" target="_block"><div class="menu">关于本站</div></a>
			</li>
			
		</ul>

	</div>
</div>

<!-- 顶部菜单栏 -->
<div class="left_infobox">
	<div class="h_baseinfo">
	<ul>
	

	<?php 

echo <<<oven


		<li><i class="fa fa-user "></i><span>{$result[0][truename]}</span></li>
		<li><i class="fa fa-venus-mars "></i><span>{$result[0][usersex]}</span></li>
		<li><i class="fa fa-heart "></i><span>{$result[0][userage]}</span></li>
		<li><i class="fa fa-qq "></i><span>{$result[0][userqq]}</span></li>
		<li><i class="fa fa-envelope-o "></i><span>{$result[0][useremail]}</span></li>
		<li><i class="fa fa-group "></i><span>{$result[0][usertype]}</span></li>



oven;



    ?>	

		


		
		
	</ul>

	</div>
	<a href="creatarticle.php" title="发表文章"><div class="new_article_btn">发表文章</div></a>
	<div class="">
		
	</div>
</div>

<div class="h_mainbox">
	<div class="backtop">
			<img src='../images/ico/backtop.png' width=38 height=38/>
	</div>
	<div class="h_infobox">
	
		
	</div>

	<div class="h_rightbox">
		<div id="myId2" class="jalendar"></div>
	</div>
</div>


 























<?php require_once  "footercode.php"; ?>