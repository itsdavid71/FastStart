<?php

include 'db.php';

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

// var_dump($result);

$users = [];

while ($user = mysqli_fetch_assoc($result)) {
    $users[] = $user;
}

// var_dump($users);

foreach($users as $user) {
    echo '<th scope="row">'. $user['user_id'] . '</th>';
    echo '<td>'. $user['login'] . '</td>';
    echo '<td>'. $user['email'] . '</td>';
    echo '<td>'. $user['date_created'] . '</td>';
    echo '</tr>';
}