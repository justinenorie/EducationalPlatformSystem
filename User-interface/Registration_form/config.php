<?php
$servername = "localhost";
$username = "educativo";
$password = "r4)sO51sZi8TghPJ";
$db_name = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
