<?php
		$tablename=$_POST["tablename"];
		$percentcount=$_POST["percentcount"];
		$articleid=$_POST["articleid"];
		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
       
	    $sql1="SELECT * FROM  ". $tablename." WHERE articleid=".$articleid." ORDER BY discussaddtime DESC limit ".$percentcount.",5 ";

	    $std= $db->db_prepare($sql1);    
        $std->execute(); 
        $result=$std->fetchall(PDO::FETCH_ASSOC);
        echo json_encode($result);
       
 ?>