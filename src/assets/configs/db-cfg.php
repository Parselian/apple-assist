<?php

    $host = 'localhost';
    $username = 'root';
    $pwd = '';
    $db = 'apple-assist';

    $connect = mysqli_connect($host, $username, $pwd, $db)
        or die('MySQL connect failed! ' . mysqli_error($connect));

$connect->set_charset('utf8');