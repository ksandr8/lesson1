<?php
if (isset($_GET['logout']) && !empty($_GET['logout'])) {
    session_start();
    header("Location: index.php");
    session_destroy();
}
session_start();
$user = $_SESSION['user']['login'];
$role = $_SESSION['user']['role'];
?>
<link href="style.scss" rel="stylesheet" type="text/css">
<body>
<div class="wrapper">
    <form class="form-signin" action="" method="get">
        <p class="text"> <?php
            echo "Вітаю з авторизацією $user <br> Ваша роль: $role <br>";
            echo "<br>"; ?> </p>
        <input type="submit" name="logout" value="Logout">
    </form>
</div>
</body>