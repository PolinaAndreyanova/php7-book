<?php
function FilterTags($value)
{
    return strip_tags($value);
}

$str = <<<MARKER
<h1>Заголовок</h1>
<p>Первый параграф, посвященный "проверке"</p>
MARKER;

echo "<pre>";

echo filter_var($str, FILTER_CALLBACK, ["options" => "FilterTags"]);

echo "</pre>";
