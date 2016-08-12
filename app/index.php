<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: home.php');
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
			<?php include("navbar-before-login.php");?>
			<div class="row" style="margin-top:80px;">
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 1</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e1.jpg" alt="Item"/></center>
							<p>  Mobile Phones Specifications, Prices, Photos, Reviews, News, Forums, Glossary, Fonefinder.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 2</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e2.jpg" alt="Item"/></center>
							<p>  Mobile Phones Specifications, Prices, Photos, Reviews, News, Forums, Glossary, Fonefinder.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 3</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e3.jpg" alt="Item"/></center>
							<p>  Mobile Phones Specifications, Prices, Photos, Reviews, News, Forums, Glossary, Fonefinder.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 4</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e4.jpg" alt="Item"/></center>
							<p>  Mobile Phones Specifications, Prices, Photos, Reviews, News, Forums, Glossary, Fonefinder.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 5</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e5.jpg" alt="Item"/></center>
							<p>  Mobile Phones Specifications, Prices, Photos, Reviews, News, Forums, Glossary, Fonefinder.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 6</div>
						</div>
						<div class="panel-body">
							<center><img src="images/e6.jpg" alt="Item"/></center>
							<p>  Mobile Phones Specifications, Prices, Photos, Reviews, News, Forums, Glossary, Fonefinder.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="about.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +91-123-000000</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("modal.php");?>
	</body>
</html>