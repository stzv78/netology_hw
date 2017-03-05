<!--                Домашнее задание №1.1 Котюков Евгений                -->

<?php
    $head_name = 'Евгения';                             //имя для заголовка
    $form_name = 'Евгений';                             //имя для формы
    $age = 20;                                          //возраст
    $email = 'jilbiljeka@yandex.ru';                    //электронная почта
    $city = 'Новоуральск';                              //город
    $about_me = 'Студент университета "Нетология"';     //о себе
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://university.netology.ru/u/kotyukov/me/style.css">
    <title>Домашнее задание №1.1</title>
</head>
<body>
    <h1>Страница пользователя <?= $head_name?></h1>
    <div>
        <p>Имя: <?= $form_name?>
        </br>Возраст: <?= $age?> лет
        </br>Электронная почта: <?= $email?>
        </br>Город: <?= $city?>
        </br>О себе: <?= $about_me?></p>
    </div>
</body>
</html>