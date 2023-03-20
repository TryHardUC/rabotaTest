<?php

session_start();
require_once 'connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`name`, `surname`, `age`, `login`, `password`) VALUES ('$name', '$surname', '$age', '$login', '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');


} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}

?>