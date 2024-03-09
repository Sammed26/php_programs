

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

        
?>
    





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Digital notes</title>
</head>
<body>
            
<div class="container">


    <h1>
        Add note to notes app
    </h1>

    <div class="add-record">

        <form action/php_programs/notesapp/index.php" method="POST">

            <label for="notetitle">Note title</label>
            <input type="text" name="notetitle" id="n-title">

            <br><br>

            <label for="desc">Note description</label>
            <input type="text" name="notedesc" id="n-desc">

            <br><br>

            <input type="submit" value="Add Note">

            <br><br>

            
            <?php
            // getting form data in variable
            $desc = "";
            $title = "";
            
            if($_SERVER['REQUEST_METHOD'])
            {

                if (isset($_POST['notetitle'])) {
                    $title = $_POST['notetitle'];
                }
                if (isset($_POST['notedesc'])) {
                    $desc = $_POST['notedesc'];
                }
                
                if($title != "" && $desc != "")
                {
                    // querying to database
                    $sql = "INSERT INTO notesdesc(title, description) VALUES('$title', '$desc')";
                    
                    $insertion_result = mysqli_query($conn, $sql);
                    if($insertion_result)
                    {
                        echo "<br>insertion in database is successful";
                    }
                    else
                    {
                        echo "data not inserted. reason = " . mysqli_error($conn);
                    }
                    
                    echo "<script>window.location = 'index.php';</script>";
                    exit(); // Make sure to terminate the script after redirection
                }
                
            }
            ?>
        </form>

    </div>



    <div class="records-display-section">
        <div class="info-just-before-table">
            <div>
                <p class="show-n-records-para">
                    show <input type="number"> records
                </p>
            </div>

            <div class="search-section">
                <button class="search-btn">Search</button>
                <input type="text" name="search" class="search-input-box" placeholder="enter title to search for">
            </div>
        </div>

        
        <div class="records-table-div">

            <table class="records-table">
                <thead>
                    <tr>
                        <th class="srno">
                            Sr No
                        </th>
                        <th class= "title">
                            Title
                        </th>
                        <th class= "desc">
                            Description
                        </th>
                        <th class= "action">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $sql = "SELECT * FROM `notesdesc`";
                        $result = mysqli_query($conn, $sql);
                        $sno = 0;
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $sno = $sno + 1;
                            echo "<tr>
                                    <th scope='row'>". $sno . "</th>
                                    <td>". $row['title'] . "</td>
                                    <td>". $row['description'] . "</td>
                                    <td> <button id=e".$sno.">Edit</button> <button id=d".$sno.">Delete</button>  </td>
                                </tr>";
                        }

                    ?>

                </tbody>
            </table>

        </div>


    </div>


</div>




<!-- this i can't do because mixing php and javascript is not possible so make use of AJAX  -->

<script>

    console.log("hi how are you");


    // ==================== search section styling ============================

    const search_btn = document.querySelector(".search-btn");
    const search_input_box = document.querySelector(".search-input-box");
    // console.log(search_btn);
    search_btn.addEventListener("click", ()=>{
        // console.log(search_input_box.value);
        
        if(search_input_box.value == "")
        {
            console.log("nothing is entered");
        }
        else
        {
            $sql = "SELECT * FROM `notesdesc` where ";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $sno = $sno + 1;
                        echo "<tr>
                                <th scope='row'>". $sno . "</th>
                                <td>". $row['title'] . "</td>
                                <td>". $row['description'] . "</td>
                                <td> <button id=e".$sno.">Edit</button> <button id=d".$sno.">Delete</button>  </td>
                            </tr>";
                    }
            console.log(search_input_box.value);
        }
    })

</script>



</body>
</html>




