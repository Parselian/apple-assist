<?php

    require_once(__DIR__ . '/db-cfg.php');

    $get_prices_data = mysqli_query($connect, 'SELECT * FROM devices')
        or die('Get prices data failed! ' . mysqli_error($connect));

    foreach ( as $get_prices_data => $item) {
        print_r(mysqli_fetch_row($get_prices_data));
    }