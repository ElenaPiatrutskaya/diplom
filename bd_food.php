<?php
$host = 'localhost';
$bdname = 'food';
$username = 'root';
$passwd = '';

$link = mysqli_connect($host, $username,  $passwd, $bdname);

if ($link == false) {
    echo "Ошибка подключения";
}
