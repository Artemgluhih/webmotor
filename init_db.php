<?php
$db_file = 'database.db';

try {
    $pdo = new PDO("sqlite:$db_file");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        firstname TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL
    )";
    
    $pdo->exec($sql);
    echo "Таблица users успешно создана!";
} catch (PDOException $e) {
    die("Ошибка при создании таблицы: " . $e->getMessage());
}
?>
