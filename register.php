<?php
require_once('db.php');

// Считываем данные из формы
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);

// Проверяем, что поля не пустые
if (empty($login) || empty($password) || empty($email)) {
    die("Все поля должны быть заполнены!");
}

// Проверка формата email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Некорректный email.");
}

// Хешируем пароль
$password = password_hash($password, PASSWORD_DEFAULT);



// Проверяем, есть ли пользователь с таким логином или email
$query = $conn->prepare("SELECT * FROM users WHERE login = ? OR email = ?");
$query->bind_param("ss", $login, $email);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    die("Пользователь с таким логином или email уже существует.");
}

// Добавляем нового пользователя в базу данных
$stmt = $conn->prepare("INSERT INTO users (login, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $login, $password, $email);

if ($stmt->execute()) {
    echo "Регистрация успешна!";
    header("Location: profile.php"); //Перенаправляет пользователя на указаную страницу
    exit();//Прерывает выполнение скрипта после перенаправления
} else {
    echo "Ошибка при регистрации: " . $stmt->error;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Закрываем подключение
$stmt->close();
$conn->close();

?>