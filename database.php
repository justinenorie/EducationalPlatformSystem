<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$conn = "";

try {
    // Connect to MySQL server
    $conn = new mysqli($db_server, $db_user, $db_pass);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected to MySQL server successfully";
} catch (mysqli_sql_exception $e) {
    echo "Not Connected! " . $e->getMessage();
} finally {
    if ($conn) {
        $conn->close();
    }
}
?>
