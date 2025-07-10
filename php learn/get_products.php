<?php
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "dhrumil_mart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all products
$sql = "SELECT id, category_name, product_name, product_price FROM products";
$result = $conn->query($sql);

// Display results
if ($result->num_rows > 0) {
    echo "<h2>Product List:</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Category</th><th>Name</th><th>Price</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"]."</td>";
        echo "<td>" . $row["category_name"]. "</td>";
        echo "<td>" . $row["product_name"]. "</td>";
        echo "<td>$" . number_format($row["product_price"], 2) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No products found.";
}

$conn->close();
?>
