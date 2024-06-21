<?php
require_once("connect.php");

$arValues = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
];

$m->setMulti($arValues);

$results = $m->getMulti(array_keys($arValues));

echo "<pre>";
print_r($results);
echo "</pre>";