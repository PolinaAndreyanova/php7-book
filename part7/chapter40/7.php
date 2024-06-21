<?php
require_once("connect.php");

$values = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
];

$m->setMulti($values);

foreach (array_keys($values) as $key) {
    echo $m->get($key) . "<br>";
}