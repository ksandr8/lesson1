<?php
include "lesson6.html";
include "user function.php";
?>
<?php
if (isset($_GET['m'], $_GET['d'], $_GET['y'])) {
    $m = $_GET['m'];
    $d = $_GET['d'];
    $Y = $_GET['y'];
    $date = "$Y-$m-$d";
    $day = date('l', strtotime($date));
    echo "День неділі: $day";
}
?>
<form action="" method="get">
    <label for="m">Введіть місяць народження</label>
    <input type="number" name="m">
    <br>
    <label for="d">Введіть день народження</label>
    <input type="number" name="d">
    <br>
    <label for="y">Введіть рік народження</label>
    <input type="number" name="y">
    <br>
    <input type="submit" value="send">

</form>
<br>

<?php
if (!isset($_GET['name'])) {
    ?>
    <form action="" method="get">
        <label for="name">Введіть своє ім'я</label>
        <input type="text" name="name">
        <input type="submit">
    </form>
<?php } else {
    echo $_GET['name'];
}
?>
<br>


<?php
if (isset($_GET['y'])) {
    $y = $_GET['y'];
    if (isLeap($y)) {
        echo "Рік високосний";
    } else {
        echo "Рік не високосний";
    }
}
?>
<form action="" method="get">
    <label for="year">Введіть рік</label>
    <input type="text" name="y" value="<?php if (isset($_GET['y'])) {
    } else echo date('Y') ?> ">
    <input type="submit">
</form>
<br>

<?php
if (isset($_GET['mo'], $_GET['da'], $_GET['ye'])) {
    $mo = $_GET['mo'];
    $da = $_GET['da'];
    $Ye = $_GET['ye'];
    $newYear = mktime(0, 0, 0, 1, 1, date("Y") + 1);
    $currentYear = mktime(0, 0, 0, $mo, $da, $Ye);
    $dif = $newYear - $currentYear;
    $days = $dif / 86400;
    printf('До нового року залишилось: %d днів', $days);
}
?>
<form action="" method="GET">
    <label for="mo">місяць</label>
    <input type="number" name="mo" value="<?php if (isset($_GET['mo'])) {
    } else echo date('m') ?>">
    <br>
    <label for="da">день</label>
    <input type="number" name="da" value="<?php if (isset($_GET['da'])) {
    } else echo date('d') ?>">
    <br>
    <label for="ye">рік</label>
    <input type="number" name="ye" value="<?php if (isset($_GET['ye'])) {
    } else echo date('Y') ?>">
    <br>
    <input type="submit" value="send">
</form>
<br>

<form action="" method="get">
    <input type="checkbox" name="flag" <?php if (isset($_GET['flag'])) echo "checked"; ?>> Чи є Вам 18 років?

    <input type="submit">
</form>
<?php
if (!empty($_GET)) {
    if (isset($_GET['flag'])) {
        echo "Дозволено";
    } else {
        echo "Не дозволено";
    }
}
?>


<br>
<form action="" method="get">
    <input type="radio" name="radio"
           value="1" <?php if (!empty($_GET['radio']) and $_GET['radio'] === '1') echo 'checked'; ?>>HI
    <br>
    <input type="radio" name="radio"
           value="2" <?php if (!empty($_GET['radio']) and $_GET['radio'] === '2') echo 'checked'; ?>> HELLO
    <br>
    <input type="radio" name="radio"
           value="3" <?php if (!empty($_GET['radio']) and $_GET['radio'] === '3') echo 'checked'; ?>> Hi
    <br>
    <input type="submit">
</form>
<?php
if (isset($_GET['radio'])) {
    print_r($_GET['radio']);
}
?>
<br>
<form action="" method="get">
    <select name="sel" id="">
        <option value="1" <?php if (!empty($_GET['sel']) and $_GET['sel'] === '1') echo 'selected'; ?>>Valve</option>
        <option value="2"<?php if (!empty($_GET['sel']) and $_GET['sel'] === '2') echo 'selected'; ?>>Steam</option>
        <option value="3"<?php if (!empty($_GET['sel']) and $_GET['sel'] === '3') echo 'selected'; ?>>CS</option>
    </select>
    <input type="submit">
</form>
<?php
if (isset($_GET['sel'])) {
    echo $_GET['sel'];
}
?>
<br>
<a href="?par1=1">url</a>
<a href="?par1=2">url</a>
<a href="?par1=3">url</a>
<br>
<?php
if (isset($_GET['par1'])) {
    echo $_GET['par1'];
}
?>
<br>
<?php
if (isset($_GET['param'])) {
    echo $_GET['param'];
}
echo "<br>";
for ($i = 1; $i < 11; $i++) {
    echo "<a href=\"?param=$i\">link $i </a>";
}
?>
<br>
<br>
<?php
//$arr = ['a','b','c','d','e'];
//if (isset($_GET['ch'])){
//    echo $arr[$_GET['ch']];
//    echo "<br>";
//}
//?>
<!--<a href="?ch=0">url 0</a>-->
<!--<a href="?ch=1">url 1</a>-->
<!--<a href="?ch=2">url 2</a>-->
<!--<a href="?ch=3">url 3</a>-->
<!--<a href="?ch=4">url 4</a>-->

<?php
$arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];
if (isset($_GET['ch'])) {
    echo $arr[$_GET['ch']];
}
echo "<br>";
foreach ($arr as $key => $elem){
    echo "<a href=\"?ch=$key\">link $elem </a>";
}
?>
<br>