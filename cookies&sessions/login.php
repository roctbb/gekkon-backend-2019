<?php
/**
 * Created by PhpStorm.
 * User: roctbb
 * Date: 2019-03-03
 * Time: 18:39
 */

session_start();

if (isset($_SESSION['auth']) and $_SESSION['auth'] == true) {
    if (isset($_GET['exit'])) {
        session_destroy();
        header("Location: /login.php");
    }
    ?>
    <h2>Это супер секретная админка</h2>
    <p>Тут супер-секретный текст</p>

    <p><a href="login.php?exit=true">Выход</a></p>

    <?php
} else {
    if (isset($_POST['login']) and isset($_POST['password']))
    {
        if ($_POST['login'] == "admin" and $_POST['password'] == "123456")
        {
            $_SESSION['auth'] = true;
            header("Location: /login.php");
        }
        else {
            echo "<strong>Неверный пароль</strong>";
        }
    }

    ?>
    <h2>Вход</h2>
    <form method="post">
        Логин: <input type="text" name="login"><br>
        Пароль: <input type="password" name="password"><br>
        <input type="submit" value="Вход">

    </form>
    <?php
}
?>