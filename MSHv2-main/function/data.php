<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// SQL query to get data
$sql = "SELECT product_name, SUM(sales_amount) as total_sales FROM sales GROUP BY product_name";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    // Fetch data into an array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} 

// Close connection
$conn->close();

// Convert data to JSON format
echo json_encode($data);

?>

