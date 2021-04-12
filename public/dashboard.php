<!DOCTYPE html>
<html lang="en">
<head>
	<title>GreenSeasons-Dashboard</title>
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
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<div class="container" id="navigation">
	<div class="nav nav-expand">
		<li class="nav-item" id="responsive1">
			<a href="dashboard.php" class="nav-link active" id="respHome">HOME</a>
		</li>
		<li class="nav-item" id="responsive2">
			<a href="blog.php" class="nav-link">BLOG</a>
		</li>
		<li class="nav-item" id="responsive3">
			<a href="gallery.php" class="nav-link">GALLERY</a>
		</li>
		<li class="nav-item" id="responsive4">
			<a href="about.php" class="nav-link">ABOUT</a>
		</li>
		<div class="container nav nav-expand" id="credsinput">
			<li>
				<a href="../authentication/logout.php" class="credinput">Log Out</a>
			</li>
		</div>	
	</div>
</div>
<br/>
<div class="container-fluid">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<img src="../images/images2/tata1.jpg" alt="Tata" width="400px" height="400px">
			</div>
			<div class="col"  style="margin-top:55px;">
				<h3 style="text-decoration:underline;">Welcome To <mark>GreenSeasons Limited</mark></h3>
				<blockquote class="blockquote"  style="margin-top:35px;">
					<p class="blockquote-text">
						Booked a Truck from Nationwide for our Management Conference. Delivered with plenty of time to spare. Vehicle was clean and very well presented. Great value for money. Would recommend to everyone."
					</p>
					<div class="blockquote-footer" style="text-align:center;">" 
						S Marsden
					</div>
				</blockquote>
			</div>
		</div>
	</div>
	<br/>
	<div class="container-fluid" style="background-color:#8fbcc1;">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10" style="padding:20px; font-size:21px; text-align:center; justify-content:center; align-self:center;">
				<div class="container-fluid">
					<p>Our depots are equipped with the latest technology to provide a full range of services and keep ahead of the latest developments. Our technicians are all fully qualified to a wide variety of truck standards, with continuous training programmes to stay on top of changing technology and regulations.</p>
				</div>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
	<br/>
	<div class="container-fluid" >
		<div class="container">
			<h3>Latest Posts</h3>
		</div>
		<div class="card-columns">
			<div class="card">
				<img src="../images/images2/truck1.gif" alt="" width="" height="" class="card-img-top">
				<div class="card-body" style="border:none; font-size:18px;">
					<p class="card-text">
						Check out our latest fleet of trucks. You don't want to miss this.
					</p>
				</div>
				<div class="card-footer" style="border-top:none;">
					<a href="blog.php" class="stretched-link btn btn-success btn-block">See More</a>
				</div>
			</div>
			<div class="card">
				<img src="../images/images2/tata2.jpg" alt="" width="" height="" class="card-img-top">
				<div class="card-body" style="border:none; font-size:18px;">
					<p class="card-text">
						37% Off for all orders placed between Thursday 8<sup>Th</sup> April and Thursday 15<sup>Th</sup> April 2021.
					</p>
				</div>
				<div class="card-footer" style="border-top:none;">
					<a href="blog.php" class="stretched-link btn btn-success btn-block">See What's Available, And How to Place Your Order</a>
				</div>
			</div>
			<div class="card">
				<img src="../images/images2/tata3.jpg" alt="" width="" height="" class="card-img-top">
				<div class="card-body" style="border:none; font-size:18px;">
					<p class="card-text">
						Tips & Tricks on treating your truck right. 
					</p>
				</div>
				<div class="card-footer" style="border-top:none;">
					<a href="blog.php" class="stretched-link btn btn-success btn-block">Read More</a>
				</div>
			</div>
		</div>
	</div>
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
</div>


</body>
</html>