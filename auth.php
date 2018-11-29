<?php 
if (isset($_SESSION['login'])) { 
    header('Location: admin.php');
    die;
}

include 'db.php';

$postData = file_get_contents('php://input');
$data = json_decode($postData, true); 


$login = $data['login'];
$pass = $data['pass'];

if ($login != '' && $pass != '') {
    $query = "SELECT user_id FROM users WHERE login = '$login' AND pass = '$pass'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) != 0) {
        session_start();
        $_SESSION['login'];
        $_SESSION['lifetime'] = time() + 60 * 10;
        // $encode = json_encode($data);
        // echo $encode;
        echo json_encode('login');

    } else {
        echo json_encode('Неправильный логин или пароль!');
        die;
    }
} else {
    echo json_encode('Заполните все поля! ');
    die;
}