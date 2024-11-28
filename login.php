<?php
session_start();
require_once('db.php');

// Проверка входных данных
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Подготовленный запрос для проверки пользователя
    $query = $conn->prepare("SELECT id, password FROM users WHERE login = ?");
    $query->bind_param("s", $login);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Проверка пароля
        if (password_verify($password, $user['password'])) {
            // Сохранение идентификатора пользователя в сессии
            $_SESSION['user_id'] = $user['id'];
            header("Location: profile.php"); // Перенаправление в личный кабинет
            exit;
        } else {
            echo "Неверный пароль!";
        }
    } else {
        echo "Пользователь не найден!";
    }
}
?>
