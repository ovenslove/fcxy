<?php session_start(); ?>


<?php 

$username=$_POST['username'];

$_SESSION['username']=$username;
$_SESSION['usertype']="学生";
 if(isset($_SESSION['username'])){
        	echo 'true';
        }else{
        	echo 'false';
        }

 ?>