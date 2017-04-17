<?php
    require_once ('auth/functions.php');
?>

    <?php if ( !empty($_SESSION['log_user']) ): ?>
    <h1>Добро пожаловать <?= $_SESSION['log_user']['login'] ?></h1>
    <?php endif ?>

    <?php if ( !empty($_SESSION['visitor']) ): ?>
    <h1>Добро пожаловать <?= $_SESSION['visitor']['login'] ?></h1>
    <?php endif ?>

    <?php if ( empty($_SESSION['log_user']) && empty($_SESSION['visitor']) ): ?>
    <a href="auth/login.php">Авторизоваться</a><br />
    <a href="auth/signup.php">Регистрация</a><br />
    <a href="auth/visitor.php">Войти как гость</a>
    <?php endif ?>

    <?php if ( !empty($_SESSION['log_user']) ): ?>
    <a href="auth/logout.php">Выйти</a><br />
    <?php endif ?>

    <?php if ( !empty($_SESSION['visitor']) ): ?>
    <a href="auth/login.php">Авторизоваться</a><br />
    <a href="auth/signup.php">Регистрация</a><br />
    <a href="auth/logout.php">Выйти</a><br />
    <?php endif ?>
<?php
    $a = true or false;
    $s = false or true;
    $d = false or false;
    $f = true or true;
    $g = true || false;
    $h = false || true;
    $j = false || false;
    $k = true || true;
    echo '<br />';
    var_dump($a);
    echo '<br />';
    var_dump($s);
    echo '<br />';
    var_dump($d);
    echo '<br />';
    var_dump($f);
    echo '<br />';
    var_dump($g);
    echo '<br />';
    var_dump($h);
    echo '<br />';
    var_dump($j);
    echo '<br />';
    var_dump($k);
    echo '<br />';
