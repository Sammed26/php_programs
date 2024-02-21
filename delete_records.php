<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sammed";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "connection successful<br>";


$sql = "delete from studentinfo where rollno = 27";
$query_result = mysqli_query($conn, $sql);
if($query_result)
{
    echo "rows deleted successfully <br>";
    $affected_rows = mysqli_affected_rows($conn);
    echo "total affected rows = $affected_rows<br>";
}
else
{
    echo "some error occurred". mysqli_error($conn);

}


mysqli_close($conn);

?>