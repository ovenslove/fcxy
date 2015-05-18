<?php 

			$pages=$_POST['pages'];
			$limit=$_POST['limit'];
			$limitstar=$pages *$limit; 
			require_once '../php/mysqlcon.class.php';
	        $db=new mysqlcon();
		    $sql1="SELECT * FROM  `simpletalk` ORDER BY id  DESC limit {$limitstar},{$limit}";

	        $std1= $db->db_prepare($sql1);


	         if( $std1->execute()) {
	         		 $result=$std1->fetchall(PDO::FETCH_BOTH);
	         		 foreach ($result as $key => $value) {
	         		 	 //var_dump($value);
	         		 	$value['addtime']=substr($value['addtime'],10,6);

	     		  		 	$sql3="SELECT userlogo FROM `user` WHERE  username='".$value['username']."'";
	     		  		 
		          		 	$std3= $db->db_prepare($sql3);
		          		 	$std3->execute();
		          		 	$result3=$std3->fetchall(PDO::FETCH_BOTH);
		          		 	
		         		 	 


	         		 	

	         		 	echo <<<oven
	         		 	<div class="simbox contentbox">
						<div  class="c_top_box">
						<a href="#"><img src="{$result3[0]['userlogo']}" ></a><span><a href="#">{$value['username']}</a></span><br><span>{$value['addtime']}</span>
						<input type="hidden" value="{$value['simpletalkid']}">
						</div>
						<div class="c_content_box">
							<div class="c_content_word">
								{$value['simpletalk']}
					
						</div>
						<div class="c_content_img">


oven;

	         		 	
	         		 	$sql2="SELECT * FROM  `images` WHERE  simpletalkid=".$value['simpletalkid'];
	         		 	$std2= $db->db_prepare($sql2);
	         		 	$std2->execute();
	         		 	$result2=$std2->fetchall(PDO::FETCH_BOTH);
	         		 	//var_dump($result2);
	         		 	 if(result2!=""){
							foreach ($result2 as $key2 => $value2) {
								         		 	 
								echo "<img src='".$value2['imgsrc']."'>";
								         		 	 	
							 }


	         		 	 }else{
	         		 	 	echo "暂无照片！";
	         		 	 }
	         		 	 
						
echo <<<ovenslove
						</div>

</div>

			<div class="c_comment_add">
				<div class="c_comment_bar">
					<i class="fa fa-thumbs-o-up ">({$value['goodnum']}次)</i>
				</div>
				<div class="c_comment_show">
					<ul>

ovenslove;

						// <li><a href="#"><img src="../images/logo.jpg" ></a><span><a href="#">瓜瓜</a>：你好！</span><span>12:21</span></li>	
						
							$sql4="SELECT * FROM `comment` c , `user` u WHERE  u.username='".$value['username']."' and  c.simpletalkid=".$value['simpletalkid']  ;
	     		  		 	//echo $sql4;
		          		 	$std4= $db->db_prepare($sql4);
		          		 	$std4->execute();
		          		 	$result4=$std4->fetchall(PDO::FETCH_BOTH);
		          		 	//var_dump($result4);
							foreach ($result4 as $key4 => $value4) {

									//$std2->execute();
	         		 				//$result5=$std2->fetchall(PDO::FETCH_BOTH);
									// var_dump($value4);
								echo '<li><a href="#"><img src="'.$value4['userlogo'].'" ></a><span><a href="#">'.$value4['username'].'</a>：'.$value4['comment'].'</span><span>'.substr($value4['addtime'],10,6).'</span></li>	';
							}

echo '				
						
					</ul>
					
				</div>
				<div style="position: relative;">
					<div class="c_comment" contenteditable="true">我也说一句</div>
					<input type="button" value="评论" class="c_comment_btn">
				</div>
				
			</div>
		</div>

'	;

						

	         		 }



	         }else {
	         	echo "faild";
	         }     




		 ?>