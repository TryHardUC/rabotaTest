<?
session_start();
require_once 'connect.php';

$users = "SELECT * FROM users";
$result = mysqli_query($connect, $users);

foreach ($result as $data) {
    echo "Имя: " . $data["name"] . "<br>" . "Фамилия: " . $data["surname"] . "<br>" . "Возраст: " . $data["age"] . "<br>" . "<br>";
}