<?php

session_start();
require '../connection.php' ;


$fName = $sName = $userLocation = $userMail = $userGender = $userPassword = $encryptPassword = $userAge = $userPhone = '' ;
$fNameErr = $sNameErr = $userLocationErr = $userMailErr = $userGenderErr = $userPasswordErr  = $userAgeErr = $userPhoneErr = '' ;

$_SESSION['userDuplicate'] = "Registration Failed. User Duplicate" ;
$_SESSION['detailsAccept'] = "Registration Successful. Log In with the details." ;
$_SESSION['classTypeAccept'] = "success" ;
$_SESSION['detailsFail'] = "Registration Failed" ;
$_SESSION['classTypeError'] = "danger" ;


if (isset($_POST['detailsSubmit'])) {
	if (empty($_POST['fName'])) {
		$fNameErr = "First Name Value Empty" ;
	} else {
		$fName = $_POST['fName'] ;
	}
	if (empty($_POST['sName'])) {
		$sNameErr = "Second Name Value Empty" ;
	} else {
		$sName = $_POST['sName'] ;
	}
	if (empty($_POST['userLocation'])) {
		$userLocationErr = "User Location Value Empty" ;
	} else {
		$userLocation = $_POST['userLocation'] ;
	}
	if (empty($_POST['userMail'])) {
		$userMailErr = "Email Value Empty" ;
	} else {
		$userMail = $_POST['userMail'] ;
	}
	if (empty($_POST['userGender'])) {
		$userGenderErr = "Select Gender" ;
	} else {
		$userGender = $_POST['userGender'] ;
	}
	if (empty($_POST['userPassword'])) {
		$userPasswordErr = "Password Value Empty" ;
	} else {
		$userPassword = $_POST['userPassword'] ;
		$encryptPassword = md5($userPassword) ;
	}
	if (empty($_POST['userAge'])) {
		$userAgeErr = "Age Value Empty" ;
	} else {
		$userAge = $_POST['userAge'] ;
	}
	if (empty($_POST['userPhone'])) {
		$userPhoneErr = "Phone Value Empty" ;
	} else {
		$userPhone = $_POST['userPhone'] ;
	}


	$sql = " SELECT * FROM usersgreenseasons WHERE fName='$fName' && sName='$sName' && userLocation='$userLocation' && userMail='$userMail' && userGender='$userGender' && userAge='$userAge' && userPhone='$userPhone' && userPassword='$userPassword' " ;
	$result = mysqli_query($conn,$sql) ;
	$num = mysqli_num_rows($result) ;

	if ( $num>=1 ) {
		$_SESSION['userDuplicate'] ;
		$_SESSION['classTypeError'] ;
		header('location: signup.php?dupUsers') ;
	} else {
		if ( empty($fNameErr) && empty($sNameErr) && empty($userLocationErr) && empty($userMailErr) && empty($userGenderErr) && empty($userPasswordErr) && empty($userAgeErr) && empty($userPhoneErr) ) {
				$stmt = $conn->prepare(" INSERT INTO usersgreenseasons (fName,sName,userLocation,userMail,userGender,userAge,userPhone,userPassword) VALUES (?,?,?,?,?,?,?,?) ") ;
				$stmt->bind_param("ssssssss",$fName,$sName,$userLocation,$userMail,$userGender,$userAge,$userPhone,$encryptPassword) ;

				if ( $stmt->execute() === TRUE ) {
					$_SESSION['detailsAccept'];
					$_SESSION['classTypeAccept'] ;
					header('location: ../index.php?accept') ;
				} else {
					$_SESSION['detailsFail'];
					$_SESSION['classTypeError'] ;
					header('location: signup.php?failReg') ;
				}
			}

		}
	}	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GreenSeasons-Signup</title>
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
<body id="indexbody">

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

<div class="container-fluid" id="signupcontainer">
	<div class="container">
		<br/>
		<h3>For better user experience, create an account by filling the form below</h3>
		<p class="alert alert-<?php
				if ( isset($_GET['detailsFail']) ) {
						echo $_SESSION['classTypeError'];
						session_unset();
						session_destroy();
					}
				if ( isset($_GET['dupUsers']) ) {
						echo $_SESSION['classTypeError'];
						session_unset();
						session_destroy();
					}		
		?> ">
			<?php 
				if ( isset($_GET['failReg']) ) {
					if ( isset($_SESSION['detailsFail']) ) {
						echo $_SESSION['detailsFail'];
						session_unset();
						session_destroy();
					} else {
						echo "Registration Failed." ;
					}
				}
				if ( isset($_GET['dupUsers']) ) {
					if ( isset($_SESSION['userDuplicate']) ) {
						echo $_SESSION['userDuplicate'];
						session_unset();
						session_destroy();
					} else {
						echo "Registration Failed. User Duplicate";
					}
				}
			 ?>
		</p>
	</div> <br/>
	<div class="container">
		<form class="form" action="signup.php" method="post">
			<div class="row form-group">
				<div class="col">
					<div class="form-group">
						<label for="fName">First Name</label>
						<input type="text" name="fName" id="fName" class="form-control">
						<p> <?php echo $fNameErr; ?> </p>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="sName">Surname</label>
						<input type="text" name="sName" id="sName" class="form-control">
						<p> <?php echo $sNameErr; ?> </p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="userLocation">Area of Residence</label>
				<input type="text" name="userLocation" id="userLocation" class="form-control">
				<p> <?php echo $userLocationErr; ?> </p>
			</div> <br/>
			<div class="form-group">
				<label for="userMail">Enter Email Address</label>
				<input type="email" name="userMail" id="userMail" class="form-control">
				<p> <?php echo $userMailErr; ?> </p>
			</div> <br/>
			<div class="form-group">
				<label for="userGender">Gender</label>
				<select name="userGender" id="userGender" class="form-control">
					<option></option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="notsay">Not Say</option>
				</select>
				<p> <?php echo $userGenderErr; ?> </p>
			</div> <br/>
			<div class="form-group">
				<label for="userPassword">Enter Password</label>
				<input type="password" name="userPassword" id="userPassword" class="form-control" onkeyup="passCheck()">
				<p> <?php echo $userPasswordErr; ?> </p>
			</div> <br/>
			<div class="form-group">
				<label for="conPassword">Confirm Password</label>
				<input type="password" name="conPassword" id="conPassword" class="form-control" onkeyup="passCheck()">
				<span id="passMessage"></span>
			</div> <br/>
			<div class="row form-group">
				<div class="col">
					<div class="form-group">
						<label for="userAge">Age</label>
						<input type="phone" name="userAge" id="userAge" class="form-control" maxlength="2">
						<p> <?php echo $userAgeErr; ?> </p>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="userPhone">Phone Number</label>
						<input type="phone" name="userPhone" id="userPhone" class="form-control" maxlength="10" minlength="10">
						<p> <?php echo $userPhoneErr; ?> </p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<input type="submit" name="detailsSubmit" id="detailsSubmit" class="btn btn-block btn-success" value="Register">
					</div>
					<div class="col">
						<input type="reset" name="reset" id="reset" class="btn btn-block">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	function passCheck() {
		if ( document.getElementById('userPassword').value === document.getElementById('conPassword').value ) {
			document.getElementById('passMessage').style.color = "green" ;
			document.getElementById('passMessage').innerHTML = "password match" ;
			document.getElementById('detailsSubmit').disabled = false;
		} else {
			document.getElementById('passMessage').style.color = "red" ;
			document.getElementById('passMessage').innerHTML = "password mismatch" ;
			document.getElementById('detailsSubmit').disabled = true;
		}
	}
</script>

</body>
</html>