<ul>
    <li><a href="/homework/lesson6.html">Home</a></li>
</ul>
<?php
//include("../../user function.php");
?>

<?php
if (!isset($_REQUEST['city'])) {
    ?>
    <form action="" method="GET">
        <label for="city">Ваше місто</label>
        <input type="text" id="city" name="city">
        <input type="submit" value="send">
    </form>
    <?php
}
?>
<?php
if (isset($_REQUEST['city'])) {
    $city = strip_tags($_REQUEST['city']);
    echo "vashe misto $city";
}
?>

<?php
if (!isset($_REQUEST['age'])) {
    ?>
    <form action="" method="GET">
        <label for="age">Ваш вік</label>
        <input type="number" id="age" name="age">
        <input type="submit" value="send">
    </form>
    <?php
}
?>
<?php
if (isset($_REQUEST['age'])) {
    $age = $_REQUEST['age'];
    echo "Ваш вік: $age";
}
?>
