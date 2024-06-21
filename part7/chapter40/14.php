<?php
require_once("connection_multi.php");

$arArr = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "ninth", "tenth"];

foreach ($arArr as $key) {
    echo $m->getByKey($key, $key) . "<br>";
}