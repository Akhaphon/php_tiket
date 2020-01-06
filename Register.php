<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
<meta charset="UTF-8">
<title>Register - CSTICKET</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div id="header">
		<div>
			<div id="logo">
				<a href="Home.php"><img src="images/concert1_2.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li><a href="Home.php">Home</a></li>
				<li><a href="Buy.php">Buy Ticket</a></li>
				<li class="selected"><a href="Register.php">Register</a></li>
				<li><a href="Card.php">CardInformation</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>

	<div id="contents">
		<div id="Register">
			<div class="container">
				<h2>Please Register</h2>
				<form>

					<div class="form-group">
						<label for="fn">First Name:</label> <input class="form-control"
							id="pwd" placeholder="Enter firstname" name="fn">
					</div>

					<div class="form-group">
						<label for="ln">Last Name:</label> <input class="form-control"
							id="pwd" placeholder="Enter lastname" name="ln">
					</div>

					<div class="form-group">
						<label for="ic">ID Card:</label> <input class="form-control"
							id="pwd" placeholder="Enter idcard" name="ic">
					</div>

					<div class="form-group">
						<label for="dob">Date of Birth:</label> <input
							class="form-control" id="pwd" placeholder="Enter dateofbirth"
							name="dob">
					</div>

					<div class="form-group">
						<label for="email">Email:</label> <input type="email"
							class="form-control" id="email" placeholder="Enter email"
							name="email">
					</div>

					<div class="form-group">
						<label for="pwd">Password:</label> <input type="password"
							class="form-control" id="pwd" placeholder="Enter password"
							name="pswd">
					</div>

					<div class="form-group">
						<label for="mbf">Mobile Phone:</label> <input class="form-control"
							id="pwd" placeholder="Enter mobilephone" name="mbf">
					</div>


					<label for="gender">Gender:</label><br> <input type="checkbox"
						id="female" name="example1"> <label for="female">Female</label><br>
					<input type="checkbox" id="defaultCheck" name="example2"> <label
						for="male">Male</label><br>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>
	</div>

	<div id="footer">
		<div id="connect">
			<a href="http://freewebsitetemplates.com/go/facebook/"
				target="_blank" class="facebook"></a><a
				href="http://www.freewebsitetemplates.com/misc/contact/"
				target="_blank" class="email"></a><a
				href="http://freewebsitetemplates.com/go/twitter/" target="_blank"
				class="twitter"></a><a
				href="http://freewebsitetemplates.com/go/googleplus/"
				target="_blank" class="googleplus"></a>
		</div>
		<p>© 2023 Vistida. All Rights Reserved.</p>
	</div>
</body>
</html>
