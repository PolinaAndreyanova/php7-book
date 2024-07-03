<?php
function dump($str)
{
    echo "<pre>";
    print_r($str);
    echo "</pre>";
}

if (!function_exists("get_magic_quotes_gpc")) {
    function get_magic_quotes_gpc()
    {
        return false;
    }
}
