<?php
$url = "params=Привет мир!";
echo filter_var($url, FILTER_SANITIZE_ENCODED);