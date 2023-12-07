<?php
$servername = "localhost";
$username = "educativo";
$password = "w8_L6*nHOVZz_Xbx";
$db_name = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
