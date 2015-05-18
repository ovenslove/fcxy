<?php 
session_start();


$simpletalkid=$_POST['simpletalkid'];
$c_comment=$_POST['c_comment'];
$username=$_SESSION['username'];
$contentname=$_POST['contentname'];
$addtime=date("Y-m-d H:i:s");
			require_once '../php/mysqlcon.class.php';
	        $db=new mysqlcon();
	    	$sql1="INSERT INTO `comment` (`simpletalkid`, `username`, `contentname`, `addtime`, `comment`) VALUES ('$simpletalkid', '$username', '$contentname', '$addtime', '$c_comment')";
		   	$sql2="SELECT * FROM `comment` WHERE simpletalkid=".$simpletalkid;
	        $std1= $db->db_prepare($sql1);
	        $std2= $db->db_prepare($sql2);
	        if( $std1->execute()) {
        	/* $result=$std2->fetchall(PDO::FETCH_ASSOC);
        		echo json_encode($result);*/
        	echo "true";
        	} 




 ?>