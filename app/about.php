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
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-before-login.php"); ?>
			<div class="row" style="margin-top:80px;">
				<div class="container text-justify">
					<div class="col-sm-4">
						<div class="panel">
							<div class="panel-heading">
								<div class="panel-title">WHO WE ARE</div>
							</div>
							<div class="panel-body">
								<img src="images/about-img.jpg" alt="Item"/>
								<p>E-storeE-store  is an American electronic commerce company with headquarters in Washington. It is the largest Internet-based retailer in the United States. E- Store started as an online blog, but soon diversified, selling mobile phones. E- Store also sells certain low-end products like USB cables and other accessories.
								E- Store has separate retail websites for United States, United Kingdom & Ireland, France, Canada, Germany, Italy, Spain, the Netherlands, Australia, Brazil, Japan, China, India and Mexico. Amazon also offers international shipping to certain other countries for some of its products.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel">
							<div class="panel-heading">
								<div class="panel-title">OUR HISTORY</div>
							</div>
							<div class="panel-body">
								<p>
									<div style="color:#0000ff">1998-</div>
									<div>The company was founded in 1998, spurred by what Velos called his "Initiating framework", which described his efforts as an initiate to participate in the Internet business boom during that time. In 1998, Velos left his employment as president of Ofcol & Co. and moved to Seattle. He began to work on a business plan for what would eventually become E- Store.</div>
								</p>
								<p>
									<div style="color:#0000ff">2002-</div>
									<div>In January 2002, E- store has received a funding of $12 million from Venture Partners and Indo-US Venture Partners.</div>
								</p>
								<p>
									<div style="color:#0000ff">2008-</div>
									<div>In July 2008, the company raised a further $45 million from Bessemer Venture Partners, along with existing investors Venture Partners and Indo-US Venture Partners.</div>
								</p>
								<p>
									<div style="color:#0000ff">2015-</div>
									<div>E- Store received its 3rd round of funding of $133 million on Feb-2015. The 3rd round of funding was led by Fcom with all the current institutional investors, including Kalaari Capital, Venture Partners, Bessemer Venture Partners all participating.</div>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel">
							<div class="panel-heading">
								<div class="panel-title">OPPORTUNITIES</div>
							</div>
							<div class="panel-body">
								<p><b>Available Roles</b></p>
								
								<p>1. Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]</p>
								<p>2. Business Apprentice [6 Months Internship]</p>
								<p>3. Manager at backend operations [Full Time Role + also available as a 6 Months Internship]</p>
							</div>
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
		<?php include("modal.php"); ?>
	</body>
</html>