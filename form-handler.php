<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    // The form has been submitted.
    
    // Retrieve form data.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    // Add further validation and processing logic here.

} else {
    // The form has not been submitted yet.
    // You can redirect back to the form or display a message.
}
?>
<?php
// Validate Name
if(empty($name)){
    $errorName = "Name is required.";
}

// Validate Email
if(empty($email)){
    $errorEmail = "Email is required.";
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorEmail = "Invalid email format.";
}
?>

<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<?php if(isset($errorName)) { echo "<span class='error'>$errorName</span>"; } ?>

<input type="text" id="name" name="name" required value="<?php if(isset($name)) { echo $name; } ?>">
<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    // The form has been submitted.
    
    // Retrieve form data.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Form validation
    $errorName = $errorEmail = "";

    if(empty($name)){
        $errorName = "Name is required.";
    }

    if(empty($email)){
        $errorEmail = "Email is required.";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorEmail = "Invalid email format.";
    }

    if(empty($errorName) && empty($errorEmail)){
        // Form data is valid.
        // Add further processing logic (e.g., sending emails, storing data).

        // Redirect or display a success message.
        header("Location: success.html");
        exit();
    }
}

?>
