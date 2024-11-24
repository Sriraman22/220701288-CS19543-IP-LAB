<?php
// Database connection
$servername = "localhost"; // or your database host
$username = "root";        // your database username
$password = "Sri@22Ram@11";            // your database password
$dbname = "EmployeeDB"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];

    // Prepare SQL statement to insert data into the employee table
    $sql = "INSERT INTO EMPDETAILS (ename, desig, dept, doj, salary)
            VALUES (?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssd", $ename, $desig, $dept, $doj, $salary); // "ssssd" -> s = string, d = double

    // Execute the statement
    if ($stmt->execute()) {
        echo "New employee record created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
