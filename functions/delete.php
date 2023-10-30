<?php
    include_once("../ bdConnection/mysqlconfig_connection.php");
    $id = $_GET['id'];
    mysqli_query($dbc,"DELETE FROM tblsubjects WHERE Subject_id='id'");
    header("Location:../index.php");
?>