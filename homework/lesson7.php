<?php
include "lesson6.html";
include "user function.php";
?>

<form action="" method="get">
    <label for="chislo"> Введіть число для піднесення до квадрату</label>
    <input type="number" id="chislo" name="chislo">
    <br>
    <input type="submit" value="Обрахунок">
</form>
<?php
if (isset($_GET['chislo'])) {
    $chislo = kvadrat(($_GET)['chislo']);
    echo $chislo;
}
?>
<br>
<form action="" method="get">
    <label for="a"> Введіть перше число</label>
    <input type="number" id="a" name="a">
    <br>
    <label for="b"> Введіть друге число</label>
    <input type="number" id="b" name="b">
    <br>
    <input type="submit" value="Обрахунок">
</form>
<?php
if (isset($_GET['a'], $_GET['b'])) {
    $result = sum($_GET['a'], $_GET['b']);
    echo $result;
}
?>
<br>
<form action="" method="get">
    <label for="c"> Введіть перше число</label>
    <input type="number" id="c" name="c">
    <br>
    <label for="d"> Введіть друге число</label>
    <input type="number" id="d" name="d">
    <br>
    <label for="e"> Введіть число на яке буде ділитись</label>
    <input type="number" id="e" name="e">
    <br>
    <input type="submit" value="Обрахунок">
</form>
<?php
if (isset($_GET['c'], $_GET['d'], $_GET['e'])) {
    $result = three($_GET['c'], $_GET['d'], $_GET['e']);
    echo $result;
}
?>
<br>
<form action="" method="post">
    <label for="t"> Введіть число від 1 до 7</label>
    <input type="number" id="t" name="t">
    <br>
    <input type="submit" value="Відправити">
</form>
<?php
if (isset($_POST['t'])) {
    $result = diap($_POST['t']);
    echo $result;
}
?>
<br>
<form action="" method="post">
    <label for="i"> Введіть назву свого міста</label>
    <input type="text" id="i" name="i">
    <br>
    <input type="submit" value="Відправити">
</form>
<?php
if (isset($_POST['i'])) {
    $city = gorod($_POST['i']);
    echo $city;
}
?>

<br>
<form action="" method="get">
    <label for="name"> Введіть своє імя'я</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="age"> Введіть свій вік</label>
    <input type="number" id="age" name="age">
    <br>
    <label for="text"> Введіть текст</label>
    <textarea id="text" name="text"></textarea>
    <br>
    <input type="submit" value="Send">
</form>
<?php
if (isset($_GET['name'], $_GET['age'], $_GET['text'])) {
    $res = user($_GET['name'], $_GET['age'], $_GET['text']);
    echo $res;
}
?>


<br>
<form action="" method="GET">
    <label for="sl">Введіть своє ім 'я</label>
    <input type="text" name="sl" value="<?php if (isset($_GET['sl'])) echo $_GET['sl']; ?>">
    <input type="submit">
</form>
<?php
if (isset($_GET['sl'])) {
    $name = $_GET['sl'];
    echo "Ваше ім'я $name";
}
?>

<br>
<form action="" method="GET">
    <label for="sl">Введіть своє ім 'я</label>
    <br>
    <input type="text" name="fe" value="<?php if (isset($_GET['fe'])) echo $_GET['fe']; ?>">
    <br>
    <label for="te">Введіть свій текст</label>
    <br>
    <textarea name="te"><?php if (isset($_GET['te'])) echo $_GET['te']; ?></textarea>
    <input type="submit" value="Send">
</form>
<?php
if (isset($_GET['fe'],$_GET['te'])) {
    $name = $_GET['fe'];
    $tex = $_GET['te'];
    echo "Ваше ім'я $name <br> Ваш текст $tex";
}
?>


