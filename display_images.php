<html>
<body>
<?php
//if(!empty($_GET['id'])){
    //DB details
  $servername = "localhost";
$username = "username";
$password = "";
$database = "image";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
    //echo $_GET['id'];
    //Get image data from database
    //$result = $db->query("SELECT image FROM stories WHERE id = {$_GET['id']}");
    $result = mysqli_query("SELECT images from test WHERE skintone == 'square' && faceshape =='fair' && hairlength =='medium' && haircolor =='brown'" );  
         // WHERE id = {$_GET['id']}");

   // if($result->num_rows > 0){
     //   $imgData = $result->fetch_assoc();

        //Render image
       // header("Content-type: image/jpg");
        //echo $imgData['images'];
        //imagejpeg($imgData);
    //}else{
     //   echo 'Image not found...';
    //}

    while($row=mysqli_fetch_array($result))
    {
       ?> <img src="<?php echo $row["images"]; ?>"height="100" width="100">;
    }

</body>
</html>