

<?php
if(isset ( $_POST['btn']))
{
$link = mysqli_connect ("localhost","root","password","nexenlyf");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$id=$_POST['userin'];

$sql = "SELECT name,pay FROM userinfo WHERE nl_id ='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
               echo "<th>name</th>";
			   echo "<th>pay</th>";
                
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['pay'] . "</td>";

               
                 echo "</tr>";
        }
        echo "</table>";
       
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
}
?>

<html>
<head>
</head>
<body>
<form name="xxx" action="" method="POST">
enter the nl_id <input name ="userin" type="varchar2" /> <br/>
<input name ="btn" type="submit" value="submit"/>
</form>
</body>
</html>





