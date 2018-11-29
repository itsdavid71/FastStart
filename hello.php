<?php

session_start();
echo 'Добро пожаловать в панель администратора, ' . $_SESSION['login'];
