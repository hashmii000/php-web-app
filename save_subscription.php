<?php
if (isset($_POST['email'])) {
    include('db_con.php');

    $email = trim($_POST['email']);
    $created_at = date('Y-m-d H:i:s');

    if (empty($email)) {
        echo 'error: email required';
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'error: invalid email';
        exit;
    }

    $check = $con->prepare("SELECT id FROM tbl_subscription WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();
    if($check->num_rows > 0){
        echo 'error: already subscribed';
        exit;
    }
    $check->close();

    // Insert
    $stmt = $con->prepare("INSERT INTO tbl_subscription (email, created_at) VALUES (?, ?)");
    if($stmt === false){
        echo 'error: '.$con->error;
        exit;
    }

    $stmt->bind_param("ss", $email, $created_at);
    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error: '.$stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
