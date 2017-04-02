<?php
    require_once ('db.php');
    require_once ('functions.php');
    if ( !empty($_SESSION['log_user']) )
    {
        redirect('u/kotyukov/auth1/index.php');
    }
    
    $data = $_POST;
    if( isset($data["go_login"]) )
    {
        $errors = [];
        $no_errors = [];
        if ( isset($data["login"]) )
        {
            foreach ( $login_array as $user )
            {
                if ( array_search($data["login"], $user) === 'login' )
                {
                    $no_errors [] = 1;
                    if ( !password_verify($data["password"], $user["password"]) )
                    {
                        $errors [] = 'Неправельно введён пароль!';
                    }
                }
            }
        }
        if ( empty($errors) and !empty($no_errors) )
        {
            $_SESSION['log_user'] = $data;
            redirect('u/kotyukov/auth1/index.php');
        } elseif ( empty($no_errors) )
        {
            $errors [] = 'Пользователя с таким логин не существует!';
        }
    }
?>

    <?php
    if (!empty($errors)) 
    {
        echo '<p style="color: red;">'.array_shift($errors).'</p>';
    }
    ?>    
    <form action="login.php" method="POST">
        <p>
            <lable id="login">Логин:</lable><br />
            <input id="login" type="text" name="login" value="<?= @$data["login"] ?>" placeholder="admin">
        </p>
        <p>
            <lable id="password">Пароль:</lable><br />
            <input id="password" type="password" name="password">
        </p>
        <p>
            <input type="submit" name="go_login" value="Войти">
        </p>
    </form>