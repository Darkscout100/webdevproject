<?php
    DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','root');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','dbschedule');

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if (!$dbc) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
?>