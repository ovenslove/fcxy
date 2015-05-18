<?php require_once  "headercode.php"; ?>

<script>
	$(function(){
		$(".leftbox li").click(function(){
           var  tip=$(this).attr("tip");
           $("#iframebox").attr("src",tip);
           $(".leftbox li").css("background","#EDF8F8");
           $(this).css("background","#7DB7E8");

		});
	})


</script>

<style type="text/css" media="screen">
	.mainbox{ border:1px solid #ccc;}
	.leftbox{height: 600px; width: 170px; border-right: 1px solid #ccc;overflow:auto; position:relative; display:inline-block;}
	ul{list-style:none;}
	.leftbox li{ 
		line-height:30px;
		padding-left:4px;
		list-style:none;
		display:block;
		height:30px;
		background-color:#EDF8F8;
		margin-bottom:3px;
		cursor:pointer;
	}
	.leftbox li:hover{
		background-color:#7DB7E8;
	}
	.webbox{background-color:#F5F5F5; height:500px; width:825px; display:inline-block;}
</style>
<h1 style="text-align: center; margin: 10px 0;">学院概况</h1>
<hr>

<div  class="leftbox">
	<ol>
		<li tip="http://art.hut.edu.cn/">包装设计艺术学院</li>
		<li tip="http://spme.hut.edu.cn/">包装与材料工程学院</li>
		<li tip="http://machine.hut.edu.cn/">机械工程学院</li>
		<li tip="http://ce.hut.edu.cn/">土木工程学院</li>
		<li tip="http://eeit.hut.edu.cn/">电气与信息化工程学院</li>
		<li tip="http://computer.hut.edu.cn/">计算机与通信学院</li>
		<li tip="http://metal.hut.edu.cn/">冶金工程学院</li>
		<li tip="http://math.hut.edu.cn/">理学院</li>
		<li tip="http://commercial.hut.edu.cn/article/index_sxy.asp">商学院</li>
		<li tip="http://unzg.v108.10000net.cn/CJCollege/">财经学院</li>
		<li tip="http://law1.hut.edu.cn/">法学院</li>
		<li tip="http://wxy.hut.edu.cn/">文学与新闻传播学院</li>
		<li tip="http://foreign.hut.edu.cn/">外国语学院</li>
		<li tip="http://www.hngdty.com/">体育学院</li>
		<li tip="http://music.hut.edu.cn/">音乐学院</li>
		<li tip="http://szb.hut.edu.cn/">思想政治理论课教学科研部</li>
		<li tip="http://architecture.hut.edu.cn/">建筑与城乡规划学院</li>
		<li tip="http://international.hut.edu.cn/">国际学院</li>

	</ol>
</div>
<div class="webbox">
	<iframe src="http://www.hut.edu.cn/" height="600" width="100%" id="iframebox"></iframe>
</div>





<?php require_once  "footercode.php"; ?>