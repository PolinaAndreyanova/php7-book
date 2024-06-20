<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=forum', 'polina', '01032004');
} catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
}