<?php


// making an connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("facing issues". mysqli_connect_error());
}


// sql query selecting data
$sql = "select * from notesdesc";
$query_result = mysqli_query($conn, $sql);

if(!$query_result)
{
    echo "we are facing some issues while fetching data<br>";
}
else
{
    // rows are displaying
    $rows = mysqli_fetch_assoc($query_result);
    $row_count = mysqli_num_rows($query_result);
    echo "we found $row_count rows<br>";

    while($rows != NULL)
    {
        echo "Sr no. = ".$rows['srno']. " || Title = ". $rows['title']. " || Description = ". $rows['description']. "<br>";
        $rows = mysqli_fetch_assoc($query_result);


        // js script tag to insert table information at respective place
        // <script language='javascript'>

        //     const srno = document.query_selector(".srno");
        //     srno.style.textContent = $rows['srno'];

        //     const title = document.query_selector(".title");
        //     title.style.textContent = $rows['title'];
            
        //     const desc = document.query_selector(".desc");
        //     desc.style.textContent = $rows['description'];

        // </script>
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital notes</title>
</head>
<body>
    <p class="srno"></p>
    <p class="title"></p>
    <p class="desc"></p>
</body>
</html>


