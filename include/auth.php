<?php
    include 'db_config.php';
    $user = null;

    if(isset($_SESSION['u_id'])){
        $u_id = $_SESSION['u_id'];
        
        $sql = "select * from user where id =  '$u_id'" ;
        
        $result1 = $conn->query($sql);
        
        if ($result1->num_rows > 0) {
        $row = $result1->fetch_assoc();
        
        $user = $row;
    }
    }
    
?>
