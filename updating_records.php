<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sammed";

// creating connection
$connect = mysqli_connect($servername, $username, $password, $database);
if(!$connect)
{
    die("failed to connect ". mysqli_connect_error());
}
echo "connection successful<br>";


// executing sql query to update
$rollno = 2;
$city = "delhi";
$sql = "update studentinfo set city = '$city' where rollno = $rollno";

$query_result = mysqli_query($connect, $sql);
if($query_result)
{
    echo "updation successful<br>";

    $sql_query_to_display_updated_record = "select * from studentinfo where rollno = $rollno";
    $updated_query_result = mysqli_query($connect, $sql_query_to_display_updated_record);

    if($updated_query_result)
    {
        echo "displaying updated record <br>";

        $row = mysqli_fetch_assoc($updated_query_result);
        echo "RollNo. = ".$row['rollno']. " || Name = ". $row['name']. " || City = ". $row['city']. "<br>";
    }
    else
    {
        echo "some issue....<br>";    
    }
}


mysqli_close($connect);

?>