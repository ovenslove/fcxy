<?php 
	session_start(); 
	header("Content-type:text/html;charset=utf-8");

	$values=$_POST['values'];
	if($values==$_SESSION['yanzhengma']){
		echo true;
	}else{
		echo false;
	}





 ?>