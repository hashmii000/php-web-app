<?php
// DB connection
include('../db_con.php');


// Form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $con->real_escape_string($_POST['name']);
    $email    = $con->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm-password'];

    // Confirm password check
    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit;
    }

    // Password hash
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert query
    $sql = "INSERT INTO add_user (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
