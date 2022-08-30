<?php
if (isset($_GET['logout']) && !empty($_GET['logout'])) {
    session_start();
    header("Location: index.php");
    session_destroy();
}
session_start();
$user = $_SESSION['user']['login'];
$role = $_SESSION['user']['role'];
echo "Привіт $user <br> Роль: $role <br>";
echo "Вітаю з авторизацією <br>";
echo "<br>";
?>
<form action="" method="get">
    <input type="submit" name="logout" value="Logout">
</form>
