<?php
session_start();
//print_r($_POST);
		$imgid=time().rand();
     	$newname="HUT-".$imgid;
  		 $str = explode(".",$_FILES["file"]["name"]);
  		 $str=end($str);

		$imgname=$newname.".".$str;
		$imgid=$imgid;
		$username=$_SESSION['username'];
		$simpletalkid=$_POST['inns'];
		$addtime=date("Y-m-d h:i:s");
		$imgsrc="../upload/sipimage/".$imgname;
		$imgtype=$_FILES["file"]["type"];
		$imgsize=$_FILES["file"]["size"];


		require_once '../php/mysqlcon.class.php';
        $db=new mysqlcon();
	    $sql1="INSERT INTO `images`(`imgname`, `imgid`, `username`, `simpletalkid`, `addtime`, `imgsrc`, `imgtype`, `imgsize`) 
	    					VALUES ('$imgname','$imgid','$username','$simpletalkid','$addtime','$imgsrc','$imgtype','$imgsize')";
 
        $std= $db->db_prepare($sql1);
         if( $std->execute()) {
         	echo "true";
         }else {
         	echo "faild";
         }     


if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 1000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
  		

    if (file_exists("../upload/sipimage/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      	
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload/sipimage/" .$newname.".".$str);
     

      }
    }
  }
else
  {
  echo "Invalid file";
  }




?>