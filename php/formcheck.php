<?php
		$tablename=$_POST['tablename'];
		$typename=$_POST['typename'];
		$values=$_POST['values'];

		switch ($typename) {
			case 'username':$typename='username';break;
			case 'email':$typename='useremail';break;
			case 'phone':$typename='userphone';break;
			
			default:break;
		}

		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
        $sql="SELECT count(*) FROM  ". $tablename." WHERE ".$typename."='".$values."'";
      
        if($typename==""){
					  
			}else{
					$std= $db->db_prepare($sql);     
				}
       
		$std->execute();
        $result=$std->fetchall(PDO::FETCH_BOTH);
        if($result[0][0]==0){
        	echo 0;
        }else{
        	echo 1;
        }

      
      










 ?>