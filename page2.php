<?php
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = "користувач";
}
?>
<title>Page #2</title>
<h1>PAGE 2</h1>
<p> Привіт <?php echo $name; ?></p>
<a href="index.php">Перша сторінка</a>