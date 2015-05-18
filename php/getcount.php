<?php
	$tablename=$_POST["tablename"]; 
	$typename=$_POST["typename"];

		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
        $sql="SELECT count(*) FROM  ". $tablename." WHERE checkstatu=1 AND type='".$typename."'";
        
        $sql1="SELECT count(*) FROM  ". $tablename." WHERE checkstatu=1 ";
        if($typename==""){
					$std= $db->db_prepare($sql1);    
					}else{
					$std= $db->db_prepare($sql);     
					}
        $std->execute(); 
        $result=$std->fetchall(PDO::FETCH_BOTH);
       echo  $result[0][0];
 ?>