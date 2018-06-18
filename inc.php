<?php
    $dbhost='localhost';
    $dbuser='root';
    $dbpass='Purenman_4824';
    $dbname='apistuff';
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

    $dbcon=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($conn===false){
        die('ERROR: mysql connect fail');
    }
    mysqli_set_charset($dbcon,'utf8mb4');