<!DOCTYPE html>
<?php
session_start();
$error=" ";
if(isset($_POST['submit']))
{

  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error="username or passowrd is invalid";
  }
  else
  { 
    $username=$_POST['username'];
    $password=$_POST['password'];
    echo $username;
    $host= "localhost";
    $user= "root";
    $database="nexenlyf";
    $pass= "";
    $conn= mysqli_connect($host,$user,$pass,$database) or die('unable to connect to database server at this time');
    $username=stripslashes($username);
    $password=stripslashes($password);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);
    $query=mysqli_query($conn,"select * from admin where password='$password' and username='$username'");
    $rows=mysqli_num_rows($query);
    if($rows==1)
    {
      $_SESSION['login_user']=$username;
      header("location:admin.php");
    }
    else{
      $message="username adn password does not match!";
      echo "<script type='text/javascript'>alert('$message');</script>";

    }
    mysqli_close($conn);
  }
}
echo $error;
?>
<html>

<head>

 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Page Title</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
 <script src="main.js"></script>
 <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" >
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
 <script src="bootstrap4/js/bootstrap.min.js" ></script>
 <script type="text/javascript">
 $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});
 </script>
</head>
<body style="background-image:url(BACK.jpg);">
	<br><br><br><br><br>

 <div style="width: 600px" class="container">
   <div class="jumbotron jumbotron-fluid">
    <center>
     <form class="form-signin"  action="" method="POST" >
       <h2 class="form-signin-heading">Please sign in</h2>
       <label for="inputEmail" class="sr-only">Email address</label>
       <div class="col-sm-6">
         <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
       </div>
       <br>
       <label for="inputPassword" class="sr-only">Password</label>
       <div class="col-sm-6">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      </div><br>
      <div class="col-sm-4">
         <input type="submit" value="Login" name="submit"  class="btn btn-lg btn-primary btn-block" >
      </div>
    </form>
  </center>
 </div>
</div> <!-- /container -->





</body>
</html>

<?php

function displayerror()
{
  echo'
<div col-sm-4>
<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Error! </strong>
   Username and Password do not match!
</div>
</div>';
}
?>