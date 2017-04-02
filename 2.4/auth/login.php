<?php
    require_once ('db.php');
    require_once ('functions.php');
    if ( !empty($_SESSION['log_user']) )
    {
        redirect('u/kotyukov/2.4/index.php');
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
            redirect('u/kotyukov/2.4/index.php');
        } elseif ( empty($no_errors) )
        {
            $errors [] = 'Пользователя с таким логин не существует!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="/u/kotyukov/2.4/css/style.css" rel="stylesheet">
    <title>Домашние задание 2.4</title>
</head>
<body>
<div class="form">

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

</div>
</body>
</html>