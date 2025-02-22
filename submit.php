<?php
// Database connection
$host = 'localhost';
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password
$dbname = 'form_db'; // The database name

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into the users table
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the form page after submission
header("Location: index.html");
exit;
?>
