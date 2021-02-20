<?php
// connect to database
function connectToDatabase($host, $user_name, $password, $database_name)
{

    //establish connection to mysql database
    $conn = mysqli_connect($host, $user_name, $password, $database_name);
    //print_r($conn);

    //Check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
    return $conn;
}

$host = 'localhost';
$user_name = 'Avraham';
$password = 'ab1991';
$database_name = 'pizza_app';

$connectionToDatabase = connectToDatabase($host, $user_name, $password, $database_name);
