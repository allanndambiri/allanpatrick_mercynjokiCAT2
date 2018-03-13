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
<h2 class="h">Change password and move on</h2>
	<form action="changepassword.php" method="post">
		<div class="form-group f1">
			<label><span class="glyphicon glyphicon-user  a1"></span></label>
			<input type="text" name="username" placeholder="enter name">
			<br>
			<label><span class="glyphicon glyphicon-lock  a1"></span></label>
			<input type="password" name="passcu" placeholder="enter current password">
			<br>
			<label><span class="glyphicon glyphicon-lock  a1"></span></label>
			<input type="password" name="passne" placeholder="enter new password">
			<br>
			<br>
			<input type="submit" name="submit" value="changepassword" class="btn btn-success">
			
		</div>
	</form>

</body>
</html>
<?php
if (isset($_POST['submit'])) {

	extract($_POST);
 	
 	$query = "SELECT * FROM 6470users WHERE USERNAME = '$_SESSION[UserName]'";
 	$result = mysqli_query($conn, $query);

 	if (!$result) {
 		die("Query error".mysqli_error($conn));
 	}

 	else{
 		$record = mysqli_fetch_assoc($result);

 		if ($record['PASSWORD_HASH'] === $passcu) {
 			$queryUpdate = "UPDATE 6470users SET PASSWORD_HASH = '$passne' WHERE USERNAME = '$_SESSION[UserName]'";
 			$insertResult = mysqli_query($conn, $queryUpdate);

 			if (!$insertResult) {
 				die("Query error: ".mysqli_error($conn));
 			}

 			else{
 				header("location:reg.php");
 				echo "Password changed";
 			}
 		}
 	}
 } 
 require "footer.php";
 ?>