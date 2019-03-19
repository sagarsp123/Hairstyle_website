<?php
// include database connection
//if(!empty($_GET['id'])){
include "db_connect.php";
mysqli_select_db($conn,"image");
// select the image

//echo $_GET['id'];

$res = mysqli_query($conn,"select images from test WHERE skintone = 'fair' && faceshape='square' && hairlength='medium' && haircolour='brown'")or die("Error: " . mysqli_error($conn));

while($row=mysqli_fetch_assoc($res))
{
 echo ($row['images'] != NULL) ? '<img src="get.php?id='.$row[id].'&col=1 " width="30" height="30"/> ' : '';

}


?>
?> <img src="<?php echo $row["images"]; ?>" height="100" width="100" > <?php echo"</td>";or die("Error: " . mysqli_error($conn));