<?php
require_once "1.php";

echo title("PRS-1");
echo dump("Тестовое сообщение");

function title($str)
{
    echo "<h1>";
    print_r($str);
    echo "</h1>";
}
