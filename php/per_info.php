<?php session_start(); ?>
<div style="min-height: 690px; width: 100%; border:1px solid #ccc; background:#F6F6F6;">
	
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
     	//var_dump($result);
     	$count=count($result[0])/2;
     	$recount=0;

     	foreach ($result[0] as $key => $value) {
     		if($value!=""||$value!=null){
     			$recount++;
     		}
     	}
     	$perc=floor(($recount/2/$count)*100);
     	

 ?>


<div class="top_box">
	<div class="top_logo_box">
		<?php  echo "<img src='{$result[0][userlogo]}'>"; ?>
	</div>
	
	<div style="" class="top_pro_box">
		<progress value="<?php echo $perc; ?>" max="100" class="progress1"></progress><span><h1><?php echo $perc; ?>%</h1>资料完整度</span>
	</div>
</div>
<div class="maininfobox">
	

<table>

	<tbody>
	
			<?php 
				echo <<<oven
<tr>
				<td class="tabtitle"><span>用户名:</span></td>
				<td><div class="tabinfo ">{$result[0]['username']}</div></td>
				
</tr>

<tr>
				<td class="tabtitle"><span>真实姓名:</span></td>
				<td><div class="tabinfo  rew">{$result[0]['truename']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>性别:</span></td>
				<td><div class="tabinfo rew">{$result[0]['usersex']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>年龄:</span></td>
				<td><div class="tabinfo rew">{$result[0]['userage']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>邮箱:</span></td>
				<td><div class="tabinfo rew">{$result[0]['useremail']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>QQ:</span></td>
				<td><div class="tabinfo rew">{$result[0]['userqq']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>手机:</span></td>
				<td><div class="tabinfo rew">{$result[0]['userphone']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>活跃值:</span></td>
				<td><div class="tabinfo ">{$result[0]['userscore']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>用户类型:</span></td>
				<td><div class="tabinfo ">{$result[0]['usertype']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>注册时间:</span></td>
				<td><div class="tabinfo ">{$result[0]['registertime']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>最后登录时间:</span></td>
				<td><div class="tabinfo ">{$result[0]['lastlogintime']}</div></td>
				
</tr>
<tr>
				<td class="tabtitle"><span>登录次数:</span></td>
				<td><div class="tabinfo ">{$result[0]['logincount']}</div></td>
				
</tr>

oven;


			 ?>

	</tbody>
</table>


			<span class="rewrite">编辑</span>
			<div class="rewrite_btn">提交</div>


<hr>

						




			</div>









</div><!--maninfobox-->

<script>
$(function(){

$(".rewrite").click(function(){
	$(".rewrite_btn").show();
	$(this).hide();
	$(".rew").attr('contenteditable', 'true');
	$(".rew").css({"border":"1px solid #ccc"});

});

$(".rewrite_btn").click(function(){
	$(".rewrite").show();
	$(this).hide();
	var truename=$(".rew").eq(0).text();
	var usersex=$(".rew").eq(1).text();
	var userage=$(".rew").eq(2).text();
	var useremail=$(".rew").eq(3).text();
	var userqq=$(".rew").eq(4).text();
	var userphone=$(".rew").eq(5).text();


	$.ajax({
				type:"POST",
				url:'per_info.php',
				data:"check=1&truename="+truename+"&usersex="+usersex+"&userage="+userage+"&useremail="+useremail+"&userqq="+userqq+"&userphone="+userphone+"&rad="+Math.random(),
				success:function(msg){
					alert("修改成功！");
					window.location.replace('homepage.php');
				}
			});


});




});
	

</script>

<?php 

if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		
	}
if(isset($_POST['check'])){
		$check=$_POST['check'];
		
	}
$truename=$_POST['truename'];
$usersex=$_POST['usersex'];
$userage=$_POST['userage'];
$useremail=$_POST['useremail'];
$userqq=$_POST['userqq'];
$userphone=$_POST['userphone'];



		$db=new mysqlcon();
       /* $sql="INSERT INTO user (`truename`,`usersex`,`userage`,`useremail`,`userqq`,`userphone`) VALUES ('$truename','$usersex','$userage','$useremail','$userqq','$userphone')";*/

        $sql="UPDATE `user` SET `truename` = '$truename',`usersex` = '$usersex',`userage` = '$userage',`useremail` = '$useremail',`userqq` = '$userqq',`userphone` = '$userphone'  WHERE username = '{$username}'";
       
		$std= $db->db_prepare($sql);     
		if($check=="1"){
 			$std->execute(); 

		}
       






 ?>




<style type="text/css" media="screen">
table{ }
	.tabtitle{
		width:100px;
		text-align:right;
		padding-right:30px;
	}
	.tabinfo{
		width:300px;
	}
	td{ height:30px; font-size: 14px;}
	.top_box{
		border-bottom:1px solid #ccc;
		min-height:100px;
		width:100%;
		position:relative;
	}
	.top_logo_box{
		padding:10px;
		height:100px;
		width:100px;
		border-radius:50%;
		display:inline-block;
		position:relative;
		float:left;
	}
	.top_logo_box img{
		height:80px;
		width:80px;
	}
	.top_pro_box{
		height:50px;min-width:300px; position: relative; float:left;
		padding-top:40px;
	}
	.top_pro_box span{
		float:right;
		margin-left:15px;
		margin-top:-10px;
		color:#4870B5;
	}
	.progress1{
		width:420px;
		display:inline-block;
		border-radius:5px;
	}
	progress {
    
    border: 1px solid #80CFEC;  
    background-color:#e6e6e6;
    color: #0064B4; /*IE10*/
	}

	progress::-moz-progress-bar { background: #0064B4;border-radius:5px; }
	progress::-webkit-progress-bar { background: #e6e6e6; border-radius:5px;}
	progress::-webkit-progress-value  { background: #0064B4;border-radius:5px; }

	.maininfobox{
		min-height:300px;
		width:100%;
		position:relative;
		margin-top:10px;
	}
	.rewrite{
		display:block;
		height:30px;
		min-width:30px;
		position:absolute;
		right:10px;
		top:10px;
	}
	.rewrite:hover{
		color:#5784EB;
		cursor:pointer;
	}
	.rewrite_btn{
		height:30px; 
		width:60px; 
		background:#75D4EA;
		text-align: center;
		line-height:30px;
		position:absolute;
		right:10px;
		top:10px;
		display:none;
	}
	
</style>






