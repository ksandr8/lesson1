<ul>
    <li><a href="/lesson6.html">Home</a></li>
</ul>
<?php
include("../../user function.php");
?>

<?php
if (empty($_REQUEST['city'])) {
    ?>
    <form action="" method="GET">
        <label for="city">Vashe misto</label>
        <input type="text" id="city" name="city">
        <input type="submit" value="send">
    </form>
    <?php
}
?>
<?php
if (!empty($_REQUEST['city'])) {
    $city = strip_tags($_REQUEST['city']);
    echo "vashe misto $city";
}
?>

<?php
if (empty($_REQUEST['age'])) {
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
if (!empty($_REQUEST['age'])) {
    $age = $_REQUEST['age'];
    echo "Ваш вік: $age";
}
?>
