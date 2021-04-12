<?php 
session_start() ;
include '../connection.php' ;

$custFName = $custSName = $custArea = $custidNo = $workType = $custEmail = $custPhone = $truckType = '' ;
$custFNameErr = $custSNameErr = $custAreaErr = $custidNoErr = $workTypeErr = $custEmailErr = $custPhoneErr = $truckTypeErr = '' ;

$_SESSION['detailsApprove'] = "Hire Details Approved" ;
$_SESSION['classTypeSuccess'] = "success" ;
$_SESSION['detailsFail'] = "Hire Details Denied" ;
$_SESSION['classTypeError'] = "danger" ;

if ( isset($_POST['uploadHireDetails']) ) {
	if (empty($_POST['custFName'])) {
		$custFNameErr = "Provide First Name" ;
	} else {
		$custFName = $_POST['custFName'] ;
	}
	if (empty($_POST['custSName'])) {
		$custSNameErr = "Provide Second Name" ;
	} else {
		$custSName = $_POST['custSName'] ;
	}
	if (empty($_POST['custSName'])) {
		$custSNameErr = "Provide Second Name" ;
	} else {
		$custSName = $_POST['custSName'] ;
	}
	if (empty($_POST['custArea'])) {
		$custAreaErr = "Unavailable Customer Area" ;
	} else {
		$custArea = $_POST['custArea'] ;
	}
	if (empty($_POST['custidNo'])) {
		$custidNoErr = "Input Customer ID" ;
	} else {
		$custidNo = $_POST['custidNo'] ;
	}
	if (empty($_POST['workType'])) {
		$workTypeErr = "Select work type" ;
	} else {
		$workType = $_POST['workType'] ;
	}
	if (empty($_POST['custEmail'])) {
		$custEmailErr = "Select work type" ;
	} else {
		$custEmail = $_POST['custEmail'] ;
	}
	if (empty($_POST['custPhone'])) {
		$custPhoneErr = "Input Phone Number" ;
	} else {
		$custPhone = $_POST['custPhone'] ;
	}
	if (empty($_POST['truckType'])) {
		$truckTypeErr = "Select Truck Type" ;
	} else {
		$truckType = $_POST['truckType'] ;
	}


	$hireSql = " SELECT * FROM hiredetails WHERE custFirstName='$custFName' && custSurnameName='$custSName' && custArea='$custArea' && custIDnumber='$custidNo' && custWorkType='$workType' && custEmail='$custEmail' && custPhoneNumber='$custPhone' && custTruckType='$truckType' " ;
	$result = mysqli_query($conn,$hireSql) ;
	$num = mysqli_num_rows($result) ;

	if ( empty($custFNameErr) && empty($custSNameErr) && empty($custAreaErr) && empty($custidNoErr) && empty($workTypeErr) && empty($custEmailErr) && empty($custPhoneErr) && empty($truckTypeErr) ) {
		$hireSql = $conn->prepare(" INSERT INTO hiredetails (custFirstName,custSurnameName,custArea,custIDnumber,custWorkType,custEmail,custPhoneNumber,custTruckType) VALUES (?,?,?,?,?,?,?,?) ") ;
		$hireSql->bind_param("ssssssss",$custFName,$custSName,$custArea,$custidNo,$workType,$custEmail,$custPhone,$truckType) ;

		if ( $hireSql->execute() === TRUE ) {
			$_SESSION['detailsApprove'];
			$_SESSION['classTypeSuccess'] ;
			header('location: blog.php?hireDetailsSuccess') ;
		} else {
			$_SESSION['detailsFail'];
			$_SESSION['classTypeError'] ;
			header('location: hire.php?hireDetailsFail') ;
		}
	} else {}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GreenSeasons-HireTruckForm</title>
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
		color: red;
		font-style: italic;
		text-decoration: underline;
		text-decoration-style: dotted;
	}
</style>

</head>
<body>

<div class="container" id="navigation">
	<div class="nav nav-expand">
		<li class="nav-item">
			<a href="dashboard.php" class="nav-link">HOME</a>
		</li>
		<li class="nav-item">
			<a href="blog.php" class="nav-link active">BLOG</a>
		</li>
		<li class="nav-item">
			<a href="gallery.php" class="nav-link">GALLERY</a>
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
<br/>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1 bg-info"></div>
		<div class="col-md-10">
			<div class="container-fluid">
				<div class="container" style="text-align:center;">
					<h4>Thank You for your interest.</h4>
					<h5>Fill the form below, clearly indicating your details, for efficient services</h5>
				</div>
				<div class="jumbotron">
					<form class="form" action="hire.php" method="post">
						<div class="row">
							<div class="col-md">
								<div class="form-group">
									<input type="text" name="custFName" id="custFName" class="form-control" placeholder="Enter First Name">
									<p> <?php echo $custFNameErr; ?> </p>
								</div>
							</div>
							<div class="col-md">
								<div class="form-group">
									<input type="text" name="custSName" id="custSName" class="form-control" placeholder="Enter Surname Name">
									<p> <?php echo $custSNameErr; ?> </p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<div class="form-group">
									<input type="text" name="custArea" id="custArea" class="form-control" placeholder="Enter Residential Area" maxlength="15">
									<p> <?php echo $custAreaErr; ?> </p>
								</div>
							</div>
							<div class="col-md">
								<div class="form-group">
									<input type="phone" name="custidNo" id="custidNo" class="form-control" placeholder="Enter ID Number" maxlength="10">
									<p> <?php echo $custidNoErr; ?> </p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<select name="workType" id="workType" class="form-control">
								<i><option>Select Work Type</option></i>
								<option value="construction">Construction</option>
								<option value="tamarc">Tamarc (Road Construction)</option>
								<option value="transit">Transit Goods</option>
							</select>
							<p> <?php echo $workTypeErr; ?> </p>
						</div>
						<div class="form-group">
							<input type="email" name="custEmail" id="custEmail" class="form-control" placeholder="Enter Email Address">
							<p> <?php echo $custEmailErr; ?> </p>
						</div>
						<div class="form-group">
							<input type="phone" name="custPhone" id="custPhone" class="form-control" placeholder="Enter Phone Number" max-length="10">
							<p> <?php echo $custPhoneErr; ?> </p>
						</div>
						<div class="form-group">
							<input type="radio" name="truckType" id="semitrailer" value="semitrailer">
							<label for="semitrailer">Semi Trailer</label><br/>
							<input type="radio" name="truckType" id="18wheeler" value="18wheeler">
							<label for="18wheeler">18wheeler</label><br/>
							<input type="radio" name="truckType" id="tankerTruck" value="tankerTruck">
							<label for="tankerTruck">tankerTruck</label><br/>
							<input type="radio" name="truckType" id="tipper" value="tipper">
							<label for="tipper">Tipper</label><br/>
							<input type="radio" name="truckType" id="flatbed" value="flatbed">
							<label for="flatbed">Flatbed</label>
							<p> <?php echo $truckTypeErr; ?> </p>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<input type="submit" name="uploadHireDetails" id="uploadHireDetails" value="Upload Hire Details" class="btn btn-block btn-success">
								</div>
								<div class="col">
									<input type="reset" name="reset" id="reset" value="resetForm" class="btn btn-block btn-danger">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1 bg-info"></div>
	</div>
</div>


</body>
</html>