<?php

session_start();

if (!isset($_SESSION['login'])) { 
    header('Location: index.php');
    die;
}

unset($_SESSION['login']);
header('Location: index.php');