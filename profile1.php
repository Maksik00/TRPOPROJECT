<?php
session_start();
require_once('db.php');

// Проверка авторизации
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Если пользователь не авторизован, перенаправляем на страницу входа
    exit;
}

// Получение данных текущего пользователя
$user_id = $_SESSION['user_id'];
$query = $conn->prepare("SELECT login, email FROM users WHERE id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo '
        <div class="containerLowerPorfile">
            <span class="Name">Логин пользователя: ' . htmlspecialchars($user['login']) . '</span>
            <br><br>
            <span>Почта пользователя: ' . htmlspecialchars($user['email']) . '</span>
            <br>
        </div>
    ';
} else {
    echo "Данные пользователя не найдены!";
}
?>