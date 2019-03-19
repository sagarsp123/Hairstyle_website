<?php
$con = @mysqli_connect('localhost','root',"","feedback") or die(mysql_error());
if(!$con)
{
	echo "error in connection";
	exit();
}
echo " ----connected---- <br>";
$u = $_POST['Name'];
$p = $_POST['Email'];
$a = $_POST['Ratings'];
$b = $_POST['Comments'];
//$c = $_POST['Stars'];

// Attempt insert query execution
$sql = "insert into test123 values ('$u','$p','$a','$b')";
if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($con);
}

@mysqli_close($con);
?>


