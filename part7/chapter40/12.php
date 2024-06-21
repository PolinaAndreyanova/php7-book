<?php
require_once("connection_multi.php");

$arArr = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "ninth", "tenth"];

foreach ($arArr as $value) {
    if ($m->setByKey($value, $value, $value)) {
        echo "Успешно размещено на сервере $value<br>";
    }
}