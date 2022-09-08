<?php
session_start();
include "auth.php";
include "database.php";
if (isset($_POST['username'], $_POST['pass'])) {
    $authUser = login($_POST['username'], $_POST['pass']);
}
if (isset($_POST['logout'])) {
    logout();
}
if (isset($_SESSION['auth_user']) && $_SESSION['auth_user']['role'] === 'user') {
    $articles = getAllArticles();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php if (!isset($_SESSION['auth_user'])) { ?>
    <form class="modal-content animate" action="" method="post">
        <div class="container">
            <input type="text" placeholder="Введіть логін" name="username" required>
            <br>
            <input type="password" placeholder="Введіть пароль" name="pass" required>
            <br>
            <button type="submit">Login</button>
        </div>
    </form>
<?php } else { ?>
    <h1>Привіт, <?php echo $_SESSION['auth_user']['username'] ?></h1>
    <hr>
    <article class="all-browsers">
        <h1>Articles</h1>
        <?php foreach ($articles ?? [] as $article) { ?>
            <article class="all-browsers">
                <h2> <?php echo $article['name'] ?> </h2>
                <h2> <?php echo $article['date'] ?> </h2>
                <p> <?php echo $article['text'] ?> </p>
                <article class="browser">
                    <h2>Comments</h2>
                    <?php foreach ($article['comments'] as $comment) { ?>
                        <article class="browser">
                            <h2> <?php echo $comment['username'] ?> </h2>
                            <h3> <?php echo $comment['text'] ?> </h3>
                        </article>
                    <?php } ?>
                </article>
            </article>
        <?php } ?>
    </article>
    <hr>
    <form class="modal-content animate" action="" method="post">
        <div class="container">
            <button name="logout" type="submit">Logout</button>
        </div>
    </form>
<?php } ?>

</html>
