<?php
$value = filter_input(INPUT_POST, "search", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$result = filter_input(
    INPUT_POST,
    "search",
    FILTER_CALLBACK,
    [
        "options" => function ($value) {
            $value = preg_replace_callback(
                '/\b([^\s]+?)\b/u',
                function ($arMatch) {
                    if (mb_strlen($arMatch[1]) > 3)
                        return $arMatch[1];
                    else
                        return "";
                },
                $value
            );
            return strip_tags($value);
        }
    ]
);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Фильтрация пользовательского ввода</title>
    <meta charset="UTF-8">
</head>

<body>
    <form method="POST">
        <input type="text" name="search" value="<?=$value?>"><br>
        <input type="submit" value="Фильтровать">
    </form>
    <?=$result?>
</body>

</html>