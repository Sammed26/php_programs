<?php
$errors = array(); // Array to store validation errors

if(isset($_POST['submit'])) {
    // Validate name
    if(empty($_POST['firstname'])) {
        $errors['firstname'] = "Name is required!";
    } else {
        $name = $_POST['firstname'];
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $errors['firstname'] = "Only letters and white space allowed for name!";
        }
    }

    // Validate address
    if(empty($_POST['address'])) {
        $errors['address'] = "Address is required!";
    } else {
        // You can add additional validation for address if needed
        $address = $_POST['address'];
    }

    // Validate phone number
    if(empty($_POST['phone'])) {
        $errors['phone'] = "Phone number is required!";
    } else {
        $phone = $_POST['phone'];
        // Check if phone number is valid (10 digits)
        if (!preg_match("/^[0-9]{10}$/",$phone)) {
            $errors['phone'] = "Invalid phone number!";
        }
    }

    // Validate Aadhar number
    if(empty($_POST['aadhar'])) {
        $errors['aadhar'] = "Aadhar number is required!";
    } else {
        $aadhar = $_POST['aadhar'];
        // Check if Aadhar number is valid (12 digits)
        if (!preg_match("/^[0-9]{12}$/",$aadhar)) {
            $errors['aadhar'] = "Invalid Aadhar number!";
        }
    }

    // If there are no errors, proceed with form submission or other actions
    if(empty($errors)) {
        echo "Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form method="POST" action="">
<div class="mb-3 mx-4">
<label for="exampleInputPassword1" class="form-label">Name</label>
<input type="text" class="form-control" id="exampleInputPassword1" name="firstname">
<?php if(isset($errors['firstname'])) { echo "<div class='error'>".$errors['firstname']."</div>"; } ?>
</div>
<div class="mb-3 mx-4">
<label for="exampleInputPassword1" class="form-label">Address</label>
<input type="text" class="form-control" id="exampleInputPassword1" name="address">
<?php if(isset($errors['address'])) { echo "<div class='error'>".$errors['address']."</div>"; } ?>
</div>
<div class="mb-3 mx-4">
<label for="exampleInputPassword1" class="form-label">Phone</label>
<input type="text" class="form-control" id="exampleInputPassword1" name="phone">
<?php if(isset($errors['phone'])) { echo "<div class='error'>".$errors['phone']."</div>"; } ?>
</div>
<div class="mb-3 mx-4">
<label for="exampleInputPassword1" class="form-label">Aadhar Number</label>
<input type="text" class="form-control" id="exampleInputPassword1" name="aadhar">
<?php if(isset($errors['aadhar'])) { echo "<div class='error'>".$errors['aadhar']."</div>"; } ?>
</div>
<button type="submit" class="btn btn-primary marg" name="submit">Submit</button>
</form>
</body>
</html>
