<!--                Домашнее задание №1.2 Котюков Евгений                -->

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

<!--                                Скрипт                               -->

<?php

$number = $_GET['number'];      // число пользователя  

echo '<div id="one"><details><summary>Решение</summary><p id="exemple">';   //для спойлера с решением

for ($x=1, $y=1, $u=0; $x<$number+1; $z = $x, $x= $x + $y, $y = $z, $u++){  

// $x, $y, $z  1,2,3  переменные соответственно 
// $x<$number+1 - позволяет определить любое число от 0 до бесконечности
// "$x= $x + $y", "$y = $z" команды после итерации
// $u - позволяет узнать сколько итераций было совершенно

    if ($x > $number){
        $printed = 0;
        break;
    }
    elseif ($x == $number) {
        $printed = 1;
        break;
    }
    echo ($u+1) .') '.($x+$y) .' = ' .$x .' + ' .$y .'</br>'; // выводит решения в каждой итерации
}
echo '</p></details></div>';
?>

    <div id="two">
    <p>
        <?php 
            if ($printed == 0) {
               echo 'Задуманное число НЕ является числом Фибоначчи'; 
            }
            elseif ($printed == 1) {
                echo 'Задуманное число является числом Фибоначчи';
            }
        ?>
    </p>
    <p>
        <?php
            function no_iteration() {
                global $u;
                switch($u) {
                    case 0: 
                        echo 'Было произведенно ' .$u .' итераций;'; 
                        break;
                    case 1: 
                        echo 'Была произведенна ' .$u .' итерация;'; 
                        break;
                    case 2: 
                        echo 'Было произведенно ' .$u .' итерации;'; 
                        break;
                    case 3: 
                        echo 'Было произведенно ' .$u .' итерации;'; 
                        break;
                    case 4: 
                        echo 'Было произведенно ' .$u .' итерации;';
                        break;
                    default: 
                        echo 'Было произведенно ' .$u .' итераций;'; 
                        break;
                }
            }
            no_iteration()
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

