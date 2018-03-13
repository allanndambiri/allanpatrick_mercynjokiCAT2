<?php  
	session_start();
	require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Changepassword</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
</head>
<body>
<h2 class="h">Be configured here to reset your password</h2>
	<form action="reset.php" method="post">
		<div class="form-group e1">
		<label><span class="glyphicon glyphicon-user a1"></span></label>
			<input type="text" name="username" placeholder="enter name">
			</label>
			<br>
			<label><span class="glyphicon glyphicon-phone a1"></span></label>
			<input type="text" name="phone" placeholder="Enter user phone number">
			<br>
			<br>
			<input type="submit" name="submit" value="reset" class="btn btn-danger">
			
		</div>
	</form>

</body>
</html>
<?php
if (isset($_POST['submit'])) {

	extract($_POST);
 	
 	$query = "SELECT * FROM 6470users WHERE USERNAME = '$username'";
 	$result = mysqli_query($conn, $query);

 	if (!$result) {
 		die("Query error".mysqli_error($conn));
 	}

 	else{
 		$record = mysqli_fetch_assoc($result);

 		if ($record['PHONE'] === $phone) {
             header("location:newpass.php");

 		

 			
 		}
 	}
 } 
 require "footer.php";
 ?>