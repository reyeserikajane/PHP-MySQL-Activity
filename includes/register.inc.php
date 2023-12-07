<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $hashed_pass = password_hash($pwd, PASSWORD_DEFAULT);

    // echo htmlspecialchars($username);
    try {
        require_once 'dbh.inc.php';
        $query = "INSERT INTO user (username, full_name, password, email) VALUES (?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $name, $hashed_pass, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php"); 
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
