<?php
require_once("connection_multi.php");

$arArr = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "ninth", "tenth"];

$arKeys = [];

foreach ($m->getServerList() as $server) {
    $arKeys["{$server["host"]}:{$server["port"]}"] = [];
}

foreach($arArr as $key) {
    $server = $m->getServerByKey($key);
    $arKeys["{$server["host"]}:{$server["port"]}"][] = $key;
}

foreach($arKeys as $server => $group) {
    $m->deleteMultiByKey($group[0], $group);
}