<?php
require_once("connect.php");

$arValues = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
];

$m->setMulti($arValues);

$m->getDelayed(array_keys($arValues));

while ($result = $m->fetch()) {
    echo $result["value"] . "<br>";
}