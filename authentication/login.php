<?php
session_start() ;
include '../connection.php' ;

$userLogMail = $userLogPassword = $userLogPasswordEncrypt = '' ;
$userLogMailErr = $userLogPasswordErr = '' ;


$_SESSION['userLogReject'] = "Credentials Rejected" ;
$_SESSION['classTypeError'] = "danger" ;

if ( isset($_POST['userLogSubmit']) ) {
	if ( empty($_POST['userLogMail']) ) {
		$userLogMailErr = "invalid email input" ; 
	} else {
		$userLogMail = $_POST['userLogSubmit'] ;
	}
	if ( empty($_POST['userLogPassword']) ) {
		$userLogPasswordErr = "invalid password" ; 
	} else {
		$userLogPassword = $_POST['userLogPassword'] ;
		// $userLogPasswordEncrypt = md5($userLogPassword) ;
	}

	$loginsql = " SELECT * FROM usersgreenseasons WHERE userMail='$userLogMail' && userPassword='".md5($userLogPassword)."' " ;
	$result = mysqli_query($conn,$loginsql) ;
	$nums = mysqli_num_rows($result) ;

	if ( $nums=1 ) {
		if (empty($userLogMailErr) && empty($userLogPasswordErr) ) {
			$_SESSION['activeuser'] = $userLogMail ;
			header('location: ../public/dashboard.php') ;
			} else {
				$_SESSION['userLogReject'] ;
				$_SESSION['classTypeError'] ;
				header('location: login.php?credInvalid') ;
			} 
		}  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>GreenSeasons-LogIn</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/style.css">	
<link rel="stylesheet" type="text/css" href="css/styleresponsive.css">
<style type="text/css">
	p {
		font-style: italic;
		color: #f72f20;
	}
</style>
</head>
<body>

<div class="container" id="navigation">
	<div class="nav nav-expand">
		<li class="nav-item">
			<a href="../index.php" class="nav-link active">GUEST</a>
		</li>
		<div class="container nav nav-expand" id="credsinput">
			<li class="nav-item">
				<a href="signup.php" class="credinput">Sign Up</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="credinput">Log In</a>
			</li>
		</div>	
	</div>
</div>

<div class="container" id="loginholder">
	<div class="row">
		<div class="col-md"></div>
		<div class="col-md" style="align-self:center;">
			<div class="container-fluid">
				<form class="form" action="login.php" method="post">
					<p class="alert alert-<?php
						if ( isset($_GET['credInvalid']) ) {
						echo $_SESSION['classTypeError'];
						session_unset();
						session_destroy();
					}
					?>">
						<?php
							if (isset($_GET['credInvalid'])) {
								if (isset($_SESSION['userLogReject'])) {
									echo $_SESSION['userLogReject'];
									session_unset();
									session_destroy();
								} else {
									echo "Failed Credentials. Check, Then Try Again.";
								}
							}
						?>
					</p>
					<div class="form-group">
						<input type="email" name="userLogMail" id="userLogMail" class="form-control" placeholder="Enter Email Address">
						<p> <?php echo $userLogMailErr; ?> </p>
					</div>
					<div class="form-group">
						<input type="password" name="userLogPassword" id="userLogPassword" class="form-control" placeholder="Enter Password">
						<p> <?php echo $userLogPasswordErr; ?> </p>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col">
								<input type="submit" name="userLogSubmit" id="userLogSubmit" class="btn btn-block btn-success" value="Log In">
							</div>
							<div class="col">
								<input type="reset" name="reset" id="reset" class="btn btn-block btn-danger" value="Reset Form">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md"></div>
	</div>
</div>






</body>
</html>