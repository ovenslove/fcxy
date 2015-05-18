<?php 
session_start();

$simpletalkid=$_POST['simpletalkid'];
$simpletalk=$_POST['simpletalk'];
$username=$_SESSION['username'];
$seaarea=$_POST['seaarea'];
$addtime=date("Y-m-d h:i:s");

require_once '../php/mysqlcon.class.php';
        $db=new mysqlcon();
        $sql1="INSERT INTO `simpletalk`( `username`, `simpletalkid`, `addtime`, `simpletalk`, `seaarea`,`goodnum`) 
                            VALUES ('$username','$simpletalkid','$addtime','$simpletalk','$seaarea',0)";
 
        $std= $db->db_prepare($sql1);
         if( $std->execute()) {
            echo "true";
         }else {
            echo "faild";
         }     







 ?>