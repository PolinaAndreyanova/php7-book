<?php
$arOptions = [
    "options" => [
        "min_range" => -10,
        "max_range" => 10,
        "default" => 10
    ]
];

echo filter_var(1000, FILTER_VALIDATE_INT, $arOptions);