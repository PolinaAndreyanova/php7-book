<?php
$string = $_SERVER["QUERY_STRING"] ?? "Hello, world!";
$img = imageCreateFromGif("button.gif");
$color = imageColorAllocate($img, 0, 0, 0);
$px = (imageSX($img) - 6.5 * strlen($string)) / 2;
imageString($img, 3, $px, 1, $string, $color);
header("Content-type: image/png");
imagePng($img);
imageDestroy($img);