
<!DOCTYPE html>
<html>
<head>
	<title>
		Style
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="form2.css">
	<script src="js/jquery.js"></script>
	<script src="js/sample.js"></script>
</head>
<body background="h5.jpg" style="margin: 0px;">
	<h1 style="background:#737373; padding: 20px; margin: 0px;">
	
		<a href="homepage.php" style="text-decoration: none">Home </a>
		<a href="aboutpage.php"style="text-decoration: none">About Us</a>
		<a href="form-1.php" style="text-decoration: none">Register</a>
		<a href="animations.php" style="text-decoration: none">Gallery</a>
		<a href="form-2.php" style="text-decoration: none">Style</a>
		<a href="feedback.php"style="text-decoration: none">Feedback</a>
	  <a href="Contact.php"style="text-decoration: none">Contact Us</a>
		<a href="https://www.facebook.com/"><i class="fa fa-facebook" onMouseOver="this.style.color='#0000cc'" onMouseOut="this.style.color='white'" style="color: white;float: right;padding: 15px;"></i></a>

		<a href="https://www.instagram.com/"><i class="fa fa-instagram" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='white'" style="float:right;color: white; padding: 15px;"></i></a>

		<a href="https://www.twitter.com/"><i class="fa fa-twitter"  onMouseOver="this.style.color='#1E90FF'" onMouseOut="this.style.color='white'" style="color: white;float: right;padding: 15px;"></i></a>
	</h1>
	</br>
	<form method="post" action="demo.php" id="requirement" class="container">
		<img src="images/abc.png" align="left" height=100 width=200>
		<br><br><br><br><br><br><br><my>Your Face Shape:</my><br>
		<select name="faceshape">
			<option value="square">Square</option>
			<option value="oval">Oval</option>
			<option value="round">Round</option>
		</select><br><br>

		<my>Your Skin Tone:</my><br>
		<select name="skintone">
			<option value="fair">Fair</option>
			<option value="medium">Medium</option>
			<option value="brown">Brown</option>
		</select>
		<br><br>

		<my>Hair length you need:</my><br><br>
		<input type="radio" name="hairlength" value="short"> <length>Short</length>
		<input type="radio" name="hairlength" value="medium"> <length>Medium</length>
	<input type="radio" name="hairlength" value="long"><length>Long</length><br><br><br>
	
	<my>Hair to be coloured to:</my><br>
	<select name="haircolor">
	<option value="black">Black</option>
	<option value="blonde">Blonde</option>
	<option value="brown">Brown</option>
	
	</select><br><br>
	<input type="checkbox" name="policy" value="policy"><check style="font-size: 25px;font-style: bold;color: white"> I accept it.<a href="terms.php" >Terms and Conditions</a></check><br><br><br>
	<button type="submit" id="submit"> Submit</button>
	<!-- <div type="submit" id="submit"> SUBMIT</div> -->
	
	<!-- <center><button id="submit"> Submit -</button></center><br> -->
	
	</form>
<div id="response"></div>
	<script>document.createElement("my")</script>
	<script>document.createElement("length")</script>

<div class="footer">
	<a href="animations.php" style="text-decoration: none">GALLERY</a>
</div>	

<style>

	length{color: white;
		font-size: 18px;
		font-style: bold;
		}
	my { color:white;
		 font-size: 20px;
		 font-style : bold;
		   }

	
input[type=text] , select {width: 70%;
		padding: 10px 20px;
		font-size:15px;
		margin: 8px 0;}

	button{
		
		width: 300px;
		background:#4CAF50;
		margin: 8px 0;
		color: white;
		margin: 8px;
		border: none;
		padding: 14px 20px;
		font-size: 20px;
		cursor: pointer;}

	.container {
    position: absolute;
    margin: 20px;
    width: 500px;
    height: 650px;
    padding: 20px;
    background-color:#778899;
    }
    

	a:hover{color: #d3d9de}
	a{

		font-size:20px;
		padding: 5px;
		color: white;
		padding: 20px 40px;
		margin: 0px;
		cursor: pointer;
	}
.footer {
   right: 0;
   bottom: 0;
   position: fixed;
   width: 15%;
   padding: 5px;
   background-color: black;
   color: white;
   text-align: center;
}

</style>

</body>
</html>
