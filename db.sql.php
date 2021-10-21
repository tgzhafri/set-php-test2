<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "day9";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $getdb = mysqli_select_db($conn, "training");

    //check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
?>