<?php

function connection($databaseHost, $databaseUsername, $databasePassword, $databaseName) {
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    
    if (mysqli_connect_errno()){
        die("Database connection failed " . mysqli_connect_error());
    }  

    return $conn;
}    