<?php
    session_start();

    function redirect($location) 
    {
    $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/$location");
    die;
    }

    function logout() 
    {
    session_destroy();
    $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/u/kotyukov/auth1/index.php");
    die;
    }

    function refresh($location)
    {
        $host  = $_SERVER['HTTP_HOST'];
        header("Refresh:2;http://$host/$location");
    }