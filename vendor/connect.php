<?php

$connect = mysqli_connect('localhost', 'root', '', 'testUser');

if (!$connect) {
    die('Error connect to DataBase');
}