<?php
if (isset($_POST['submit'])) {
    include '../db_con.php';

    $banner_id = $_POST['banner_id'];
  
    $title = $_POST['title'];
    $details = $_POST['details'];

 
    $sql = "UPDATE add_banner SET title='$title', details='$details'";

   
    if (!empty($_FILES["image"]["tmp_name"])) {
        $target_dir = "banner_uploads/";

      
        $unique_id = uniqid();
        $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $image_name = "banner_" . $unique_id . "." . $extension;
        $target_file = $target_dir . $image_name;

       
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql .= ", image_path='$target_file'";
        } else {
            echo "Error uploading new image.";
            exit;
        }
    }

    $sql .= " WHERE id='$banner_id'";

    if ($con->query($sql) === TRUE) {
        header('Location: banner_list.php');
        exit;
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
}
?>

