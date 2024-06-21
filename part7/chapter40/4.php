<?php
require_once("connect.php");

if (!$m->add("key", "value")) {
    echo $m->getResultMessage() . "<br>";
}

if (!$m->add("key", "value")) {
    echo $m->getResultMessage() . "<br>";
}
