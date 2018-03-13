<?php 
	//Require DB connection
	require "connection.php";
	session_start();
	//Check if user is registered
	if (isset($_POST['login'])){
		extract($_POST);
		$query = "SELECT * FROM 6470users WHERE USERNAME = '$user' AND  PASSWORD_HASH = '$pass';";
		$run = mysqli_query($conn, $query);

		$count = mysqli_num_rows($run);
		if ($count == 1) {
			$_SESSION['UserName'] = $user;
			

			// header("location: dashboard.php");
			echo "<h2>Login You in " .$_SESSION['UserName'] . " !! </h2>";
			header("location:dashboard.php");
		} else{
			echo "<h1>Username or Password You entered is incorrect</h2>";
		}
	} elseif (isset($_POST['register'])) {
		//Then Register the user to the DB
		extract($_POST);

		$query = "INSERT INTO 6470users(USERNAME,PASSWORD_HASH,PHONE) VALUES('$name', '$psw', '$number');";
		$insert = mysqli_query($conn, $query);

		if ($insert){
			echo "<h2>User Registered</h2>";
			header("location:reg.php");

		} else{
			echo "<h1>User Registration Failed</h1>" . mysqli_error($conn);
		}
	}

 ?>