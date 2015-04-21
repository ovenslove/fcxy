<?php
		$tablename=$_POST["tablename"];
		$disarea=$_POST["disarea"];
		$articleid=$_POST["articleid"];
		$addtime=date("Y-m-d H:i:s");
		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
       
	    //$sql1="SELECT * FROM  ". $tablename." WHERE articleid=".$articleid." ORDER BY discussaddtime DESC limit ".$percentcount.",3 ";
        $sql1="INSERT INTO `".$tablename."`  (articleid,discusscontent,discussaddtime,discussauthor) VALUES ('$articleid','$disarea','$addtime','admin')";
	    $std= $db->db_prepare($sql1);    
        if($std->execute()){
        	echo "true";
        } else{
        	echo "false";
        }
       	
       
       
 ?>