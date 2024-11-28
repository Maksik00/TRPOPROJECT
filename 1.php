<?php
require_once('db.php');

$sql = 'SELECT * FROM users ORDER BY login DESC';
$query = $pdo->prepare($sql);
$query -> execute();
$logins = $query->fetchAll(PDO::fetch_assoc);
foreach($logins as $el)
    echo'
