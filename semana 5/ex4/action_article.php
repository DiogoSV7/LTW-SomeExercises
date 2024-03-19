<?php
session_start();

require_once('database/conection.php');
require_once('database/news.php');

if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (userExists($username, $password)) {
        $_SESSION['username'] = $username;
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            header('Location: index.php');
        }
        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Username and password are required.";
}
?>