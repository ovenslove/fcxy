<?php session_start(); ?>
<?php require_once  "headercode.php"; ?>

<style type="text/css" media="screen">
	.mainbox{ border:1px solid #ccc; position:relative;}
	.topmenu{height: 40px; width:100%; background: #f5f5f5; border-bottom:1px solid rgba(0, 0, 0, 0.05);}
	.topmenu ul{list-style:none; margin-left:20px; }
	.topmenu li { 
		list-style:none; 
		float:left; 
		margin:0 10px 0 0; 
		display:inline-block; 
		line-height:40px;
		width:60px;
		height:100%;
		text-align:center;
		cursor:pointer;
		box-sizing: border-box;
		box-shadow: 2px 0px 2px 1px rgba(0, 0, 0, 0.4);
	}
	.topmenu li:hover {
		background: #76B8EF;
	}
	.showbox{
		height:500px;
		width:100%;
		background: #E8DFDF;
		display:none;
		overflow:auto;
	}
	th{ height:30px; width:auto; text-align:left; border-bottom:1px solid #ccc; padding:0 15px 0 0;}
	tr{ height:30px;}
	td { overflow-y: hidden; max-width:200px; height:30px;}
	table{ border:1px solid #ccc;table-layout:fixed; }
	.tablebar{
		height:30px;
		width:100%;
		background:#f5f5f5;
		margin:10px 0 0 0;
	}
	.tablebar span{ width:40px; height:100%; display:inline-block; text-align:left; cursor:pointer;}
	.tablebar span:hover{ color:red;}
	.insertbox{ 
		min-height:50px;
		width:100%;
		border:1px solid #ccc;
		box-sizing: border-box;
		display:none;
	}
	.insertbox input{
	
	}
</style>




<script>
	$(function(){

		var typename="0";

		$(".showbox").eq(0).css({"display":"block"});//初始化界面。显示第一个用户管理界面

		$(".topmenu li").click(function(){
			var liindex=$(this).index();
			typename=liindex;

			$(".showbox").css({"display":"none"});
			$(".showbox").eq(liindex).css({"display":"block"});
			$(".topmenu li").css({"background":"#f5f5f5"});
			$(this).css({"background":"#76B8EF"});
			
		});


		



$(".delete").click(function(){
			var a=[];//定义一个数组，用来保存选中的id
			console.log(typename);
			if(typename=="0"){
				var bb=$("input[name='checkbox0']");
			}else if(typename=="1"){
				var bb=$("input[name='checkbox1']");
			}else if(typename=="2"){
				var bb=$("input[name='checkbox2']");
			}else if(typename=="3"){
				var bb=$("input[name='checkbox3']");
			}else if(typename=="4"){
				var bb=$("input[name='checkbox4']");
			}else if(typename=="5"){
				var bb=$("input[name='checkbox5']");
			}else if(typename=="6"){
				var bb=$("input[name='checkbox6']");
			}
			console.log(bb);
				
			 for(var i=0;i<bb.length;i++){
			 	var temp=bb.eq(i).attr('tip');
 				if(bb[i].checked == true){
 					$("tr").eq(i+1).css('background','#ccc');
 					if($.inArray(temp,a)<0){
 						a.push(temp);
 						console.log(temp);
 					}
   				
 				}else if(bb[i].checked == false){
 					var indexx=$.inArray(temp,a);
 					if(indexx>=0){
							a.splice($.inArray(temp,a),1);
 					}
 					
 				}
    }     
    as=a.join();
 	//alert(as);
 	if(as==""){
 		alert("没有选中任何记录哦！");
 	}else{

 			$.ajax({
					type:"POST",
					url:"adminmanage.php",
					data:"typename="+typename+"&datas="+as+"&cztype=del&rad="+Math.random(),
					success:function(msg1){
							window.location.replace('adminmanage.php');
					}									
			});//ajax
			

 	}


		});

//--------------------------------------------------------------------------------
$(".update").click(function(){
			var a=[];//定义一个数组，用来保存选中的id
			var bb=$("input[name='checkbox0']");
				
			 for(var i=0;i<bb.length;i++){
			 	var temp=$("input[name='checkbox0']").eq(i).attr('tip');
 				if(bb[i].checked == true){
 					$("tr").eq(i+1).css('background','#ccc');
 					if($.inArray(temp,a)<0){
 						a.push(temp);
 					}
   				
 				}else if(bb[i].checked == false){
 					var indexx=$.inArray(temp,a);
 					if(indexx>=0){
							a.splice($.inArray(temp,a),1);
 					}
 					
 				}
    }//for 


    as=a.join();
 	//alert(as);
$(".insertbox").show();

		

});

//--------------------------------------------------------------------------------


$(".gonggaopostbtn").click(function(){
	
	var datas=$(".gonggaoinput").text();
	
		$.ajax({
					type:"POST",
					url:"adminmanage.php",
					data:"typename=5&datas="+datas+"&cztype=ins&rad="+Math.random(),
					success:function(msg1){

							window.location.replace('adminmanage.php');
							alert("发布成功！");
					}									
			});//ajax
});//gonggaopostbtn


$(".vedio_addbtn").click(function(){
	
	var link=$(".vedio_src").html();
	var title=$(".vedio_title").text();
	var laiyuan=$(".vedio_laiyuan").text();

	 alert(link);
	 /*link=html_encode(link);
	 alert(link);*/

		$.ajax({
					type:"POST",
					ContentType: "text/xml;utf-8",
					url:"adminmanage.php",
					data:"typename=6&link="+link+"&title="+title+"&laiyuan="+laiyuan+"&cztype=ins&rad="+Math.random(),
					success:function(msg1){

							//window.location.replace('adminmanage.php');
							alert("发布成功！");
					}									
			});//ajax
});//vedio_addbtn







//编码
  function html_encode(str)
  {
    var s = "";
    if (str.length == 0) return "";
    s = str.replace(/&/g, ">");
    s = s.replace(/</g, "<");
    s = s.replace(/>/g, ">");
    s = s.replace(/ /g, " ");
    s = s.replace(/\'/g, "'");
    s = s.replace(/\"/g, '"');
    s = s.replace(/\n/g, "<br>");
    return s;
  }

/*  解码*/
  function html_decode(str)
  {
    var s = "";
    if (str.length == 0) return "";
    s = str.replace(/>/g, "&");
    s = s.replace(/</g, "<");
    s = s.replace(/>/g, ">");
    s = s.replace(/ /g, " ");
    s = s.replace(/'/g, "\'");
    s = s.replace(/"/g, "\"");
    s = s.replace(/<br>/g, "\n");
    return s;
  }




	});//jq



</script>


<script language=javascript> 
function checkAll(e, itemName) 
{ 
  var aa = document.getElementsByName(itemName); 
  for (var i=0; i<aa.length; i++) 
   aa[i].checked = e.checked; 
} 

function checkItem(e, allName) 
{ 
  var all = document.getElementsByName(allName)[0]; 
  if(!e.checked) all.checked = false; 
  else 
  { 
    var aa = document.getElementsByName(e.name); 
    for (var i=0; i<aa.length; i++) 
     if(!aa[i].checked) return; 
    all.checked = true; 
  } 
} 
</script> 

<div class="topmenu">
	<ul>
		<li>用户管理</li>
		<li>文章管理</li>
		<li>说说管理</li>
		<li>照片管理</li>
		<li>文章分类</li>
		<li>公告栏</li>
		<li>视频管理</li>
	</ul>
	<span style="line-height: 40px; float:right; margin-right: 10px; font-size: 16px; color:#416DEA;">湖南工业大学2015毕业设计项目-基于PHP湖工大风彩校园</span>
</div>

<?php 
		//require_once 'mysqlcon.class.php';
		//$db=new mysqlcon();
		//$sql="SELECT * FROM  `gonggao` WHERE  statu=1 ORDER BY addtime DESC limit 1" ;
		//$std= $db->db_prepare($sql); 
		//$std->execute(); 
		//$result=$std->fetchall(PDO::FETCH_ASSOC);
			require_once 'mysqlcon.class.php';




		
 ?>

<?php 

$db2=new mysqlcon();

$typename=$_POST['typename'];
$datas=$_POST['datas'];
$cztype=$_POST['cztype'];

if($cztype=="del"){
	if($typename=="0"){
		$sql2="DELETE FROM `user` WHERE userid in ({$datas})";
	}else if($typename=="1"){
		$sql2="DELETE FROM `article` WHERE articleid in ({$datas})";
	}else if($typename=="2"){
		$sql2="DELETE FROM `simpletalk` WHERE id in ({$datas})";
	}else if($typename=="3"){
		$sql2="DELETE FROM `images` WHERE id in ({$datas})";
	}else if($typename=="4"){
		$sql2="DELETE FROM `type_son` WHERE id in ({$datas})";
	}else if($typename=="5"){
		$sql2="DELETE FROM `gonggao` WHERE id in ({$datas})";
	}else if($typename=="6"){
		$sql2="DELETE FROM `vedio` WHERE id in ({$datas})";
	}



	
}else if($cztype=="ins"){
		$addtime=date("Y-m-d h:i:s");
		if($typename=="5"){
			$sql2="INSERT INTO `gonggao` (content , addtime,statu) VALUES ('{$datas}','{$addtime}',1)";
		}else if($typename=="6"){
			var_dump($_POST);
			$link=$_POST['link'];

			$title=$_POST['title'];
			$laiyuan=$_POST['laiyuan'];
			$sql2="INSERT INTO `vedio` (link , addtime,title,statu,laiyuan) VALUES ('{$link}','{$addtime}','{$title}',1,'{$laiyuan}')";
		}
		
		

	}
	$std2= $db2->db_prepare($sql2); 
	$std2->execute(); 

 ?>

<div class="showbox yonghu">

<?php 




		$db=new mysqlcon();
		$sql="SELECT * FROM  `user` " ;

		$std= $db->db_prepare($sql); 
		$std->execute(); 
		$result=$std->fetchall(PDO::FETCH_ASSOC);
		echo "<table class='table0' name='table0'>
			<caption>用户管理</caption>
					<thead>
						<tr>
							<th> 字段 </th>
							<th> userid  </th>
							<th> username  </th>
							<th> truename  </th>
							<th> usersex  </th>
							<th> userage  </th>
							<th> useremail  </th>
							<th> userqq  </th>
							<th> userphone  </th>
							<th> usertype  </th>
							<th> userscore  </th>
							<th> userlogo  </th>
							
						</tr>
					</thead>
					<tbody>";

		foreach ($result as $key => $value) {
			echo <<<oven
		<tr>
			<td><input type='checkbox' name='checkbox0' value="111" tip='{$value['userid']}' onclick="checkItem(this, 'mmAll')"></td>
			<td>{$value['userid']}</td>
			<td>{$value['username']}</td>
			<td>{$value['truename']}</td>
			<td>{$value['usersex']}</td>
			<td>{$value['userage']}</td>
			<td>{$value['useremail']}</td>
			<td>{$value['userqq']}</td>
			<td>{$value['userphone']}</td>
			<td>{$value['usertype']}</td>
			<td>{$value['userscore']}</td>
			<td>{$value['userlogo']}</td>
		</tr> 
oven;
		}

		echo "</tbody></table>";



 ?>

 <div class="tablebar">
 		<input type=checkbox name=mmAll onclick="checkAll(this, 'checkbox0')">
  		<span>全选</span>
   		<span class="delete">删除</span>
   		<span class="update">修改</span>
   	  	<span class="select">查询</span>
 	
 </div>
		<div class="insertbox">
		<table>
			<caption>数据更新</caption>
			<thead>
						<tr>
									
									<th> userid  </th>
									<th> username  </th>
									<th> truename  </th>
									<th> usersex  </th>
									<th> userage  </th>
									<th> useremail  </th>
									<th> userqq  </th>
									<th> userphone  </th>
									<th> usertype  </th>
									<th> userscore  </th>
									<th> userlogo  </th>
									
						</tr>
			</thead>
			<tbody>
			
				
			
		<?php 
				$db=new mysqlcon();
				$sql="SELECT * FROM  `user` " ;

				$std= $db->db_prepare($sql); 
				$std->execute(); 
				$result=$std->fetchall(PDO::FETCH_ASSOC);
				foreach ($result as $key => $value) {
					echo <<<oven
				<tr>
					<form action="adminmanage.php" method="post" >
					<td>{$value['userid']}</td>
					<td>{$value['username']}</td>
					<td><input type="text" name="truename" value="{$value['truename']}"  style="width:70px;"></td>
					<td><input type="text" name="usersex" value="{$value['usersex']}" style="width:50px;"></td>
					<td><input type="text" name="userage" value="{$value['userage']}" style="width:45px;"></td>
					<td><input type="text" name="useremail" value="{$value['useremail']}" style="width:100px;"></td>
					<td><input type="text" name="userqq" value="{$value['userqq']}" style="width:70px;"></td>
					<td><input type="text" name="userphone" value="{$value['userphone']}" style="width:100px;"></td>
					<td>{$value['usertype']}</td>
					<td>{$value['userscore']}</td>
					<td>{$value['userlogo']}</td>
					</form>
				</tr> 
oven;
				}











		 ?>
			</tbody>
		</table>
		
			<input type="button"  value="更新" style="width:100px; height:24px; background: #f5f5f5;" class="updatebtn">
		</div>

</div>

<div class="showbox wenzhang">
	<?php 




		$db=new mysqlcon();
		$sql="SELECT * FROM  `article` " ;

		$std= $db->db_prepare($sql); 
		$std->execute(); 
		$result=$std->fetchall(PDO::FETCH_ASSOC);
		echo "<table class='table0' name='table0'>
			<caption>文章管理</caption>
					<thead>
						<tr>
							<th> 字段 </th>
							<th> articleid  </th>
							<th> theme  </th>
							<th> username  </th>
							<th> market  </th>
							<th> type  </th>
							<th> link  </th>
							<th> addtime  </th>
							
							
						</tr>
					</thead>
					<tbody>";

		foreach ($result as $key => $value) {
			//$value['content']=htmlentities($value['content']);
			echo <<<oven
		<tr>
			<td><input type='checkbox' name='checkbox1' value="111" tip='{$value['articleid']}' onclick="checkItem(this, 'mmAll')"></td>
			<td>{$value['articleid']}</td>
			<td>{$value['theme']}</td>
			<td>{$value['username']}</td>
			<td>{$value['market']}</td>
			<td>{$value['type']}</td>
			<td>{$value['link']}</td>
			<td>{$value['addtime']}</td>
			
		</tr> 
oven;
		}

		echo "</tbody></table>";



 ?>
 <div class="tablebar">
 		<input type=checkbox name=mmAll onclick="checkAll(this, 'checkbox1')">
  		<span>全选</span>
   		<span class="delete">删除</span>
   		<span class="update">修改</span>
   	  	<span class="select">查询</span>
 	
 </div>
</div>


<div class="showbox shuoshuo">
	<?php 




		$db=new mysqlcon();
		$sql="SELECT * FROM  `simpletalk` " ;

		$std= $db->db_prepare($sql); 
		$std->execute(); 
		$result=$std->fetchall(PDO::FETCH_ASSOC);
		echo "<table class='table0' name='table0'>
			<caption>说说管理</caption>
					<thead>
						<tr>
							<th> 字段 </th>
							<th> id  </th>
							<th> username  </th>
							<th> simpletalk  </th>
							<th> goodnum  </th>
							<th> simpletalkid  </th>
							<th> seaarea  </th>
							<th> addtime  </th>
							
							
						</tr>
					</thead>
					<tbody>";

		foreach ($result as $key => $value) {
			//$value['content']=htmlentities($value['content']);
			echo <<<oven
		<tr>
			<td><input type='checkbox' name='checkbox2' value="111" tip='{$value['id']}' onclick="checkItem(this, 'mmAll')"></td>
			<td>{$value['id']}</td>
			<td>{$value['username']}</td>
			<td>{$value['simpletalk']}</td>
			<td>{$value['goodnum']}</td>
			<td>{$value['simpletalkid']}</td>
			<td>{$value['seaarea']}</td>
			<td>{$value['addtime']}</td>
			
		</tr> 
oven;
		}

		echo "</tbody></table>";



 ?>
  <div class="tablebar">
 		<input type=checkbox name=mmAll onclick="checkAll(this, 'checkbox2')">
  		<span>全选</span>
   		<span class="delete">删除</span>
   		<span class="update">修改</span>
   	  	<span class="select">查询</span>
 	
 </div>

</div>

<div class="showbox zhaopian">
	<?php 




		$db=new mysqlcon();
		$sql="SELECT * FROM  `images` " ;

		$std= $db->db_prepare($sql); 
		$std->execute(); 
		$result=$std->fetchall(PDO::FETCH_ASSOC);
		echo "<table class='table0' name='table0'>
			<caption>照片管理</caption>
					<thead>
						<tr>
							<th> 字段 </th>
							<th> id  </th>
							<th> imgname  </th>
							<th> imgid  </th>
							<th> username  </th>
							<th> simpletalkid  </th>
							<th> addtime  </th>
							<th> imgsrc  </th>
							<th> imgpreview  </th>
							<th> imgtype  </th>
							<th> imgsize </th>
							
							
						</tr>
					</thead>
					<tbody>";

		foreach ($result as $key => $value) {
			//$value['content']=htmlentities($value['content']);
			echo <<<oven
		<tr>
			<td><input type='checkbox' name='checkbox3' value="111" tip='{$value['id']}' onclick="checkItem(this, 'mmAll')"></td>
			<td>{$value['id']}</td>
			<td>{$value['imgname']}</td>
			<td>{$value['imgid']}</td>
			<td>{$value['username']}</td>
			<td>{$value['simpletalkid']}</td>
			<td>{$value['addtime']}</td>
			<td>{$value['imgsrc']}</td>
			<td><img src="{$value['imgsrc']}" style="width:60px; height:50px;"></td>
			<td>{$value['imgtype']}</td>
			<td>{$value['imgsize']}</td>
			
		</tr> 
oven;
		}

		echo "</tbody></table>";



 ?>
  <div class="tablebar">
 		<input type=checkbox name=mmAll onclick="checkAll(this, 'checkbox3')">
  		<span>全选</span>
   		<span class="delete">删除</span>
   		<span class="update">修改</span>
   	  	<span class="select">查询</span>
 	
 </div>
</div>

 <!-- ---------------------------------------------------------------------- -->
<div class="showbox fenlei">
	<?php 




		$db=new mysqlcon();
		$sql="SELECT * FROM  `type_son` " ;

		$std= $db->db_prepare($sql); 
		$std->execute(); 
		$result=$std->fetchall(PDO::FETCH_ASSOC);
		echo "<table class='table0' name='table0'>
			<caption>文章分类管理</caption>
					<thead>
						<tr>
							<th> 字段 </th>
							<th> id  </th>
							<th> per_name  </th>
							<th> typeid  </th>
							<th> type_name  </th>
							
							
							
						</tr>
					</thead>
					<tbody>";

		foreach ($result as $key => $value) {
			//$value['content']=htmlentities($value['content']);
			echo <<<oven
		<tr>
			<td><input type='checkbox' name='checkbox4' value="111" tip='{$value['id']}' onclick="checkItem(this, 'mmAll')"></td>
			<td>{$value['id']}</td>
			<td>{$value['per_name']}</td>
			<td>{$value['typeid']}</td>
			<td>{$value['type_name']}</td>
			
			
		</tr> 
oven;
		}

		echo "</tbody></table>";



 ?>
  <div class="tablebar">
 		<input type=checkbox name=mmAll onclick="checkAll(this, 'checkbox4')">
  		<span>全选</span>
   		<span class="delete">删除</span>
   		<span class="update">修改</span>
   	  	<span class="select">查询</span>
 	
 </div>
 	<div class="type_addbox">
 		
 	</div>

</div>
 <!-- ---------------------------------------------------------------------- -->


<div class="showbox gonggao">
	<div class="gonggao_left">
		<div class="noticebox">
				<span class="boxtitle">公告栏</span>
				<div class="noticeboxcontent" style="position:relative;">
				<div class="gonggaoinput" contenteditable="true">
					请输入公告内容！
				</div>

					<?php 
						
       					echo "<p style='position: absolute; bottom: 0px; text-align: right; display: block; width:90%;'>发布时间：".date("Y-m-d")."</p>";
					 ?>
					 
				</div>
				<div class="gonggaopostbtn">发&nbsp;&nbsp;布</div>
			</div>
	</div>

	<div class="gonggao_right">
			<?php 
						$db=new mysqlcon();
		$sql="SELECT * FROM  `gonggao` " ;

		$std= $db->db_prepare($sql); 
		$std->execute(); 
		$result=$std->fetchall(PDO::FETCH_ASSOC);
		echo "<table class='table0' name='table0'>
			<caption>历史公告</caption>
					<thead>
						<tr>
							<th> 字段</th>
							<th> id  </th>
							<th> content  </th>
							<th> addtime  </th>
							<th> statu  </th>
							
							
						</tr>
					</thead>
					<tbody>";

		foreach ($result as $key => $value) {
			echo <<<ovens
		<tr>
			<td><input type='checkbox' name='checkbox5' value="111" tip='{$value['id']}' onclick="checkItem(this, 'mmAll')"></td>
			<td>{$value['id']}</td>
			<td>{$value['content']}</td>
			<td>{$value['addtime']}</td>
			<td>{$value['statu']}</td>
			
		</tr> 
ovens;
		}

		echo "</tbody></table>";



 ?>
 <div class="tablebar">
 		<input type=checkbox name=mmAll onclick="checkAll(this, 'checkbox5')">
  		<span>全选</span>
   		<span class="delete">删除</span>
   		<span class="update">修改</span>
   	  	<span class="select">查询</span>
 	
 </div>


	</div>



</div>
<!-- --------------------------------vedios-------------------------------------------- -->
<div class="showbox vedios">

	<?php 




		$db=new mysqlcon();
		$sql="SELECT * FROM  `vedio` " ;

		$std= $db->db_prepare($sql); 
		$std->execute(); 
		$result=$std->fetchall(PDO::FETCH_ASSOC);
		echo "<table class='table0' name='table0'>
			<caption>视频管理</caption>
					<thead>
						<tr>
							<th> 字段 </th>
							<th> id  </th>
							<th> link  </th>
							<th> title  </th>
							<th> statu  </th>
							<th> laiyuan  </th>
							<th> addtime  </th>
							
							
						</tr>
					</thead>
					<tbody>";

		foreach ($result as $key => $value) {
			//$value['link']=htmlentities($value['link']);
			echo <<<oven
		<tr>
			<td><input type='checkbox' name='checkbox6' value="111" tip='{$value['id']}' onclick="checkItem(this, 'mmAll')"></td>
			<td>{$value['id']}</td>
			<td>{$value['link']}</td>
			<td>{$value['title']}</td>
			<td>{$value['statu']}</td>
			<td>{$value['laiyuan']}</td>
			<td>{$value['addtime']}</td>
			
		</tr> 
oven;
		}

		echo "</tbody></table>";



 ?>
 <div class="tablebar">
 		<input type=checkbox name=mmAll onclick="checkAll(this, 'checkbox6')">
  		<span>全选</span>
   		<span class="delete">删除</span>
   		<span class="update">修改</span>
   	  	<span class="select">查询</span>
 	
 </div>

 <div class="vedio_addbox"> 
 		<span>标题：</span><div class=" vedio_box vedio_title" contenteditable="true">
 			
 		</div>
 		<span>地址：</span><div class=" vedio_box vedio_src" contenteditable="true">
 			
 		</div>
 		<span>来源：</span><div class=" vedio_box vedio_laiyuan" contenteditable="true">
 			
 		</div>

 		<div class="vedio_addbtn">提交</div>
 </div>





</div>

<!-- --------------------------------vedios-------------------------------------------- -->


<script>
	$(function(){







	});



</script>

<style type="text/css" media="screen">
	.vedio_addbox{
		min-height:100px;
		width:50%;
		margin-top: 10px;
		box-sizing: border-box;
	}
	.vedio_addbox span{
		display:inline-block;
		width:40px;
	}
	.vedio_addbtn{
		display:block;
		height:30px;
		width:200px;
		margin-left:150px;
		background:#98EF90;
		margin-bottom:30px;
		box-shadow: 0 0 2px 0px rgba(0, 0, 0, 0.3);
		text-align:center;
		line-height:30px;
		font-size: 18px;
	}
	.vedio_box{
		display:inline-block;
		border:1px solid #ccc;
		box-sizing: border-box;
		margin:5px;
		padding:2px 5px;
	}
	.vedio_title{
		height:30px;
		width:440px;
		
		
	}
	.vedio_src{
		height:100px;
		width:440px;
		
	}
	.vedio_laiyuan{
		height:30px;
		width:440px;
	}
	embed{
		height:100px;
		width:150px;
	}
	.gonggao_left{
		min-height:300px;
		width:440px;
		border:1px solid #ccc;
		display:inline-block;
		position:absolute;
		top:140px;
		left:50px;
	}
	.gonggao_right{
		height:490px;
		min-width:300px;
		border:1px solid #ccc;
		display:inline-block;
		position:absolute;
		top:45px;
		right:5px;
		overflow-y: auto;
	}
	.noticebox{ 
	min-height: 200px; 
	width: 100%; }
.boxtitle{
	display: block; 
	height:30px; 
	width: 100%; 
	line-height: 30px; 
	font-weight: 700; background:#CEECE5; 
	text-align: center;
}
.noticeboxcontent{ 
	width: 100%; 
	min-height: 240px; 
	background: #EAEAEA; 
	padding: 5px 5px 5px 8px;
	box-sizing:border-box; 
	line-height: 20px;
	text-indent: 2em;	
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;}
	.gonggaoinput{
		width:100%;
		min-height:200px;
		box-sizing: border-box;
		border:1px dashed #ccc;

	}
	.gonggaopostbtn{
		height:30px;
		width:100%;
		background: #A1F18A;
		text-align:center;
		line-height:30px;
		font-size:16px;
		cursor:pointer;
	}
	.type_addbox{
		min-height:100px;
		width:100%;
		border:1px solid #ccc;
		margin-top: 30px;
		box-sizing: border-box;
	}
	
</style>



<?php require_once  "footercode.php"; ?>