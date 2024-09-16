<?php

$db_file = 'database.db';

try {
    $pdo = new PDO("sqlite:$db_file");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($firstname) || empty($email) || empty($password)) {
        die('Все поля обязательны для заполнения.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Некорректный email.');
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        die('Этот email уже зарегистрирован.');
    }

    $sql = "INSERT INTO users (firstname, email, password) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$firstname, $email, $hashed_password])) {
        echo 'Регистрация успешна!';
    } else {
        echo 'Ошибка регистрации.';
    }
}
?>