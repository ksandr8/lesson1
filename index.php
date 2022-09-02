<?php
if (isset($_GET['name'])) {
    setcookie('name', $_GET['name']);
    $name = $_GET['name'];
} elseif (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = 'користувач';
}
?>
<h1>PAGE 1</h1>
<p> Привіт <?php echo $name; ?></p>
<title>Page #1</title>
<form action="" method="get">
    <label for="name">Ваше ім'я</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Відправити">
</form>

<br>

<br>
<a href="page2.php">Друга сторінка</a>
