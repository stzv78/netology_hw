<?php

$number = $_GET['number'];
$variable_1 = 1;
$variable_2 = 1;
$variable_3 = 0;
$result = 0;

for ($u=0; $u<100; $u++){

    if ($variable_1 > $number){
        $result = 0;
        break;
    }
    elseif ($variable_1 == $number) {
        $result = 1;
        break;
    }
    $variable_3 = $variable_1;
    $variable_1 = $variable_1 + $variable_2;
    $variable_2 = $variable_3;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Домашние задание 1.2</title>
</head>
<body>
<div>
    <div id="two">
    <p>
        <?php 
            switch ($result) {
                 case 1:
                    echo 'Задуманное число является числом Фибоначчи'; 
                    break;
                 default: 
                    echo 'Задуманное число НЕ является числом Фибоначчи'; 
                    break;
            }
        ?>
    </p>
    <p>
        <?php
                switch($u) {
                    case 0: 
                        echo 'Было произведено ' .$u .' итераций;'; 
                        break;
                    case 1: 
                        echo 'Была произведена ' .$u .' итерация;'; 
                        break;
                    case 2: 
                        echo 'Было произведено ' .$u .' итерации;'; 
                        break;
                    case 3: 
                        echo 'Было произведено ' .$u .' итерации;'; 
                        break;
                    case 4: 
                        echo 'Было произведено ' .$u .' итерации;';
                        break;
                    default: 
                        echo 'Было произведено ' .$u .' итераций;'; 
                        break;
                }
        ?>
    </p>
    </div>
</div>

<!--                           Форма для пользователя                            -->

    <div class="form" id="form1">
        <form name="number" action="while.php" method="GET">
            <lable>Введите число: </lable><br><br>
            <input name="number"type="number"><br><br>
            <input type="submit" name="done" value="Проверить">
        </form>
    </div>
</body>
</html>

