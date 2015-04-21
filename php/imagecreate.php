<?php
session_start();
getCode(4,60,25);

function getCode($num,$w,$h) {
	$str = "23456789abcdefghijkmnpqrstuvwxyz";
	$code = '';
	for ($i = 0; $i < $num; $i++) {
		$code .= $str[mt_rand(0, strlen($str)-1)];
	}
	//将生成的验证码写入session，备验证页面使用
	$_SESSION["yanzhengma"] = $code;
	//创建图片，定义颜色值
	Header("Content-type: image/PNG");
	$im = imagecreate($w, $h);
	$black = imagecolorallocate($im, mt_rand(0, 200), mt_rand(0, 120), mt_rand(0, 120));
	$gray = imagecolorallocate($im, 118, 151, 199);
	$bgcolor = imagecolorallocate($im, 235, 236, 237);

	//画背景
	imagefilledrectangle($im, 0, 0, $w, $h, $bgcolor);
	//画边框
	imagerectangle($im, 0, 0, $w-1, $h-1, $gray);
	//imagefill($im, 0, 0, $bgcolor);

	for($i=0;$i<5;$i++){ 
	$te=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255)); 
	imageline($im,rand(0,60),rand(0,25),rand(0,60),rand(0,25),$te); 
	} 

	//在画布上随机生成大量点，起干扰作用;
	for ($i = 0; $i < 50; $i++) {
		imagesetpixel($im, rand(0, $w), rand(0, $h), $black);
	}
	//将字符随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成
	$strx = rand(5, 10);
	for ($i = 0; $i < $num; $i++) {
		$strpos = rand(15, 22);
		imagettftext($im,15,rand(-30,30),$strx,$strpos,$black,"../fonts/simkai.ttf",substr($code, $i, 1));
		$strx += rand(8, 14);
	}
	imagepng($im);
	imagedestroy($im);
}
?>