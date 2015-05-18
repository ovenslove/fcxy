<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" media="screen">
		*{ padding:0; margin: 0; border: 0;}
	</style>
</head>
<body>
<div>
	

	<div style="height: 300px; width: 300px; padding: 40px; border: 1px solid red; float: left;">
		none
	</div>

	<div style="height: 300px; width: 300px; padding: 40px; border: 1px solid red; box-sizing: border-box; float:left;">
		box-sizing: border-box
	</div>
	<div style="height: 300px; width: 300px; padding: 40px; border: 1px solid red;box-sizing:content-box; float: left; clear: right;">
		box-sizing:content-box
	</div>
</div>

<div>
	

	<xmp>
			<div style="height: 300px; width: 300px; padding: 40px; border: 1px solid red; float: left;">
				none
			</div>

			<div style="height: 300px; width: 300px; padding: 40px; border: 1px solid red; box-sizing: border-box; float:left;">
				box-sizing: border-box
			</div>
			<div style="height: 300px; width: 300px; padding: 40px; border: 1px solid red;box-sizing:content-box; float: left;">
				box-sizing:content-box
			</div>
	</xmp>
</div>
</body>
</html>