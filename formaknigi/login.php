<?php
session_start();


$login = $_POST['login'];
$password = md5($_POST['password']);

$res = file_get_contents('login.json');

$data = json_decode($res, true);

if ($login == $data['login'] && $password == $data['password']) {
    header('Location: kniga.php');
}else {
    echo "Неверный логин или пароль";
}
