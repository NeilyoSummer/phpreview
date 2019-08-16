<?php

try {
    $dsn = "mysql:host=localhost;dbname=test";
    $username = "root";
    $password = "123456";
    $attr = [
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new PDO($dsn, $username, $password, $attr);
    $sql = "SELECT id, title, content FROM message WHERE user_name=:user_name";
    $stmt = $pdo->prepare($sql);
    $user_name = 'username';
    $stmt->execute([':user_name' => $user_name]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $e->getMessage();
}
