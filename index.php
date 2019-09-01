<?php
	session_start();
    include './include/db_config.php';
    include './include/auth.php';
    if($user != null){
        header('location:/user_session.php');
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
		<br><br>
	<form class = 'col-md-4' action='login.php' method= 'post'>
		<!-- Name<input class = 'form-control' type="text" name='name' id="name"><br> -->
		Email: <input class = 'form-control' type="email" name='email' id="email"> <br>
		password: <input class = 'form-control' type="password" name= 'password'  id="password"> <br>
		<button class="btn btn-primary float-right" type="submit">Submit</button>
	</form>
</body>
</html>
