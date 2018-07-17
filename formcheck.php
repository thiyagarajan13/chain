
<?php

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

$query = "INSERT INTO user_details (id,name, lastname, nl_id, password, address, city, state, pincode, contactno, gender, dob, ddno, bankname, branch, pay, senior_name, senior) VALUES (NULL,'".$name."','".$lastname."','".$nl_id."','".$password."','".$address."','".$city."','".$state."',".$pincode.",".$contactno.",'".$gender."','".$dob."','".$ddno."','".$bankname."','".$branch."',".$pay.",'".$senior_name."','".$senior."');";
//echo $query;
$result = mysqli_query($connect,$query);
$er=mysqli_error($connect);
if($result)
echo "success";
else
	
echo "not success".$er;