<?php
$host = "MySQL-8.2";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
echo "Подключено успешно";
?>