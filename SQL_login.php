<?php
$localhost = "127.0.0.1"; //hostname
$username = "root"; //admin name
$password = "";

$handler = mysqli_connect($localhost, $username, $password); //hostname, admin name, password
mysqli_query($handler, 'CREATE DATABASE ddq');

if (!mysqli_query($handler, 'CREATE DATABASE ddq')) {
    echo "Error createing database!";
} else {
    echo "Database create succesfully";
}
?>