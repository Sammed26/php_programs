<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "connection successful";

// Create a database
$sql = "CREATE DATABASE sammed";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>