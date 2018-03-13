<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<h2>MY DASHBOARD | <?php echo $_SESSION['UserName']; ?></h2>
		</div>
	</div>
	<nav class="navbar navbar-inverse">
			<div class="container-fluid ">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Welcome</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="dashboard.php">Home</a></li>
					<li><a href="jobs.php">Tasks</a></li>
					<li><a href="reg.php">Log out <span class="glyphicon glyphicon-off"></span></a></li>
					
					
				</ul>
			</div>
		</nav>
		<h2> Great number terminated Great prosperity in to our users and that is <h1>6470</h1></h2>
		<a href="changepassword.php">Change Password?</a>

</body>
</html>

<?php 
	session_write_close();
	require "footer.php";
 ?>