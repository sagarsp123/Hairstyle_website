
<?php
error_reporting(0);

$con = @mysqli_connect('localhost','root',"","register") or die(mysql_error());
if(!$con)
{
	echo "error in connection";
	exit();
}
echo " ----connected---- <br>";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pwd = $_POST['password'];

$res=mysqli_query($con,"SELECT * FROM test where firstname='$firstname' and lastname='$lastname' and password='$pwd'") or die("Error: " . mysqli_error($con));


if ($res) {
	    echo "Valid user";

	    #echo '</script>';
			echo "<script>location.href='form-2.php'</script>";
	  }
else{
		echo "Not a Valid user";
		#echo "<script>location.href='../Hairstyle/form-2.php'</script>";
		#header('location:StudentLogin.html');
}

?>