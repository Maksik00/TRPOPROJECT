<?php
session_start();
session_unset(); // Очистка данных сессии
session_destroy(); // Удаление сессии
header("Location: login.html"); // Перенаправление на страницу входа
exit;
?>
