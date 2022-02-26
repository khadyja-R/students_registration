<?php
$username="root";
$password="12345678";
$database = new pdo("mysql:host=localhost;dbname=inscripton;charset=utf8;", $username, $password);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
