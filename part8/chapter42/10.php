<?php
function interpolate($message, array $arContext = [])
{
    $replace = [];

    foreach ($arContext as $key => $val) {
        $replace["{" . $key . "}"] = $val;
    }

    return strtr($message, $replace);
}

$message = "User {username} created";

$arContext = ["username" => "bolivar"];

echo interpolate($message, $arContext);
