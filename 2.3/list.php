<?php
$directory = './json';
$list_file = scandir($directory, 1);
$amount_of_elements = count($list_file);
$id_file = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="/u/kotyukov/2.2/css/style.css" rel="stylesheet">
    <title>Домашние задание 2.2</title>
</head>
<body>
<div class="form">

    <?php
        foreach ($list_file as $id_data => $data) {
            if ($id_data < $amount_of_elements - 2) {
                $array_form_json = file_get_contents('./json/'.$data);
                $array_form = json_decode($array_form_json, true);
                echo '<p>' .$id_file .') ' .$array_form['name'] .'</p>';
                ++$id_file;
            };
        };
    ?>

    <form enctype="multipart/form-data" action="test.php" method="GET">
        <lable for="number">Введите номер теста:</lable>
        <input id="number" name="form" type="number" placeholder="">
        <input type="submit" value="Открыть">
    </form>
    <p><a href="admin.php">Вернутся к главной странице</a></p>

</div>
</body>
</html>