<?php
    // Включення відображення помилок для налагодження
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_EMAIL);
    
    $pass = filter_var(trim($_POST['password']));

    $pass = md5($pass."fads2341");

    $mysql = new mysqli('localhost', 'root', 'root', 'college');

    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass' ");

    $user = $result->fetch_assoc();

    if (!$user) {
        echo "User not found";
        exit();
    }

   setcookie('user', $user['name'], time() + (10 * 365 * 24 * 60 * 60), "/");

    $mysql->close();

    header('Location: /index.php')

?>