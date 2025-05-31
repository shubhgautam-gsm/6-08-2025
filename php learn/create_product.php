<?php
$servername = "localhost";
$username = "root";  // Change this
$password = "";  // Change this
$dbname = "dhrumil_mart";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Select the database
$conn->select_db($dbname);

// Get data from URL
$Category = $_GET['category_name'];
$Name = $_GET['product_name'];
$Price = $_GET['product_price'];

// Insert data into table
$insertSql = "INSERT INTO products (category_name, product_name, product_price)
VALUES ('$Category', '$Name', '$Price')";

if ($conn->query($insertSql) === TRUE) {
    echo "New product added successfully";
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
}

$conn->close();
?>
