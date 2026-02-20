<?php
if (isset($_POST['submit'])) {
    include '../db_con.php';

    // Get form data

    $title = $_POST['title'];
    $details = $_POST['details'];

   
    $target_dir = "banner_uploads/";


    $unique_id = uniqid();
    $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $image_name = "banner_" . $unique_id . "." . $extension;
    $target_file = $target_dir . $image_name;

   
    if (getimagesize($_FILES["image"]["tmp_name"]) === false) {
        echo "File is not an image.";
        exit;
    }

  
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "Error uploading file.";
        exit;
    }

  
    $sql = "INSERT INTO add_banner (title, details, image_path) 
            VALUES ('$title', '$details', '$target_file')";

    if ($con->query($sql) === TRUE) {
        header('Location: banner_list.php');
        exit;
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
}
?>

