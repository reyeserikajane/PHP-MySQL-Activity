<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["emailOrUsername"];
    $pwd = $_POST["pwd"];


    try {
        require_once 'dbh.inc.php';
        $result = check_username($pdo, $username);
        if($result){
            check_pass($pwd, $result);
        } else {
            header("Location: ../index.php");
        }
        
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

function check_username(object $pdo, string $username)
{

    $query = "SELECT * FROM user WHERE userName = :username OR email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function check_pass(string $pwd, array $result)
{
    if (password_verify($pwd, $result["password"])) {
        echo "Password Match";
        session_start();
        $_SESSION["full_name"] = $result["full_name"];
        $_SESSION["username"] = $result["username"];
        $_SESSION["email"] = $result["email"];
        session_write_close();
        header("Location: ../profile.php");
        exit();
    } else {
        echo "Wrong Password or User not existing";
        header("Location: ../index.php");
        exit();
    }
}
