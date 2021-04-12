<!DOCTYPE html>
<html>
<head>
	<title>GreenSeasons-Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/styleresponsive.css">	
</head>
<body>

<div class="container" id="navigation">
	<div class="nav nav-expand">
		<li class="nav-item">
			<a href="dashboard.php" class="nav-link">HOME</a>
		</li>
		<li class="nav-item">
			<a href="blog.php" class="nav-link">BLOG</a>
		</li>
		<li class="nav-item">
			<a href="gallery.php" class="nav-link active">GALLERY</a>
		</li>
		<li class="nav-item">
			<a href="about.php" class="nav-link">ABOUT</a>
		</li>
		<div class="container nav nav-expand" id="credsinput">
			<li>
				<a href="../authentication/logout.php" class="credinput">Log Out</a>
			</li>
		</div>	
	</div>
</div>
<br/><br/>
<div class="slideshow-container">
	<div class="mySlides fade">
	  <img src="../images/images2/tata3.jpg" style="width:100%">
	</div>
	<div class="mySlides fade">
	  <img src="../images/images2/tata6.jpg" style="width:100%">
	</div>
	<div class="mySlides fade">
	  <img src="../images/images2/tata8.jpg" style="width:100%">
	</div>
	<div class="mySlides fade">
	  <img src="../images/images2/tata2.jpg" style="width:100%">
	</div>
	<div class="mySlides fade">
	  <img src="../images/images2/tata1.jpg" style="width:100%">
	</div>
	<div class="mySlides fade">
	  <img src="../images/images2/tata5.jpg" style="width:100%">
	</div>
	<div class="mySlides fade">
	  <img src="../images/images2/tata9.jpg" style="width:100%">
	</div>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


	<footer class="footer">
		<div class="container-fluid" style="background-color:#da90aa; padding:20px; border-radius:8px;">
			<div class="row">
				<div class="col-md" id="footercol1">
					<div class="container-fluid" style="display:block;">
						<h5 style="text-decoration:underline;">Quick Links</h5> 
						<nav class="nav nav-expand" id="footerquicklinks">
							<li class="quickitem">
								<a href="dashboard.php" class="quicklink">Home</a>
							</li> 
							<li class="quickitem">
								<a href="blog.php" class="quicklink">Blog</a>
							</li> 
							<li class="quickitem">
								<a href="gallery.php" class="quicklink">Gallery</a>
							</li> 
							<li class="quickitem" style="margin-bottom:10px;">
								<a href="about.php" class="quicklink">About</a>
							</li>
						</nav>
					</div>
				</div>
				<div class="col-md" id="footercol2">
					<a href="https://www.instagram.com/f1" class="footersocials" target="_blank">
						<img src="../images/instagrambnw.png" alt="GreenSeasons Instagram" width="50px" height="50px" id="imagessocial">
					</a>
					<a href="https://www.facebook.com/login" class="footersocials" target="_blank">
						<img src="../images/facebookbnw.png" alt="GreenSeasons Facebook" width="50px" height="50px" id="imagessocial">
					</a>
					<a href="https://www.twitter.com/i/trends" class="footersocials" target="_blank">
						<img src="../images/twitterbnw.png" alt="GreenSeasons Twitter" width="50px" height="50px" id="imagessocial">
					</a> <br/><br/>
					<div class="container">
						<a href="../authentication/emailsend.php" class="footersocials">
							<img src="../images/email.png" alt="GreenSeasons Instagram" width="50px" height="50px" id="imagessocial">
						</a>
						<a href="#" class="footersocials">
							<img src="../images/whatsapp.png" alt="GreenSeasons Facebook" width="50px" height="50px" id="imagessocial" data-toggle="tooltip" data-placement="left" title="+254 748 304 696">
						</a>
					</div>	
				</div>
				<div class="col-md" id="footercol3">
					<span style="font-weight:600;">All Rights Reserved ©<br/>2021</span>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>