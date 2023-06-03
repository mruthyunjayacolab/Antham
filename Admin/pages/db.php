<?php
$servername = "localhost";
$username = "srisadgu_Antham";
$password = "srisadgu_Antham";
$dbname = "srisadgu_Antham";

// Create a new MySQLi instance
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
else{
    // echo" Connection Seccess full";
}
?>
