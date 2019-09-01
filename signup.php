
<?php
    session_start();
    include './include/db_config.php';
    include './include/auth.php';

    if($user != null){
        header('location:http:/user_session.php');
    }

    if(isset($_POST['name'])){
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $class = $_POST['class'];
        $department = $_POST['department'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        if($password != $c_password){
            die('Password not  match!');
        }
        $hash_pss = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user(name,email,class, department, password) values ('$name', '$email', '$class', '$department', '$hash_pss')";
        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            header('location:http:/index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
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
  <style>
		body{
			background-color:#9895951f;
		}
		form{
			margin:0px auto;
			padding: auto;
		}
	</style>
</head>
<body>
	<form class = 'col-md-4' action='signup.php' method= 'post'>
		Name<input class = 'form-control' type="text" value = '<?= $name ?>'  name='name' id="name"><br>
		Email: <input class = 'form-control' type="email" value = '<?= $email ?>' name='email' id="email"> <br>
        Class:<select class="browser-default custom-select" name = 'class'>
            <option selected>Select your class</option>
            <option value="FE">FE</option>
            <option value="SE">SE</option>
            <option value="TE">TE</option>
            <option value="BE">BE</option>
        </select><br/><br>
        Department:<select class="browser-default custom-select" name = 'department'>
            <option selected>Select Department</option>
            <option value="CS">CS</option>
            <option value="IT">IT</option>
            <option value="EXTC">EXTC</option>
        </select><br/><br>
		password: <input class = 'form-control' type="password" name= 'password'  id="password"> <br>
        C_password: <input class = 'form-control' type="password" name='c_password'> <br>
		<button class="btn btn-success float-right" type="submit">Submit</button>
	</form>
</body>
</html>
