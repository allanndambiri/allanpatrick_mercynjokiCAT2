<!DOCTYPE html>
<?php
require"connection.php";
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New password</title>
    <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="newpass.php" method="post">
<div class="form-group d1">
<label><span class="glyphicon glyphicon-lock a1"></span></label>
<input type="password" name="pass" placeholder="Enter your password">
<br>
<input type="submit" name="submit" value="Reset password" class="btn btn-warning" required>

</div>



</form>
    
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    $query="UPDATE 6470users SET PASSWORD_HASH ='$pass'WHERE USERNAME ='$_SESSION[UserName]'";
    $result=mysqli_query($conn,$query);
    if(!$result){
        die("password reset failed".mysqli_error($conn));
        
    }else{
        echo"<h4>password changed</h4>";
    }
} 

require "footer.php";
?>