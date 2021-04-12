<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>	 -->

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/styleresponsive.css">

	<title>GreenSeasons:Welcome Home</title>
</head>
<body id="indexbody">

<div class="container" id="navigation">
	<div class="nav nav-expand">
		<li class="nav-item">
			<a href="index.php" class="nav-link active">GUEST</a>
		</li>
		<div class="container nav nav-expand" id="credsinput">
			<li class="nav-item">
				<a href="authentication/signup.php" class="credinput">Sign Up</a>
			</li>
			<li class="nav-item">
				<a href="authentication/login.php" class="credinput">Log In</a>
			</li>
		</div>	
	</div>
</div>

<div class="jumbotron" id="bodyindex">
	<div class="row" id="introindexrow">
		<p class="alert alert-<?php
			if ( isset($_GET['accept']) ) {
						echo $_SESSION['classTypeAccept'];
						session_unset();
						session_destroy();
					}
		?>">
			<?php 
				if ( isset($_GET['accept']) ) {
					if ( isset($_SESSION['detailsAccept']) ) {
						echo $_SESSION['detailsAccept'];
						session_unset();
						session_destroy();
					} else {
						echo "Registration Successful. Log In with the details.";
					}
				}
			?>
		</p>
		<div class="col-md">
			<img src="images/indexlogo.png" alt="Green Seasons Logo" width="270px" height="270px">
		</div>
		<div class="col-md" style="margin-top:50px;">
			<h4>Welcome To Green Seasons Ltd.</h4>
			<br/>
			<h5>Where we provide quality and well maintained trucks for hire, as well as for sale. All under one roof.</h5>
		</div>
	</div>
</div>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col">
				<a href="#">
					<img src="images/instagrambnw.png" alt="GreenSeasons Instagram" width="50px" height="50px" id="imagessocial">
				</a>
				<a href="#">
					<img src="images/facebookbnw.png" alt="GreenSeasons Facebook" width="50px" height="50px" id="imagessocial">
				</a>
				<a href="#">
					<img src="images/twitterbnw.png" alt="GreenSeasons Twitter" width="50px" height="50px" id="imagessocial">
				</a>
			</div>
			<div class="col">
				<span style="font-weight:600;">All Rights Reserved ©<br/>2021</span>
			</div>
			<div class="col">
				<div class="container">
					<a href="#" class="footerlinks">Terms of Service</a><br/>
					<a href="#" class="footerlinks">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
</footer>

</body>
</html>