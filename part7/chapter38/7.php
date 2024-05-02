<?php
function imageTtfBBox_fixed($size, $angle, $fontfile, $text)
{
    $horiz = imageTtfBBox($size, 0, $fontfile, $text);
    $cos = cos(deg2rad($angle));
    $sin = sin(deg2rad($angle));
    $arBox = [];

    for ($i = 0; $i < 7; $i += 2) {
        list ($x, $y) = [$horiz[$i], $horiz[$i + 1]];
        $arBox[$i]   = round($x * $cos + $y * $sin);
        $arBox[$i+1] = round($y * $cos - $x * $sin);
    }
    
    return $arBox;
}

function imageTtfSize($size, $angle, $fontfile, $text)
{
    $arBox = imageTtfBBox_fixed($size, $angle, $fontfile, $text);
    $x = [$arBox[0], $arBox[2], $arBox[4], $arBox[6]];
    $y = [$arBox[1], $arBox[3], $arBox[5], $arBox[7]];
    $width  = max($x) - min($x);
    $height = max($y) - min($y);

    return array($width, $height, 0 - min($x), 0 - min($y));
}

function imageTtfGetMaxSize($angle, $fontfile, $text, $width, $height)
{
    $min = 1;
    $max = $height;
    while (true) {
        $size = round(($max + $min) / 2);
        $sz = imageTtfSize($size, $angle, $fontfile, $text);
        if ($sz[0] > $width || $sz[1] > $height) {
            $max = $size;
        } else {
            $min = $size;
        }
        if (abs($max - $min) < 2) {
            break;
        }
    }

    return $min;
}