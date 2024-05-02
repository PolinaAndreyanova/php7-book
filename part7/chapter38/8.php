<?php
require_once "7.php";

$string = "Привет, мир!";
$font = getcwd() . "/times.ttf";
$im = imageCreateFromPng("sample02.png");
$angle = (int)(microtime(true) * 10) % 360;
// $angle = rad2deg(atan2(imageSY($im), imageSX($im)));
$size = imageTtfGetMaxSize($angle, $font, $string, imageSX($im), imageSY($im));
$shadow = imageColorAllocate($im, 0, 0, 0);
$color  = imageColorAllocate($im, 128, 255, 0);
$sz = imageTtfSize($size, $angle, $font, $string);
$x = (imageSX($im) - $sz[0]) / 2 + $sz[2];
$y = (imageSY($im) - $sz[1]) / 2 + $sz[3];
imageTtfText($im, $size, $angle, (int)($x + 3), (int)($y + 2), $shadow, $font, $string);
imageTtfText($im, $size, $angle, (int)$x, (int)$y, $color, $font, $string);
header("Content-type: image/png");
imagePng($im);