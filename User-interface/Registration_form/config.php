<?php
$servername = "localhost";
$username = "educativo";
$password = "2L!bMiVmF7B57L9)";
$db_name = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
