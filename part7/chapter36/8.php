<?php
$arData = [
    "number" => 5,
    "first" => "chapter01",
    "second" => "ch02",
    "id" => 2
];

$arDefinition = [
    "number" => [
        "filter" => FILTER_VALIDATE_INT,
        "options" => ["min_range" => -10, "max_range" => 10]
    ],
    "first" => [
        "filter" => FILTER_VALIDATE_REGEXP,
        "options" => ["regexp" => '/^ch\d+$/']
    ],
    "second" => [
        "filter" => FILTER_VALIDATE_REGEXP,
        "options" => ["regexp" => '/^ch\d+$/']
    ],
    "id" => FILTER_VALIDATE_INT
];

$arResult = filter_var_array($arData, $arDefinition);

echo "<pre>";

print_r($arResult);

echo "<pre>";