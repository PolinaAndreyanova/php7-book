<?php
$arArr = [
    "Deb\"s files",
    "Symbol \\",
    "print 'Hello world!'"
];

echo "<pre>";

print_r($arArr);

echo "</pre>";

$result = filter_var_array($arArr, FILTER_SANITIZE_MAGIC_QUOTES);

echo "<pre>";

print_r($result);

echo "</pre>";
