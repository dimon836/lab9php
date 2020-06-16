<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 40) {
    echo "Login size is unreal!";
    exit();
} elseif (mb_strlen($name) < 2 || mb_strlen($name) > 40) {
    echo "Name size is unreal!";
    exit();
} elseif (mb_strlen($pass) < 5 || mb_strlen($pass) > 40) {
    echo "Password is easy, please create harder password!";
    exit();
}

$mysql = new mysqli('localhost','root','','lab9php');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");
$mysql->close();

echo "Successful!";
