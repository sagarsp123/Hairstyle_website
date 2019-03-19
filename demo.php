<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body background-color:red>
<?php

$conn=mysqli_connect("localhost","root","");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"image");
$faceshap = $_POST['faceshape'];
$skintone = $_POST['skintone'];
$hairlength = $_POST['hairlength'];
$haircolor = $_POST['haircolor'];

$res=mysqli_query($conn,"select images from test where skintone= '".$skintone."' and faceshape = '".$faceshap."' and hairlength = '".$hairlength."' and haircolour =  '".$haircolor."';") or die("Error: " . mysqli_error($conn));

// print_r($res);die();
echo "<table>";
 echo "<body style='background-color:#FFEFD5'>";
echo "<p align='center'> <font color=blue  size='8pt'>---- Perfect Hairstyle for your face -----</font> </p>";
while($row=mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>";?> <img style="border:10px outset silver" src="<?php echo $row["images"]; ?>" height="350" width="350" ><?php echo"</td>";

echo "</tr>";
}
echo "</table>";
?>
</body>
<style>

img{
	position:absolute;
	top:30%;
	left: 38%;
}

</style>
</html>