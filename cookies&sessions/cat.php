<?php
/**
 * Created by PhpStorm.
 * User: roctbb
 * Date: 2019-03-03
 * Time: 18:21
 */
if (isset($_GET['cat'])) {
    setcookie("favorite_cat", $_GET['cat'], time() + 1000);
    $_COOKIE['favorite_cat'] = $_GET['cat'];
}
if (!isset($_COOKIE['favorite_cat'])) {
    ?>
    <form method="GET">
        <input type="text" name="cat"/>
        <input type="submit" value="Сохранить">
    </form>

    <?php
} else {
    echo("Ваша любимая порода котов - " . $_COOKIE["favorite_cat"]);
}

?>