<?php
$objDataBase = new classes\db\DataBase();

$data = $_POST;
$data['login'] = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$data['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$data['login'] = trim($data['login']);
$data['password'] = trim($data['password']);

if (isset($data["go_login"])) {
    $errors = [];
    if (!empty($data["login"]) && !empty($data["password"])) {
        $sqlLoginTest = "SELECT * FROM user WHERE login LIKE :login";
        $sqlLoginTestArr = ["login" => $data["login"]];
        $validationUser = $objDataBase->query($sqlLoginTest, $sqlLoginTestArr);
        $validationPass = password_verify($data["password"], $validationUser[0]["password"]);

        if (!empty($validationUser) && $validationPass) {
            $_SESSION['logUser'] = ['id' => (int)$validationUser[0]['id'], 'name' => $validationUser[0]['name']];
            unset($_GET['login']);
            header('Location: '.explode('?', $_SERVER['HTTP_REFERER'])[0]);
        } else {
            $errors [] = 'Пользователя с таким логин не существует или неправельно введён пароль!';
        }
    } elseif ($data["login"] === '') {
        $errors [] = 'Введите логин!';
    } elseif ($data["password"] === '') {
        $errors [] = 'Введите пароль!';
    }
}
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

<?php
if (!empty($_SESSION['regist'])) {
echo '<p style="color: green;">Регистрация прошла успешно!</p>';
}

if (!empty($errors)) {
    echo '<p style="color: red;">' . array_shift($errors) . '</p>';
}
?>
<form method="POST">
    <p>
        <lable id="login">Логин:</lable>
        <br/>
        <input id="login" type="text" name="login" value="<?= @$data["login"] ?>" placeholder="admin">
    </p>
    <p>
        <lable id="password">Пароль:</lable>
        <br/>
        <input id="password" type="password" name="password">
    </p>
    <p>
        <input type="submit" name="go_login" value="Войти">
    </p>
</form>

</body>
</html>