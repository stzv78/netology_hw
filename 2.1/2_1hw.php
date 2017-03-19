<?php
$data_json = file_get_contents ('data.json');
$array_data = json_decode ($data_json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1" bordercolor="rgba(222, 222, 222, 0.78)">
            <caption>Телефонный справочник</caption>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Адрес</th>
                <th>Номер телефона</th>
            </tr>
     <?php 
        foreach ($array_data as $id_data => $data) {
            echo '<tr>';
            foreach ($data as $id_name => $name) {
                echo '<td>'.$name.'</td>';
            };
            echo '</tr>';
        };
     ?>
        </table>
     </div>
</body>
</html>