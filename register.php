<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите имя"><br>
        <label>Фамилия</label>
        <input type="text" name="surname" placeholder="Введите фамилию"><br>
        <label>Возраст</label>
        <input type="text" name="age" placeholder="Введите возраст"><br>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин"><br>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"><br>
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль"><br>
        <button type="submit">Войти</button>
        <p>
            <a href="/">Авторизация</a>
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>

</html>