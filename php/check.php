<?php
    // Включення відображення помилок для налагодження
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_EMAIL);

    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_SPECIAL_CHARS);

    $pass = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


    if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "The length of name is inadmissible";
        exit();   
    }

    $pass = md5($pass."fads2341");

    $mysql = new mysqli('localhost', 'root', 'root', 'college');

    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$email', '$pass', '$name')");

    $mysql->close();

    header('Location: /index.html')

?>
