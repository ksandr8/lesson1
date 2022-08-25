<?php
session_start();
$answer2 = $_POST['answer2'];
$_SESSION['answer2'] = $answer2;
?>
    <p>Питання №3</p>
    <p>6+2=?</p>
    <form action="result.php" method="post">
        <input type="text" name="answer3">
        <br>
        <input type="submit">
    </form>
<?php