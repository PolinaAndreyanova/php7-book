<?php
$arFnames = glob("*.{gif,jpg,png}", GLOB_BRACE);
$fname = $arFnames[mt_rand(0, count($arFnames) - 1)];
$size = getimagesize($fname);
header("Content-type: {$size['mime']}");
echo file_get_contents($fname);