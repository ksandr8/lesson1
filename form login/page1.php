<?php
if (empty($_GET['submit'])){
  unset($_SESSION['user']);
  session_destroy();
}
?>
<form action="" method="get">
    <input type="submit" name="logout" value="Logout">
</form>
