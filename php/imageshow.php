<?php require_once  "headercode.php"; ?>
<?php 

		require_once 'mysqlcon.class.php';
        $db=new mysqlcon();
        $sql="SELECT * FROM  images order by id desc  limit 50";
		$std= $db->db_prepare($sql);     			
        $std->execute(); 
        $result=$std->fetchall(PDO::FETCH_BOTH);

 ?>

<link rel="stylesheet" type="text/css" href="../css/pubuliu.css">
<script src="../js/pubuliu_cj.js" type="text/javascript" ></script>
<script src="../js/pubuliu_self.js" type="text/javascript" ></script>
<script>
$(document).ready(function() {

	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 5,
			offsetX: 5,
			offsetY: 5
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 5,
				offsetY: 5
			});
		}
	});
});
</script>
</head>
<body>
<h1 style="text-align: center; margin: 30px 0">工大照片墙</h1>
<h3 style="text-align: center;">湖南工业大学2015毕业设计项目--基于PHP的湖工大风彩校园</h3>
<hr style="width:80%; margin: 0 auto;">
<!-- Content -->
<div class="markbox">
	<div class="markback">
		
	</div>
	<img src="../images/logo.jpg"  style="height: 100%; width: 100%; position: absolute; border:1px solid red;">
</div>

<div id="container">




<?php 
	foreach ($result as $key => $value) {

		echo '

		<div class="grid">
		<div class="imgholder">
			<img src="'.$value["imgsrc"].'" />
		</div>
		
		
	</div>';
	}


 ?>

	
</div>


<?php require_once  "footercode.php"; ?>