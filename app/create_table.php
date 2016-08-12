<?php
	require_once("connection.php");
	$sql = "CREATE TABLE persons 
	(PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	Name CHAR(50) NOT NULL,
	Email CHAR(50) NOT NULL UNIQUE,
	Password CHAR(50) NOT NULL,
	Contact CHAR(50) NOT NULL,
	City CHAR(50) NOT NULL,
	Address CHAR(50) NOT NULL)";
	$row=mysqli_query($con,$sql);
	if($row){
		echo "table persons created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}
	
	$sql = "CREATE TABLE items
	(PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Price INT(10) NOT NULL)";
	$row=mysqli_query($con,$sql);
	if($row){
		echo "table items created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}
	
	$sql = "CREATE TABLE contacts
	(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name CHAR(50) NOT NULL,
	Email CHAR(50) NOT NULL UNIQUE,
	Message CHAR(200)
	)";
	$row=mysqli_query($con,$sql);
	if($row){
		echo "table flowers created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}
?>