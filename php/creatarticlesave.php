
 <!DOCTYPE html>
 <html>
 <head>
 	<meta  charset="UTF-8">
 	<title></title>
 </head>
 <body>
 <?php
 	$type=$_POST["codetype"];
	$codetheme=$_POST["theme"];
	$content=addslashes( $_POST["content"]);
	$market=$_POST["mark"];
	$addtime=date("Y-m-d H:i:s");
	/*
	echo "主题".$codetheme; 
	
	echo "<br>类型".$type;
	echo "<br>标签".$market;
	echo "<br>添加时间".$addtime;

	 */
		require_once '../php/mysqlcon.class.php';
        $db=new mysqlcon();
	    $sql1="INSERT INTO `article` (`addtime`, `theme`, `type`, `link`, `market`, `content`, `checkstatu`) VALUES ('$addtime', '$codetheme', '$type', 'http://www.iocoo.cc', '$market','$content','1')";
        $std= $db->db_prepare($sql1);
        if( $std->execute()) {
        	echo "<p><h2>successed!</h2></p><p><a href='../index.php' title='返回首页'>返回首页</a><a href='creatarticle.php' title='返回继续编辑'>返回继续编辑</a></p> ";
        }else {
        	echo "faild";
        }     
      
        //$result=$std->fetch ( PDO :: FETCH_BOTH );

 ?>
 </body>
 </html>