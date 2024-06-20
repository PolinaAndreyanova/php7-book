<?php
try {
    $pdo = new PDO(
    "mysql:host=localhost;dbname=forum",
    "polina",
    "01032004",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
}