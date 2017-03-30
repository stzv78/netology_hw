<?php
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
if ($_FILES["file"]["error"] === 0){
    header("Refresh:3;http://$host$uri/list.php");
};

$exemple_file = "./json/0f1e125cac427577774b3b94aecf5e39.json";
$array_exemple = file_get_contents($exemple_file);
$exeple = json_decode($array_exemple , true);

function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="/u/kotyukov/2.3/css/style.css" rel="stylesheet">
    <title>Домашние задание 2.3</title>
</head>
<body>
<div class="form" id="admin">
    <div class="exemple">
        <p>Пример массива с тестом:</p>
        <?= vardump($exeple); ?>
    </div>
    <div class="admin">
    <form enctype="multipart/form-data" action="admin.php" method="POST">
        <lable for="file">Отправить готовый тест в JSON формате</lable><br />
        <input id="file" name="file" type="file" accept=".json"><br />
        <input type="submit" value="Отправить файл">
    </form>

    <?php
        if (isset($_FILES['file']['tmp_name']) === true) {
            $user_fail = file_get_contents($_FILES['file']['tmp_name']);
            $array_json_user = json_decode($user_fail, true);
                        
            if (file_exists("./json/".md5($array_json_user["name"]).".json")) {
                echo 'Тест с таким именем уже есть! Придумаёте другое имя.';
                die;
                };

            $file = "./json/".md5($array_json_user["name"]).".json";
            if (!file_exists($file)) {
                $fp = fopen($file, "w");
                fwrite($fp, json_encode($array_json_user, JSON_UNESCAPED_UNICODE));
                fclose($fp);
                echo 'Файл успешно отправлен!';
            };
        };
    ?>

    <p><a href="user_form.php">Создать тест</a></p>
    <p><a href="list.php">Перейти к списку тестов</a></p>
    </div>
</div>
</body>
</html>