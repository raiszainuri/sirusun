<?php

    //error_reporting(0);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $q1 = 'localhost';
    $q2 = 'root';
    $q3 = 'admin123';
    $q4 = 'db_sirusun';

    $link = mysqli_connect($q1, $q2, $q3, $q4);

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_error() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        //echo "Terhubung";
    }

?>