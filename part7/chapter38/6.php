<?php
$tile = imageCreateFromJpeg("sample2.jpg"); 
$im = imageCreateTrueColor(800, 600); 
imageFill($im, 0, 0, imageColorAllocate($im, 0, 255, 0));
imageSetTile($im, $tile);
$arP = [];
for ($i = 0; $i < 4; $i++) {
    array_push($arP, mt_rand(0, imageSX($im)), mt_rand(0, imageSY($im)));
}
imageFilledPolygon($im, $arP, IMG_COLOR_TILED);
header("Content-type: image/jpeg");
imageJpeg($im, "", 100);