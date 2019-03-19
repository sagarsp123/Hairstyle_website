<?php
$con = @mysqli_connect('localhost','root',"","register") or die(mysql_error());
if(!$con)
{
	echo "error in connection";
	exit();
}
echo " ----connected---- <br>";
$u = $_POST['firstname'];
$e = $_POST['lastname'];
$p = $_POST['dob'];
$a = $_POST['age'];
$b = $_POST['email'];
$c = $_POST['address'];
$d = $_POST['contact'];
$ps = $_POST['pwd'];

// Attempt insert query execution
$sql = "insert into test values ('$u','$e','$p','$a','$b','$c','$d','$ps')";
if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
}

@mysqli_close($con);
?>


