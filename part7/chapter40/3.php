<?php
require_once("connect.php");

if ($m->append("key", "123")) {
    echo "Значение успешно установлено: " . $m->get("key");
}