<?php
function tabber($spaces, $echo, ...$planets)
{
    $arNew = [];

    foreach ($planets as $planet) {
        $arNew[] = str_repeat("&nbsp;", $spaces) . $planet;
    }

    $echo(...$arNew);
}
