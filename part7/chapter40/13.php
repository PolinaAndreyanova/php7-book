<?php
require_once("connection_multi.php");

$arArr = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "ninth", "tenth"];

foreach ($arArr as $key) {
    $server = $m->getServerByKey($key);

    echo "$key => {$server["host"]}:{$server["port"]}<br>";
}