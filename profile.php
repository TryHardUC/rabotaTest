<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Текущий пользователь:</h1>
    <h2 style="margin: 10px 0;">Имя:
        <?= $_SESSION['user']['name'] ?>
    </h2>
    <h2 style="margin: 10px 0;">Фамилия:
        <?= $_SESSION['user']['surname'] ?>
    </h2>
    <h2 style="margin: 10px 0;">Возраст:
        <?= $_SESSION['user']['age'] ?>
    </h2>
    <a href="vendor/logout.php" class="logout">Выход</a>
    <br>

    <h2>Список всех пользователей: </h2><br>

    <? require_once 'vendor/userList.php'; ?>

</body>

</html>