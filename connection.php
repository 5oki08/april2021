<?php

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "greenseasons" ; 
$conn = new mysqli($servername,$username,$password,$dbname) ;
// if ($conn->connect_error) {
// 	echo "Connection to Server FAiled." . $conn->error ;
// } else {
// 	echo "Connection to Server Success";
// }

// $sql = "CREATE DATABASE greenSeasons" ;
// if ($conn->query($sql)) {
// 	echo "Database Created";
// } else {
// 	echo "Database Creation Failed" . $conn->error ;
// }

// $sql = "CREATE TABLE usersGreenSeasons (
// id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// fName VARCHAR(250) NOT NULL,
// sName VARCHAR(250) NULL,
// userLocation VARCHAR(250) NOT NULL,
// userGender VARCHAR(250) NOT NULL,
// userAge VARCHAR(250) NOT NULL,
// userPhone VARCHAR(250) NOT NULL,
// userPassword VARCHAR(250) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )" ;
// if ($conn->query($sql)) {
// 	echo "Table Created";
// } else {
// 	echo "Table nOt CreaTed" . $conn->error ;
// }


// $sql = "CREATE TABLE hiredetails (
// id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// custFirstName VARCHAR(250) NOT NULL,
// custSurnameName VARCHAR(250) NULL,
// custArea VARCHAR(250) NOT NULL,
// custIDnumber VARCHAR(250) NOT NULL,
// custWorkType VARCHAR(250) NOT NULL,
// custEmail VARCHAR(250) NOT NULL,
// custPhoneNumber VARCHAR(250) NOT NULL,
// custTruckType VARCHAR(250) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )" ;
// if ($conn->query($sql)) {
// 	echo "Table Created";
// } else {
// 	echo "Table nOt CreaTed" . $conn->error ;
// }

 ?>