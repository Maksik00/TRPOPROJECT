<?php
require_once('db.php');

// Считываем данные из формы
$login = trim($_POST['login']);
$password = trim($_POST['password']);

// Проверка на заполненность полей
if (empty($login) || empty($password)) {
    die("Поля должны быть заполнены.");
}

// Проверяем, есть ли пользователь с таким логином
$query = $conn->prepare("SELECT * FROM users WHERE login = ?");
$query->bind_param("s", $login);
$query->execute();
$result = $query->get_result();

// Если пользователь найден
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc(); // Получаем данные пользователя

    // Проверяем пароль
    if (password_verify($password, $user['password'])) {
        echo "Успешный вход! Добро пожаловать, " . htmlspecialchars($user['login']) . "!";
        // Здесь можно перенаправить на главную страницу или личный кабинет:
        header("Location: profile.html");
        // exit();
    } else {
        echo "Неверный пароль!";
    }
} else {
    echo "Пользователь с таким логином не найден.";
}

// Закрываем соединение
$query->close();
$conn->close();
?>
