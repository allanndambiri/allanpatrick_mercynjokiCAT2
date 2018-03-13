<?php 
$server="localhost";
$user="root";
$password="";
$dbname="6470";

$conn=mysqli_connect($server,$user,$password,$dbname);


if (!$conn) {
	die("Database connection failed :" .mysql_connect_error());
}else{
echo "success";
}


 ?>