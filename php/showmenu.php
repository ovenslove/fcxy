<?php
		$tablename=$_POST["tablename"];
		$menutemp=$_POST["menutemp"];
		
		require_once 'mysqlcon.class.php';
       $db=new mysqlcon();
       
	    $sql1="SELECT * FROM  ". $tablename." WHERE per_name='".$menutemp."' ORDER BY typeid ASC";
	    $sql2="SELECT * FROM ".$tablename." ORDER BY typeid ASC";
	    if($menutemp==""){
					$std= $db->db_prepare($sql2); 
	    	}else{
	    		$std= $db->db_prepare($sql1);    
	    	}
         
        $std->execute(); 
        $result=$std->fetchall(PDO::FETCH_ASSOC);
        echo json_encode($result);
       
 ?>