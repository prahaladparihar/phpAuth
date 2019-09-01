<?php
  session_start();
  include './include/db_config.php';
  
  // $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "select * from user where email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if (password_verify($password, $row['password'])) {
     $_SESSION['u_id'] = $row['id'];
    
    header('location:http:/user_session.php');
    }
    else {
      // echo "Login failed";
      header('location:http:/index.php');
    }
  }
  else {
    // echo "Logggg";
    header('location:http:/index.php');
  }
 ?>
