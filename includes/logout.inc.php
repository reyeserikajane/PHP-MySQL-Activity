<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    session_destroy();

    // Redirect to a login page or wherever you want after logout
    header("Location: ../index.php");
    exit();
} else {
    header("Location: ../index.php");
}


