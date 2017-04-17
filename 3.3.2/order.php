<?php
require_once 'app/session.php';
require_once 'app/autoload.php';
$objOrder = new \classes\order\Order($_SESSION);
if (isset($_GET['delId'])) {
    $objOrder->deleteProduct($_GET['delId']);
    header('Location:order.php');
}
session_unset();
$_SESSION = $objOrder->dataProduct;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="/u/kotyukov/3.3.2/css/style.css" rel="stylesheet">
    <title>Домашние задание 3.3</title>
</head>
<body>
<div class="form">
    <p>Общая сумма: <?= $objOrder->dataProduct['cartPrice'] ?></p>
    <?php $objOrder->printOrder() ?>
    <p><a href="index.php">Назад</a></p>
</div>
</body>
</html>
