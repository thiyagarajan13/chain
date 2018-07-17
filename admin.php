<!DOCTYPE html>
<?php include 'navbar.php';?>
<html>
<head>
   <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}


}
</style>
</head>
<body>
<!- DFCSDFSF->
<div class="bg-light"> 
  <?php 
  include ('db.php'); 
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user_details";
$sql2="SELECT count(username) FROM admin";
$result = $conn->query($sql);
$result1= $conn->query($sql2);

  if ($result->num_rows > 0 && $result1->num_rows > 0 ) {
    while ($row= $result->fetch_assoc() && $row2 = $result1->fetch_assoc()) {
    echo "<div style='width:200px; height:100px;'> <table id='customers' border='1px' cellpadding='5px'><tr><th>USERS:".$result->num_rows."</th><th>ADMINs:".$row2["count(username)"]."</th></tr></table></div>";
} }
else {
    echo "0 results";
}
?>
<div class="container">
<form class="form-inline" action="" method="POST">
<div class="form-group row">
   <label for="inputPassword2" class="col-sm-4 col-form-label">Enter use ID</label>
   <div class="col-4">
    <input type="text" class="form-control" name="idno" id="inputPassword2" placeholder="user ID">
  </div>
</div>
<div class="col-4">
  <input type="submit" name="show" class="btn btn-primary mb-2">
</div>

</form>
</div>
<hr>
</div>

<?php


if (isset($_POST['show'])) {
     displayname();
}


 function displayname()
 {include ('db.php'); 
$conn = new mysqli($host, $username, $password, $database);
$id=$_POST['idno'];
$sql = "SELECT * FROM user_details where nl_id='$id'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "<center><div style='width:400px'><h3>USER</h3><table id='customers' border='1px' cellpadding='5px'><tr><td>name</td><td>".$row["name"]."</td></tr><tr><td>lastname</td><td>".$row["lastname"]."</td></tr><tr><td>nl_id</td><td>".$row["nl_id"]."</td></tr><tr><td>password</td><td>".$row["password"]."</td></tr><tr><td>address</td><td>".$row["address"]."</td></tr><tr><td>city</td><td>".$row["city"]."</td></tr><tr><td>state</td><td>".$row["state"]."</td></tr><tr><td>pincode</td><td>".$row["pincode"]."</td></tr><tr><td>contactno</td><td>".$row["contactno"]."</td></tr><tr><td>gender</td><td>".$row["gender"]."</td></tr><tr><td>dob</td><td>".$row["dob"]."</td></tr><tr><td>ddno</td><td>".$row["ddno"]."</td></tr><tr><td>bankname</td><td>".$row["bankname"]."</td></tr><tr><td>branch</td><td>".$row["branch"]."</td></tr><tr><td>pay</td><td>".$row["pay"]."</td></tr><tr><td>senior_name</td><td>".$row["senior_name"]."</td></tr><tr><td>senior</td><td>".$row["senior"]."</td></tr></table></div></center>";
    }
} else {
    echo "0 results";
}
 }
$conn->close();
?>


<!-- Footer -->
<footer  class="page-footer font-small blue">

  <!-- Copyright -->
  <div style="margin-top:400px; clear: both" class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="#"> NEXEN LYF</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>