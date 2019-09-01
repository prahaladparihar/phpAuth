<?php
  $server_name = '127.0.0.1';
  $username = 'root';
  $password = '';
  $dbname = 'login';

  $conn = new mysqli($server_name, $username, $password, $dbname);

  if($conn->connect_error){
    die('Connection failed' . $conn->connect_error);
  }
  // echo "Connection Successful!";
?>
