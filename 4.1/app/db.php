<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=global;charset=utf8", "kotyukov", "neto0988", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $exception) {
    exit($exception->getMessage());
}