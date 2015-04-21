<?php
		$tablename=$_POST["tablename"];
		$limitcount=$_POST["limitcount"];
		$page=$_POST["page"];
		$typename=$_POST["typename"];
		$tt=$_POST["tt"];
		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
        $aa=$page*$limitcount;
        $bb=$aa-$limitcount;
        $sql0="SELECT * FROM  ". $tablename." WHERE  checkstatu=1 ORDER BY addtime DESC limit ".$bb.",".$limitcount ;
       
	    $sql1="SELECT * FROM  ". $tablename." WHERE type='".$typename."' AND checkstatu=1 ORDER BY addtime DESC limit ".$bb.",".$limitcount ;
	    $sql2="SELECT * FROM ".$tablename." limit ".$limitcount;
	    if($tt==1){
					if($typename==""){
					$std= $db->db_prepare($sql0);    
					}else{
					$std= $db->db_prepare($sql1);     
					}
	    	}elseif ($tt==2) {
	    		$std= $db->db_prepare($sql2);    
	    	}
         
        $std->execute(); 
        $result=$std->fetchall(PDO::FETCH_ASSOC);
        echo json_encode($result);
       
 ?>