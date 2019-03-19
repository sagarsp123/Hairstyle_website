<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  position: relative;
  width: 100%;
  height: 100%;
}

.image {
  display: block;
  width: 100%;
  height: 100%;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #ffad33;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}
a:hover{color:#d9d9d9}

	
a{

		font-size:20px;
		padding: 5px;
		color: white;

		padding: 20px 40px;
		margin: 0px;
		cursor: pointer;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 45%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
img { padding: 30px;  border: 1px red ; cursor: pointer;  }

</style>
</head>
<body style="background-color:#C0C0C0">
	<h1 style="background:#737373;padding: 20px; margin: 0px;">
	
	<a href="homepage.php"style="text-decoration: none">Home</a>
	<a href="aboutpage.php"style="text-decoration: none">About Us</a>
	<a href="form-1.php" style="text-decoration: none">Register</a>
	<a href="animations.php" style="text-decoration: none">Gallery</a>
	<a href="form-2.php" style="text-decoration: none">Style</a>
	<a href="feedback.php"style="text-decoration: none">Feedback</a>
	<a href="Contact.php"style="text-decoration: none">Contact Us</a>
	<a href="https://www.facebook.com/"><i class="fa fa-facebook" onMouseOver="this.style.color='#0000cc'" onMouseOut="this.style.color='white'" style="color: white;float: right;padding: 15px;"></i></a>

	<a href="https://www.instagram.com/"><i class="fa fa-instagram" onMouseOver="this.style.color='pink'" onMouseOut="this.style.color='white'" style="float:right;color: white; padding: 15px;"></i></a>
	
	<a href="https://www.twitter.com/"><i class="fa fa-twitter" onMouseOver="this.style.color='#1E90FF'" onMouseOut="this.style.color='white'" style="color: white;float: right;padding: 15px;"></i></a>
	</h1>
	<img src="aboutus.png" align="center" height=250 width=250>
<br>   
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/111.jpg" style="width:100%">
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/222.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/333.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/44.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<br><br><br><br>

 <div class="container">
  <img src="images/img.jpg" class="image">
  <div class="overlay">
    <div class="text">
	
        <center>
        <br><br>
		Hairstyles are a way of creating a statement.
		A person's hairstyle can tell you a lot about their image and personality. 
		Hairstyles are also an essential part of first impressions.A number of people determine how they feel about themselves based on their appearance and hairstyles. Often when people are having what they call "a bad hair day" they feel less confident and more self conscious. In most scenarios hairstyles can create perceptions and images in people minds. 
		A hairstyle can not determine a person's character, integrity or make a person whole and secure. However, a hairstyle has great significance because it is a symbol and representation of the individual.
		<br><br>If you’re dressed to impress but your hair doesn’t match your clothes it can ruin your entire look and make you look like a homeless person who stole someone’s good clothes.
        With a bad hairstyle you come off as a lazy person or someone with really low self-esteem.Picking the right hair style and colour that matches the shape of your face and complements your skin colour and features can make a person go from oh… to wow!
		</center>
    </div>
  </div>
</div>
<br><br><br><br>
<h2 align="center" style="font-size: 60px;color: black; font-family:sans-serif;">   OUR  WEB DESIGNERS .... </h2>
<br><br><br><br>
    <div class="container">
  
                 <div class="items">
                    
                     <center>   <img src="images/pic.jpg" alt="" class="thumbnail" height=350 width=350"><center>
                        <div class="caption">
                            <center>
                            <h1>SAGAR PRABHU</h1>
							<h2>CODER AND PROFESSIONAL WEB DESIGNER</h2>
							<h2>9892417997</h2>
                            </center>
                            </div>
                    
                </div>
    
                <div class="items">
                    
                     <center>   <img src="images/vedant.jpg" alt="" class="thumbnail" height=350 width=350"><center>
                        <div class="caption">
                            <center>
                            <h1>VEDANT PIMPLEY</h1>
              <h2>FRONT END DEVELOPER</h2>
              <h2>7208530585</h2>
                            </center>
                            </div>
                    
                </div>

                <div class="items">
                    
                     <center>   <img src="images/jeet.jpg" alt="" class="thumbnail" height=350 width=350"><center>
                        <div class="caption">
                            <center>
                            <h1>JEET PAREKH</h1>
              <h2>CODER</h2>
              <h2>9920491424</h2>
                            </center>
                            </div>
                    
                </div>
    
    
    </div>
    <br><br>
    

</body>
</html>
