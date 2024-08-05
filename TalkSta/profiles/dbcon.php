<?php
    $server   = "server";
    $username = "username";
    $password = "password";
    $database = "dbname";

    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        die(mysqli_connect_error());
    }
    // else{
    //     echo 'success';
    // }
?>
