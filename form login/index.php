<?php
session_start();
include "AuthFunction.php";
if (isset($_POST['login'], $_POST['password']) && !empty($_POST['login']) && !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login && $password) {
        if (!login($login, $password)) {
            echo "Login or password incorect";
        } else {
            $_SESSION['user'] = login($login, $password);
            $user = $_SESSION['user']['login'];
            $role = $_SESSION['user']['role'];
            echo "Привіт $user <br> Роль: $role <br>";
            echo "Вітаю з авторизацією <br>";
            include "page1.php";
            exit();
        }
    }
}
?>
<form action="" method="post">
    Login:
    <input type="text" name="login">
    <br>
    Password:
    <input type="password" name="password">
    <br>
    <input type="submit" value="Login">
</form>
