<?php
    session_start();
    include './include/db_config.php';
    include './include/auth.php';

    $u_id = $user['id'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO post(id, subject, message) values($u_id, '$subject', '$message')";
    if($conn->query($sql) === true){
        echo "Message stored!!";
        header('location:http:/user_session.php');
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
