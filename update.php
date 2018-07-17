<!DOCTYPE html>
<?php include 'navbar.php';?>


<div class="bg-light"> 
  <BR><BR><BR></BR>

  <div class="container">
    <form class="form-inline" action="" method="POST">
      <div class="form-group row">
       <label for="inputPassword2" class="col-sm-4 col-form-label">Enter use ID</label>
       <div class="col-4">
        <input type="text" name="idno" class="form-control" id="inputPassword2" placeholder="user ID">
      </div>
    </div>
    <div class="col-4">
      <button type="submit" name="submit" class="btn btn-primary mb-2">SEARCH</button>
    </div>

  </form>
</div>
<hr>
</div>
</div>

<?php 

if(isset($_POST['submit']))
  {

include ('db.php'); 
$conn = new mysqli($host, $username, $password, $database);
$id=$_POST['idno'];
$sql = "SELECT * FROM user_details where nl_id='$id'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

   // echo "<center><div style='width:400px'><h3>USER</h3><table id='customers' border='1px' cellpadding='5px'><tr><td>name</td><td>".$row["name"]."</td></tr><tr><td>lastname</td><td>".$row["lastname"]."</td></tr><tr><td>nl_id</td><td>".$row["nl_id"]."</td></tr><tr><td>password</td><td>".$row["password"]."</td></tr><tr><td>address</td><td>".$row["address"]."</td></tr><tr><td>city</td><td>".$row["city"]."</td></tr><tr><td>state</td><td>".$row["state"]."</td></tr><tr><td>pincode</td><td>".$row["pincode"]."</td></tr><tr><td>contactno</td><td>".$row["contactno"]."</td></tr><tr><td>gender</td><td>".$row["gender"]."</td></tr><tr><td>dob</td><td>".$row["dob"]."</td></tr><tr><td>ddno</td><td>".$row["ddno"]."</td></tr><tr><td>bankname</td><td>".$row["bankname"]."</td></tr><tr><td>branch</td><td>".$row["branch"]."</td></tr><tr><td>pay</td><td>".$row["pay"]."</td></tr><tr><td>senior_name</td><td>".$row["senior_name"]."</td></tr><tr><td>senior</td><td>".$row["senior"]."</td></tr></table></div></center>";
    

    echo '<div class="container">

    <form method="POST" action="">
      <div class="form-group row">
        <label for="inputName1" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="name" value="'.$row["name"].'" id="inputName1" placeholder="First Name">
        </div>

        <div class="col-sm-3">
          <input type="text" class="form-control"  name="lastname" id="inputName2" value="'.$row["lastname"].'" placeholder="Last Name">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputSLMID3" class="col-sm-2 col-form-label">SLMID</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="nl_id" id="inputSLMID3" value="'.$row["nl_id"].'" placeholder="SLMID">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputlogincode3" class="col-sm-2 col-form-label">logincode</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="password" id="inputlogincode3" value="'.$row["password"].'" placeholder="password">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
        <div class="col-4">
          <input type="text" class="form-control"  name="address" id="inputAddress3" value="'.$row["address"].'" placeholder="Address">
        </div>
        <div class="col-3">
          <input type="text" class="form-control"  name="city" id="inputAddress3" value="'.$row["city"].'" placeholder="City">
        </div>
        <div class="col">
          <input type="text" class="form-control"  name="state" id="inputAddress3" value="'.$row["state"].'" placeholder="State">
        </div>
        <div class="col">
          <input type="text" class="form-control"  name="pincode" id="inputAddress3" value="'.$row["pincode"].'" placeholder="Zip">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputContactno3" class="col-sm-2 col-form-label">Contact No.</label>
        <div class="col-sm-3">
          <input type="number" class="form-control"  name="contactno" id="inputContactno3" value="'.$row["contactno"].'" placeholder="Contact number">
        </div>
      </div>

      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gridgender1" value="male" checked>
              <label class="form-check-label" for="gridgender1">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gridgender2" value="female">
              <label class="form-check-label" for="gridgender2">
                Female
              </label>
            </div>

          </div>
        </div>
      </fieldset>

      <div class="form-group row">
        <label for="inputdob3" class="col-sm-2 col-form-label">Date of Birth</label>
        <div class="col-sm-3">
          <input type="date"  name="dob" class="form-control" value="'.$row["dob"].'" id="inputdob3">
        </div>
      </div>
      <hr>
      <h4>Payment Details</h4><hr><br>

      <div class="form-group row">
        <label for="inputDDNO" class="col-sm-2 col-form-label">DD NO.</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="ddno" id="inputDDNO" value="'.$row["ddno"].'" placeholder="DD number">
        </div>
                <label for="inputbankname" class="col-sm-2 col-form-label">Bank Name</label>
        <div class="col-sm-3">
          <input type="text" class="form-control"  name="bankname" id="inputbankname" value="'.$row["bankname"].'" placeholder="Bank name">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputbranch" class="col-sm-2 col-form-label">Branch</label>
        <div class="col-sm-4">
          <input type="text" class="form-control"  name="branch" id="inputbranch" value="'.$row["branch"].'" placeholder="Branch name">
        </div>
                <label for="inputamount" class="col-sm-2 col-form-label">Amount rs.</label>
        <div class="col-sm-3">
          <input type="number"  name="pay" class="form-control" value="'.$row["pay"].'" id="inputamount">
        </div>
      </div>

            <div class="form-group row">
        <div class="col-sm-2">User has a sponser?</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="trigger" name="question">
            <label class="form-check-label" for="trigger">
              yes
            </label>
          </div>
        </div>
      </div>


      
      <div class="form-group row">
        <label for="inputsponser" class="col-sm-2 col-form-label">Sponser Name</label>
        <div class="col-sm-4">
          <input type="text"  name="senior_name" class="form-control" id="inputsponser" value="'.$row["senior_name"].'" placeholder="Sponser name">
        </div>
                <label for="inputidno" class="col-sm-2 col-form-label">ID NO.</label>
        <div class="col-sm-3">
          <input type="text"  name="senior" class="form-control" value="'.$row["senior"].'" id="inputidno">
        </div>
        </div>
      <br>

      <div class="form-group row">
        <div class="col-sm-2">Terms and Conditions</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Agree
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" name="update" class="btn btn-primary">Done</button>
        </div>
      </div>
    </form>


  </div>';

} }

}


if (isset($_POST['update'])) {
  include 'db.php';
$connect= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');

$name = mysqli_real_escape_string($connect,$_POST["name"]);
$lastname = mysqli_real_escape_string($connect,$_POST["lastname"]);
$nl_id = mysqli_real_escape_string($connect,$_POST["nl_id"]);
$password = mysqli_real_escape_string($connect,$_POST["password"]);
$address = mysqli_real_escape_string($connect,$_POST["address"]);
$city = mysqli_real_escape_string($connect,$_POST["city"]);
$state = mysqli_real_escape_string($connect,$_POST["state"]);
$pincode = mysqli_real_escape_string($connect,$_POST["pincode"]);
$contactno = mysqli_real_escape_string($connect,$_POST["contactno"]);
$gender = mysqli_real_escape_string($connect,$_POST["gender"]);
$dob = mysqli_real_escape_string($connect,$_POST["dob"]);
$ddno = mysqli_real_escape_string($connect,$_POST["ddno"]);
$bankname = mysqli_real_escape_string($connect,$_POST["bankname"]);
$branch = mysqli_real_escape_string($connect,$_POST["branch"]);
$pay = mysqli_real_escape_string($connect,$_POST["pay"]);
$senior_name = mysqli_real_escape_string($connect,$_POST["senior_name"]);
$senior = mysqli_real_escape_string($connect,$_POST["senior"]);

$query = "UPDATE user_details 
SET name='$name', lastname='$lastname', nl_id='$nl_id', password='$password', address='$address', city='$city', state='$state', pincode='$pincode', contactno='$contactno', gender='$gender', dob='$dob', ddno='$ddno', bankname='$bankname', branch='$branch', pay='$pay', senior_name='$senior_name', senior='$senior' WHERE nl_id='$nl_id';";
//echo $query;
$result = mysqli_query($connect,$query);
$er=mysqli_error($connect);
if($result)
echo "update success";
else
echo "not success".$er;


}
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