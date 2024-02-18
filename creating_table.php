<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sammed";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn)
{
    echo "connection successul with $database database";
}
else 
{
    die("sorry, connection failed. ". mysqli_connect_error());
}


// creating table
$sql = "CREATE TABLE studentinfo(rollno int PRIMARY KEY, name varchar(20), city varchar(20))";

$query_result = mysqli_query($conn, $sql);
if($query_result)
{
    echo "table created successfully";
}
else
{
    echo "table not created ->"; 
}



?>