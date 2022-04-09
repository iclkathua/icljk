<?php

    //database configuration
    $host       = "localhost";
    $user       = "icljkcom_radioapp";
    $pass       = "myradio$$$@68";
    $database   = "icljkcom_radioapp";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

    $ENABLE_RTL_MODE = 'false';

?>