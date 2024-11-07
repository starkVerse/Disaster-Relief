<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "disaster_management";
    $port = "3307";
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    // if ($conn->connect_error) {
    //     echo "Couldn't connect to server";
    // } else {
    //     echo "Connection Complete";
    // }
    
?>