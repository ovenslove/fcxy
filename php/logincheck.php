<?php 

		$username=$_POST['username'];
		$password=md5($_POST['password']);

            
	require_once '../php/mysqlcon.class.php';
        $db=new mysqlcon();
	$sql1="SELECT userpsd FROM `user` WHERE  username='{$username}' OR useremail='{$username}' OR userphone='{$username}' ";
        $std= $db->db_prepare($sql1);
        $std->execute(); 
        $result=$std->fetchall(PDO::FETCH_BOTH);
        if($password==$result[0][userpsd]){
        	echo 'true';
        }else{
        	echo 'false';
        }
      
        
 ?>