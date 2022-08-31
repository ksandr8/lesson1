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
            header("Location: page1.php");
            exit();
        }
    }
}
?>
<link href="style.scss" rel="stylesheet" type="text/css">
<body>
<div>
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
</div>
<div class="wrapper">
    <form class="form-signin " action="" method="post">
        <h2>Login</h2>
        <a>Login:</a><input class="name1" type="text" name="login" required>
        <br>
        <br>
        <a>Password:</a>
        <input class="name2" type="password" name="password" reaquired>
        <br>
        <br>
        <input type="submit" value="Login" class="button">
    </form>
</body>

