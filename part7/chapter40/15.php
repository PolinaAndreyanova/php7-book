<?php
require_once("connection_multi.php");

$arArr = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "ninth", "tenth"];

$keys = [];

foreach ($m->getServerList() as $server) {
    $keys["{$server["host"]}:{$server["port"]}"] = [];
}

foreach($arArr as $key) {
    $server = $m->getServerByKey($key);

    $keys["{$server["host"]}:{$server["port"]}"][] = $key;
}

echo "<pre>";
print_r($keys);
echo "</pre>";