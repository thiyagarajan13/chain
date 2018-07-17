<?php

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$nlid=$_POST["nlid"];
$password=$_POST["password"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$contactno=$_POST["contactno"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$ddno=$_POST["ddno"];
$bankname=$_POST["bankname"];
$branch=$_POST["branch"];
$amount=$_POST["amount"];
$senior_name=$_POST["senior_name"];
$senior_id=$_POST["senior_id"];

include ('db.php');
$connect= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');
$query = "INSERT INTO user_details (firstname, lastname, nl_id, password, address, city, state, zip, contactno, gender, dob, ddno, bankname, branch, amount, senior_name, senior_id, junior_1_id,junior_2_id) VALUES ('$firstname','$lastname','$nlid','$password','$address','$city','$state',$zip,$contactno,'$gender','$dob','$ddno','$bankname','$branch',$amount,'$senior_name','$senior_id','','')";
$result = mysqli_query($connect,$query) or die('There was an unexpected error grabbing shouts from the database.');
if($result)
echo "success";
else
echo "not success";
?>
