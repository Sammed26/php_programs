<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sammed";

// creating connection
$connect = mysqli_connect($servername, $username, $password, $database);
if(!$connect)
{
    die("failed to connect. " . mysqli_connect_error());
}

echo "connection successful<br>";


// writing SQL query 
$sql = "select * from studentinfo";

$query_result = mysqli_query($connect, $sql);
if($query_result)
{
    echo "query executed successfully<br>";

    $row_count_in_table = mysqli_num_rows($query_result);
    echo "row count = ". $row_count_in_table. "<br>";

    // displaying query
    $row = mysqli_fetch_assoc($query_result);
    while($row)
    {
        echo "RollNo. = ".$row['rollno']. " | Name = ". $row['name']. " | City = ". $row['city']. "<br>";
        $row = mysqli_fetch_assoc($query_result);
    }
}
else
{
    echo "we are facing some error while retriving records<br>";
}


mysqli_close($connect);

?>