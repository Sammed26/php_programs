<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get and post methods in forms</title>
</head>
<body>
    <h1>GET and POST methods in forms</h1>

    <div class="forms">
        <form action="/php_programs/get_post_forms.php" method='post'>
            <label for="email">Enter E-mail</label>
            <input type="email" name="email">

            <br>

            <label for="password">Enter password</label>
            <input type="password" name="password">

            <input type="submit">

        </form>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'])
        {
            $EMAIL = $_POST['email'];
            $PASS = $_POST['password'];

            echo "<br>email = $EMAIL <br>Password = $PASS";

            // we are later passing this data to database and implement login signup system or any other user input related fields

        }

    ?>

</body>
</html>
