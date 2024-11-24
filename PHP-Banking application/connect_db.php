<?php
$servername = "localhost";
$username = "root"; // default MySQL username
$password = "Sri@22Ram@11"; // default MySQL password
$dbname = "banking_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
