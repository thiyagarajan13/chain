<?php 
session_start();
 $user_check=$_SESSION['login_user'];
$host= "localhost";
$username= "root";
$database="nexenlyf";
$password= "";
 $conn= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');
 $ses_sql=mysqli_query($conn,"select username from admin where username='$user_check'");
 $row=mysqli_fetch_assoc($ses_sql);
 $login_session=$row['username'];
if(!isset($login_session)){
  mysqli_close($login_session);
  header('location:index.php');
 }

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
  $(function() {
  
  // Get the form fields and hidden div
  var checkbox = $("#trigger");
  var hidden = $("#hidden_fields");
  var populate = $("#populate");
  
  // Hide the fields.
  // Use JS to do this in case the user doesn't have JS 
  // enabled.
  hidden.hide();
  
  // Setup an event listener for when the state of the 
  // checkbox changes.
  checkbox.change(function() {
    // Check to see if the checkbox is checked.
    // If it is, show the fields and populate the input.
    // If not, hide the fields.
    if (checkbox.is(':checked')) {
      // Show the hidden fields.
      hidden.show();
      // Populate the input.
      populate.val("Dude, this input got populated!");
    } else {
      // Make sure that the hidden fields are indeed
      // hidden.
      hidden.hide();
      
      // You may also want to clear the value of the 
      // hidden fields here. Just in case somebody 
      // shows the fields, enters data to them and then 
      // unticks the checkbox.
      //
      // This would do the job:
      //
      // $("#hidden_field").val("");
    }
  });
});

</script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">NEXEN LYF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php"> HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">ADD USER</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="update.php">UPDATE USER</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout[<?php echo $login_session;  ?>]</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
