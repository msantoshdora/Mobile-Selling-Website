<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
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
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
					<h4>Change Password</h4>
					<form action="" method="">
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Old Password" required="true">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="New Password" required="true">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Re-type New Password" required="true">
						</div>
					  <button type="submit" class="btn btn-primary">Change</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>