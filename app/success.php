<?php
	error_reporting(0);
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
?>
<?php
$id= $_POST['itemsid'];
$to = $_SESSION['email'];
$subject = "Test mail";
$message = "Your order has been confirmed. Your items will be delivered soon !";
mail($to, $subject, $message, "");
// Mail to the item owner
$to = $_SESSION['email'];
$to_owner = "owner@estore.com";
$subject_owner = "New Order";
$message_owner = "New Order made by ".$to.".<br> The items Id are ";
$message_owner = $message_owner.$_POST['itemsid'];
mail($to_owner, $subject_owner, $message_owner, "");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-after-login.php");?>
		<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
			<h5 align="center">Thank you for ordering from E-Store.
			The order shall be delivered to you shortly.</h5><hr>
			<p align="center">Order some more electronic items <a href="home.php" style="color:#0000f5";>here.</a></p>
		</div>
	</body>
</html>