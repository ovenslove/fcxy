<?php session_start();
	header("Content-type:text/html;charset=utf-8");
	
	$user=Array();
	$user['username']=$_POST['username'];	
	$user['password']=md5($_POST['password']);
	$user['email']=$_POST['email'];
	$user['phone']=$_POST['phone'];
	$user['registertime']=date("Y-m-d h:i:s");
    $user['registerip']=$_SERVER['REMOTE_ADDR'];

		require_once '../php/mysqlcon.class.php';
        $db=new mysqlcon();
	    $sql1="INSERT INTO `user` (`username`, `userpsd`, `useremail`, `userphone`, `registertime`, `usertype`,`registerip`,`userlogo`) 
	    		  			VALUES ('$user[username]', '$user[password]', '$user[email]', '$user[phone]', '$user[registertime]' , '学生',' $user[registerip]','../images/logo.jpg')";
        $std= $db->db_prepare($sql1);
        if( $std->execute()) {
        	$_SESSION['username']=$user['username'];
        	$_SESSION['usertype']='学生';
        	echo "<p><h2>successed!</h2></p><p><a href='../index.php' title='返回首页'>返回首页</a></p><p><a href='homepage.php' title='去自己的小窝看看'>去自己的小窝看看...(@_@)</a></p> ";
        }else {
        	echo "faild";
        }     






















 ?>