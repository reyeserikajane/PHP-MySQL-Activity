<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["emailOrUsername"];
    $pwd = $_POST["pwd"];


    try {
       require_once 'dbh.inc.php';
        
       $result = check_username($pdo, $username);

       
       
       
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.html");
}

function check_username(object $pdo, string $username){
    
        $query = "SELECT * FROM user WHERE userName = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

}

