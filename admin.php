<?php

session_start();

if($_SESSION['lifetime'] < time()) {
    // unset($_SESSION['login']);
    header('Location: unauth.php');
    die;
}

if (isset($_SESSION['login'])) { // Если пользователь авторизован
    // echo 'Привет' . $_SESSION['login'] . '!<br>';
    // echo 'Тут важный контент админки<br>
    //       <a href="unauth.php">Выйти из аккаунта</a>';
    include('header.php');
    include('cp.php');
} else {
    header('Location: http://localhost:8888/FastStart/index.php');
    die;
}