<?php
require_once("connect_db.php");

$query = "CREATE TABLE catalogs14 (
    id_catalog INT(11) NOT NULL AUTO_INCREMENT,
    name TINYTEXT NOT NULL,
    PRIMARY KEY (id_catalog)
)";

$count = $pdo->exec($query);

if ($count !== false) {
    echo "Таблица создана успешно";
} else {
    echo "Не удалось создать таблицу";
    echo "<pre>";
    print_r($pdo->errorInfo());
    echo "<pre>";
}