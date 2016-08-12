<?php
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['e-mail'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$city = $_POST['city'];
		$address = $_POST['address'];

		$query = "INSERT INTO persons
		(Name, Email, Password, Contact, City, Address)
		VALUES
		('{$name}','{$email}','{$password}','{$contact}','{$city}','{$address}')";
		if(mysqli_query($con,$query)){
			session_start();
			$_SESSION['email']=$email;
			header('location: home.php');	
		}else{
			echo "error while inserting the records".mysqli_error($con);
		}
	}
?>