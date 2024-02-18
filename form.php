<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>storing form data to database</title>
</head>
<body>
    <h1>This is fully functional form</h1>

    <div class="forms">
            <form action="/php_programs/form.php" method = 'POST'>

                <label for="rollno">RollNo = </label>
                <input type="number" name="rollno">

                <br><br>

                <label for="name">Name = </label>
                <input type="text" name="name">

                <br><br>

                <label for="city">City = </label>
                <input type="text" name="city">

                <br><br>

                <input type="submit">

                <br><br>

            </form>
    </div>


        <?php
            // creating connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "sammed";
            $conn = mysqli_connect($servername, $username, $password, $database);

            if(!$conn)
            {
                die("failed to connect! reason = " . mysqli_connect_error());
            }
            echo "<br>connection successful";


            
            
            // getting form data in variable
            if($_SERVER['REQUEST_METHOD'])
            {
                $Rollno = $_POST['rollno'];
                $Name = $_POST['name'];
                $City = $_POST['city'];
                
                // querying to database
                $sql = "INSERT INTO studentinfo VALUES('$Rollno', '$Name', '$City')";
                
                $insertion_result = mysqli_query($conn, $sql);
                if($insertion_result)
                {
                    echo "<br>insertion in database is successful";
                }
                else
                {
                    echo "data not inserted. reason = " . mysqli_error($conn);
                }


            }


            mysqli_close($conn);
        ?>

</body>
</html>