<?php
    $mysqli = new mysqli("localhost","admvicto_admin","project2016","admvicto_web");

    ini_set('display_errors', 1);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>