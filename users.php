<?php
    include './include/db_config.php';
    $users = [];
    $sql = "SELECT * from user";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($users ,$row);
        }
    }
    else{
        echo "No Data Found...";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>php | Auth</title>
</head>
<body>
    <table class="table col-md-8">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th>Email</th>
        <th scope="col">Class</th>
        <th scope="col">Department</th>
        </tr>
    </thead>
    <tbody>
        <?php
         foreach($users as $user){
             echo "<tr>";
             echo "<td>".$user['id']. "</td>";
             echo "<td>".$user['name']. "</td>";
             echo "<td>".$user['email']. "</td>";
             echo "<td>".$user['class']. "</td>";
             echo "<td>".$user['department']. "</td>";
             echo "</tr>";
            }
             ?>
        
    </tbody>
</table>

</body>
</html>
