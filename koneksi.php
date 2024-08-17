<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tsa_web";

//Create connection
$connect = new mysqli ($servername, $username, $password, $database);

//Check Connection
// if ($connect->connect_error) {
//     die("Connection failed: " . $connect->connect_error);
// }
// echo "Connected Succesfully";
?>