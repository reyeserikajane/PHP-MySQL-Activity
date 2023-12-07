<?php

$dsn = "mysql:host=localhost;dbname=ierepertoire";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successfull";
} catch (PDOException $e) {
    echo "Connection Failed: " .$e->getMessage();
}