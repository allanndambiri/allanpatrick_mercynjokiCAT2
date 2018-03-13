<?php session_start();
	require "connection.php";

	if (isset($_POST['add_task'])) {
		extract($_POST);

		$query = "INSERT INTO tasks (task, username) VALUES ('$task', '$_SESSION[UserName]') ";
		$runInsert = mysqli_query($conn, $query);
		if (!$runInsert) {
			die("Query error: ".mysqli_error($conn));
		}

		else{
			echo "Insert success";
		}
	}
	function showTasks(){
		require "connection.php";
		$query = "SELECT * FROM tasks WHERE username = '$_SESSION[UserName]'";
		$queryResult = mysqli_query($conn, $query);

		if (!$queryResult) {
			die("Query error: ".mysqli_error($conn));
		}

		else{
			echo "<ul>";
			while($record = mysqli_fetch_assoc($queryResult)){
				echo "<li>".$record['task']."<a href='jobs.php?add_id=$record[id]'class='btn btn-success'><span class='glyphicon glyphicon-erase'></span></a><a href='jobs.php?del_id=$record[id]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a><br></li>";
			}
			echo "</ul>";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tasks</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
</head>
<body>
<h2 class="h">Make a choice of what task to do and know know better</h2>
	<div class="container-fluid">
		
	<div class="add-task">
		<form method="post" action="jobs.php">
			<p>Task <input type="text" name="task">
			<input type="submit" name="add_task" value="add a task" placeholder="add a task" class="btn btn-info">
			</p>
		</form>
	
	<div class="tasks">
		<?php 
			showTasks();
			require "footer.php";
		 ?>
	</div>
	</div>
	</div>
	<a href="dashboard.php"><button class="btn btn-warning">Dashboard</button></a>
</body>
</html>

<?php 
// if(isset($_GET['taskid'])){
// 	$_SESSION['id']=$_GET['id'];
// 	header("location:update.php");
// 	header("location:delete.php");
// }
if (isset($_GET['del_id'])) {
	//sql query
	$del="DELETE FROM tasks WHERE id ='$_GET[del_id]'";
	//run my query
	$run=mysqli_query($conn,$del);
	if ($run && mysqli_affected_rows($conn)==1) {
		echo "<h2>Delete Success</h2>";
		header("location:jobs.php");
	}else{
		die("Delete failed :" .mysqli_error($conn));
	}
}


	
	session_write_close();
 ?>
 <?php
 if (isset($_GET['add_id'])) {
	//sql query
	$add="UPDATE FROM tasks WHERE id ='$_GET[add_id]'";
	//run my query
	$run=mysqli_query($conn,$add);
	if ($run && mysqli_affected_rows($conn)==1) {
		echo "<h2>Edit Success</h2>";
		header("location:jobs.php");
	}else{
		die("Edit failed :" .mysqli_error($conn));
	}
}

 ?>