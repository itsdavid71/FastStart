<?php

include 'db.php';

$postData = file_get_contents('php://input');
$data = json_decode($postData, true); 

$login = $data['login'];
$pass = $data['pass'];
$pass2 = $data['pass2'];
$email = $data['email'];



if ($login != '' && $pass != '' && $pass2 != '' && $email != '') {
    if ($pass === $pass2) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $check_sel = "SELECT * FROM users where login = '$login'";
            $check_query = mysqli_query($link, $check_sel);
            $check = mysqli_num_rows($check_query); 
            if ($check === 0) {
                $query = "INSERT INTO users (login, pass, email, date_created)
                VALUES ('$login', '$pass', '$email', NOW())";
                mysqli_query($link, $query);
                $error = mysqli_error($link);
                if ($error) {
                    echo json_encode($error);
                } else {
                    $encode = json_encode($data);
                    echo $encode;
                    }
            } else {
                echo json_encode('Такой пользователь уже существует');
                die;
            }    
        } else {
            echo json_encode('Некорректная почта');
        }
    
    } else {
        echo json_encode('Пароли не совпадают');
        die;
    }
} else {
    echo json_encode('Заполните все поля');
    die;
}


