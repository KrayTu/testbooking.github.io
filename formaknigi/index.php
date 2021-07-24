<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Ваш логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Ваш пароль">
    <input type="submit" name="submit" value="Войти">
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg"> '  . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
</form>

</body>
</html>