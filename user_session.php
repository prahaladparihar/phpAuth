<?php
    session_start();

    include './include/db_config.php';
    include './include/auth.php';
    if($user != null){
        // echo $user['name'];
        // echo $user['id'];
    }
    else{
        header('location:/index.php');
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
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="/">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="color: #e6e7ec">
        <!-- <a class="nav-link" style="color: #e6e7ec" href="#"> -->
        <?php echo "Hello, " . $user['name']; ?> 
        <!-- <span class="sr-only">(current)</span></a> -->
      </li>
      
    </ul>
    <a href="/logout.php">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </a>

  </div>
</nav>
    <form action="Post.php" method = 'post' class = 'col-md-6'>
    <div class="form-group">
      <label>Subject</label>
      <input type="text" name = 'subject' class="form-control" id="email">
    </div>
    <div class="form-group">
      <label >Message:</label>
      <input type="message" name = 'message' class="form-control" id="pwd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>
