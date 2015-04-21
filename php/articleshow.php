<?php require_once  "headercode.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/articleshow.css">
<script src="../js/articleshow.js" type="text/javascript" ></script>
<?php
 		$articleid=$_GET["articleid"];
 		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
	    $sql1="SELECT * FROM  article where articleid=".$articleid;
        $std= $db->db_prepare($sql1);       
        $std->execute();  
        $result=$std->fetch ( PDO :: FETCH_BOTH );
/*
					echo("主题：".$result["theme"]."<br>");
					echo("类型：".$result["type"]."<br>");
					echo("标签：".$result["market"]."<br>");
					echo("内容：".$result["content"]."<br>");
					echo("时间：".$result["addtime"]."<br>");

*/
		//--------------获取评论条数---------------------------------------------
		$discuss1="SELECT COUNT(*) FROM `discuss` WHERE articleid=".$articleid;
		$dis1= $db->db_prepare($discuss1);       
        $dis1->execute();  
        $disresult1=$dis1->fetch ( PDO :: FETCH_BOTH );
        //-----------------获取评论条数------------------------------------------

      

echo <<<oven

<article class='article'>
	<div class="themebox">
		{$result["theme"]}
	</div>

	<hr>

	<div class="typebox">
		类型：{$result["type"]} 发布时间：{$result["addtime"]} 作者：admin
	</div>

	<div class="markbox">
		标签：{$result["market"]}
	</div>

	<div class="contentbox">
		{$result["content"]}
	</div>

	<div class="discussbox">

		<div style="height:30px; width:100%;">评论区</div>
		<hr>
		<div class="discussshow">
		<ul>
			
		</ul>
		<div class="discuss_more"><span>more</span></div>

		</div>
		<div><button id="discussaddbtn">添加评论</button><span style="float:right; color:#503EF0;">共{$disresult1[0]}条</span></div>
			
		

		<div  class="discussaddbox">
			<div id="imagefacebox"></div>
			<form >
				<div name="discussadd" id="discussarea" contentEditable=true></div>
				<div class="discussaddcontrol">
				<input type="button" name="submit" value="提交" id="submitbtn" style="">
				<img src="../images/facegif/14.gif"  style="" id="imagefacebtn">
				<input type="checkbox" name="niming" value="0">匿名评论 
				<select name="discusshelp" id="discusshelp">
					<option value="">快捷评论</option>
					<option value="顶一个，真的是太有用了">顶一个，真的是太有用了</option>
					<option value="秒懂！我实在是太聪明了！">秒懂！我实在是太聪明了！</option>
					<option value="虽然没看懂，但也赞一个">虽然没看懂，但也赞一个</option>
					<option value="博大精深啊，学习学习">博大精深啊，学习学习</option>
					<option value="说的什么啊，完全看不懂">说的什么啊，完全看不懂</option>
					<option value="瞬间感到高大上">瞬间感到高大上</option>
					<option value="涨姿势了，威武霸气">涨姿势了，威武霸气</option>
					option
				</select>
				</div>
			</form>
		</div>
	</div>

</article>


<!--下面是aside-->
<aside>
	
</aside>



oven;
 ?>















	
	<?php require_once  "footercode.php"; ?>