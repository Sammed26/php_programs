<?php

$servername = "localhost";
$username = "root";
$password = ""; // Set your database password here
$database = "sammed";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";



// inserting data
$rollno = 2;
$name = "sam";
$city = "ichalkaranji";

$sql = "INSERT INTO studentinfo VALUES('$rollno', '$name', '$city')";

$insertion_result = mysqli_query($conn, $sql);
if($insertion_result)
{
    echo "data inserted successfully";
}
else
{
    echo "failed to insert! reason = " . mysqli_error($conn);
}



// Close connection
mysqli_close($conn);

?>
