<ul>
    <li><a href="/lesson6.html">Home</a></li>
</ul>
<?php
include("../../user function.php");

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

$errorMessage = null;
$auth = false;

if ($login && $password) {
    $user = getUserByLogin($login);

    if ($user === null || !isValidPassword($user['password'], $password)) {
        $errorMessage = 'Login or password incorect';
    } else {
        $auth = true;
    }
}
?>

<?php
if ($errorMessage) {
    echo $errorMessage;
} elseif ($auth === true) {
    echo "Success login";
} else { ?>
    <form action="" method="post">
        <label for="login">LOGIN</label>
        <input type="text" id="login" name="login">
        <br>
        <label for="password">PASSWORD</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" id="submit" value="Вхід">
    </form>
<?php }
?>

