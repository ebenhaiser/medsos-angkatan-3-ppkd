<?php

$host_connection     = "localhost";
$username_connection = "root";
$password_connection = "";
$database_connection = "angkatan3_medsos";

$connection = mysqli_connect($host_connection, $username_connection, $password_connection, $database_connection);

if (!$connection) {
    echo "Connection Failed!";
};