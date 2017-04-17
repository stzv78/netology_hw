<?php
    require_once ('db.php');
    require_once ('functions.php');
    if ( !empty($_SESSION['log_user']) )
    {
        redirect('u/kotyukov/auth1/index.php');
    }
    $data = $_POST;
    if( isset($data["go_visitor"]) )
    {
        $_SESSION['visitor'] = $data;
        redirect('u/kotyukov/auth1/index.php');
    }
?>
    <form action="visitor.php" method="POST">
        <p>
            <lable id="login">Введите ваше имя:</lable><br />
            <input id="login" type="text" name="login" placeholder="Евгений">
        </p>
        <p>
            <input type="submit" name="go_visitor" value="Войти">
        </p>
    </form>