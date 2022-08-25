<?php
session_start();
$answer1 = $_POST['answer1'];
$_SESSION['answer1'] = $answer1;
?>
    <p>Питання №2</p>
    <p>2+5=?</p>
    <form action="task3.php" method="post">
        <input type="text" name="answer2">
        <br>
        <input type="submit">
    </form>
<?php
