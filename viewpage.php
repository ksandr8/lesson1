<?php
session_start();
if (!isset($_SESSION['count_view'])) {
    $_SESSION['count_view'] = 0;
} else {
    $_SESSION['count_view'] = $_SESSION['count_view'] + 1;
}
include "lesson6.html";
include "user function.php";
?>
<html>
<h1>Ми переглянули сторінку: <?php echo $_SESSION['count_view'] ?></h1>
</html>