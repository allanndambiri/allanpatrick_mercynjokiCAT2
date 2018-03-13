
<?php
require"connection.php";
session_start();
	//SQL syntax for updating
	//UPDATE table SET col1 ='value' WHERE id=5;


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <title>Document</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
 </head>
 <body>
	 <form action="update.php" method="post">
	 <div class="form-group e1">
		 <input type="text" name="task" placeholder="Enter a task">
		 <input type="submit" name="submit" value="add a task">
		 </div>
	 </form>
	 
 </body>
 </html>
 <?php

 if (isset($_POST['submit'])) {
	extract($_POST);
	
$query="UPDATE tasks SET task ='$task' WHERE id='".$_SESSION['id']."'";
$update=mysqli_query($conn, $query);
 if (!$update) {
	 die("<h3>UPDATE FAILED".mysqli_error($conn));
 	
 }elseif($update && mysqli_affected_rows($conn)==1){
	header("location:jobs.php");
	echo "<h3>RECORD UPDATED</h3>";
 }else {
	 echo"unknown error";
 }
 } 
 

 ?>
