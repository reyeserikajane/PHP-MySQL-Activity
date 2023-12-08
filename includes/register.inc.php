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
        if (check_usernameEmail($pdo, $email, $username)) {
            $query = "INSERT INTO user (username, full_name, password, email) VALUES (?, ?, ?, ?);";

            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $name, $hashed_pass, $email]);

            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");
            die();
        }
        
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

function check_usernameEmail(object $pdo, string $email, string $username){
    $query = "SELECT * FROM user WHERE userName = :username OR email = :email"; 


    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result['username'] === $username) {
        session_start();
        $_SESSION['username_validation'] = false;
        session_write_close();
        header("Location: ../signup.php");


        return false;
    }

    if($result['email'] === $email){
        session_start();
        $_SESSION['email_validation'] = false;
        session_write_close();
        header("Location: ../signup.php");
        return false;
    }

    return true;


}
