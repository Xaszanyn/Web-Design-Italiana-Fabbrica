<?php
$servername = "localhost";  // srvc139.turhost.com
$database = "italiana_newFabbricaDB";
$username = "italiana_PizzaMa";
$password = "1zO=knV?";

// Create connection
$konn = mysqli_connect($servername, $username, $password, $database);  //, $database
mysqli_query($konn,"SET NAMES 'utf8'");
mysqli_query($konn,"SET CHARACTER SET utf8_general_ci");

// Check connection
if (!$konn) {
    die("Connection failed: " . $konn->connect_error);
} 
echo "Connected successfully";
?>