<?php
session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];
if (($answer1 == 4) && ($answer2 == 7) && ($answer3 == 8)) {
    echo "Все правильно";
} else {
    echo "Допущено помилку";
}
?>
<ul>
    <li><a href="/homework/lesson6.html">Home</a></li>
</ul>


