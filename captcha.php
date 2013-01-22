<?php header("Content-type: image/png");
session_start();
$md5 = md5(microtime() * time() );
$string = substr($md5, -5);
$captcha = imagecreatefrompng("./captcha.png");
$black = imagecolorallocate($captcha, 0, 0, 0);
$line = imagecolorallocate($captcha,233,239,239);
imageline($captcha,0,0,39,29,$line);
imageline($captcha,40,0,64,29,$line);
imageline($captcha, 10, 0, 200, 50,$line);
$_SESSION['key'] = md5($string);
imagestring($captcha, 5, 20, 10, $string, $black);
imagepng($captcha);?> 
