<?php

$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password);

if(!$connect)
{
    die("sorry! unable to connect<br>reason -> ". mysqli_connect_error());
}
// writing else has no impact because if connection is not there and whenever die function is executed then further program is terminated. writing or not writing else not matters

echo "congrats to me! this is the first time i connected any database";


?>