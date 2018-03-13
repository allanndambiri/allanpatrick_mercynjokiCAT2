<!DOCTYPE html>
<html>
<head>
	<title>Login And Register</title>
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="container-fluid">
		<div class="jumbotron">
			<div align="center">
				<h2 class="text-info text">Join our services and enjoy super enticing things</h2>
				<h2 class="text-info text"><span class="glyphicon glyphicon-pencil">REGISTER!!</span></h2>
			</div>
			
		</div>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#login">Login</a></li>
			<li><a data-toggle="tab" href="#register">Register</a></li>
			
		</ul>

		<div class="tab-content">
			<div id="login" class="tab-pane fade in active">
				<h3>Login To Your Dashboard</h3>
				<form role="form" action="6470.php" method="post" class="bg-info">
					<div class="form-group">
						<label><span class="glyphicon glyphicon-user"></span>Username:</label>

						<input type="text" class="form-control" required name="user">
					</div>
					<div class="form-group">
						<label><span class="glyphicon glyphicon-lock"></span>Password:</label>
						<input type="password" class="form-control" required name="pass">
					</div>
					<div class="form-group">
						<a href="reset.php">Forgot Password?</a>
					</div>
					<button type="submit" name="login" class="btn btn-info">Login</button>
				</form>

			</div>
			<div id="register" class="tab-pane fade">
				<h3>Register</h3>
				<form role="form" action="6470.php" method="post" class="bg-success">
					<div class="form-group">
						<label><span class="glyphicon glyphicon-user"></span>Username:</label>
						<input type="text" class="form-control" required name="name" >
					</div>
					<div class="form-group">
						<label><span class="glyphicon glyphicon-lock"></span>Password:</label>
						<input type="password" class="form-control" required name="psw">
					</div>
					<div class="form-group">
						<label><span class="glyphicon glyphicon-phone"></span>Phone:</label>
						<input type="number" class="form-control" required name="number">
					</div>

					<button type="submit" name="register" class="btn btn-success">Register</button>
				</form>
			</div>

		</div>
		
	</div>



	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>


</body>
</html>
<?php
require "footer.php";
?>
