<?php
session_start();
$str= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
$rand_str= str_shuffle($str);
$captcha = substr($rand_str, 0, 6);
$_SESSION['captcha'] = $captcha;
$captcha_text = $captcha;
$image = imagecreate(100,32);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 4, 25, 8, $captcha_text, $text_color);
header("content-type: image/png");
imagepng($image);
imagecolordeallocate($image,$text_color);
imagecolordeallocate($image,$bg_color);
imagedestroy($image);
?>
