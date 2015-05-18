<?php require_once  "headercode.php"; ?>

 <script type="text/javascript" src="../js/creatarticle.js"></script>
 <link rel="stylesheet" type="text/css" href="../css/creatarticle.css">

 	<h1 style="text-align: center; margin: 15px 0;">文章发布</h1>
 	<h3 style="text-align: center; margin: 5px 0;">湖南工业大学2015毕业设计项目-基于PHP湖工大风彩校园</h3>
 	<hr>
	<form action="creatarticlesave.php" method="post" accept-charset="utf-8" class="formt" name="form1">
	<div class="onebox"><label>类型:</label>
	<select name="codetype"  class="codetype">
		
		
	</select><span class="checksstatu"></span></div>
		

		<div class="onebox"><label>主题:</label><input type="text" name="theme" value=""><span class="checksstatu "></span></div>
		<div class="onebox"><label>标签:</label><input type="text" name="mark" value="" readonly="readonly" style="padding-right: 40px; width: 270px;" id="mark"><div id="moremark">more</div><span class="checksstatu" style="margin-left: -20px;">(最多不超过5个且不得为空)</span></div>
		<div class="markbox">
			<div id="clearbtn" >清除</div>
			<div id="design_personal" >自定义</div>
			<div id="mark_add" style="border: 0; display: none;"><input type="text" value="" style="border: 1px solid #ccc; width: 50px;" maxlength="10"><input type="button" value="确认"></div>
		</div>
		<div>
			
				
				<textarea id ="editor_id" name="content" style="width:100%;height:360px;"></textarea>
				<span class="checksstatu " id="textareaspan"></span>
		</div>
		<input class="submit" id="submit" type="submit" name="submit" value="提交">
		
		
	</form>
	
	

	
	<?php require_once  "footercode.php"; ?>