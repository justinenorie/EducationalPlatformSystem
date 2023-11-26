<?php
include 'database.php';

$db_name = "userdata_db";
$conn = "";

try {
    // Connect to MySQL server
    $conn = new mysqli($db_server, $db_user, $db_pass);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create the database if it doesn't exist
    $create_db_query = "CREATE DATABASE IF NOT EXISTS $db_name";
    if ($conn->query($create_db_query) === TRUE) {
        echo "Database created or already exists";
    } else {
        die("Error creating database: " . $conn->error);
    }

    // Close the connection to reopen it with the selected database
    $conn->close();

    // Reconnect to MySQL server with the specified database
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the table exists
    $check_table_query = "SELECT 1 FROM users_info LIMIT 1";
    $check_table_result = $conn->query($check_table_query);

    if ($check_table_result === FALSE) {
        // Create the table if it doesn't exist
        $create_table_query = "CREATE TABLE users_info (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(50) NOT NULL,
            lastname VARCHAR(50) NOT NULL,
            username VARCHAR(50),
            emails VARCHAR(50),
            passwords VARCHAR(255),
            gender ENUM('Male', 'Female', 'Others'),
            birthday DATE,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($create_table_query) === TRUE) {
            echo "<br>Table created successfully";
        } else {
            die("Error creating table: " . $conn->error);
        }
    }
} catch (mysqli_sql_exception $e) {
    echo "Not Connected! " . $e->getMessage();
} finally {
    if ($conn) {
        $conn->close();
    }
}
?>
