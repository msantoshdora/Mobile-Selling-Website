<?php
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['e-mail'];
		$message = $_POST['message'];
		$query = "INSERT INTO contacts
		(Name, Email, Message)
		VALUES
		('{$name}','{$email}','{$message}')";
		if(mysqli_query($con,$query)){
			echo "Thank-you for your message. We will get back to you as soon as possible. Go back to website <a href='index.php'>here</a>";
		}else{
			echo "error while inserting the records".mysqli_error($con);
		}
	}
?>