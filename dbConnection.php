<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "deliziosa"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
