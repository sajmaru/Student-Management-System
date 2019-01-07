<link href='../../css/bootstrap.css' rel='stylesheet'> 
<?php
include_once("config.php");
session_start();
$id=rand(2000,50000);
$rid=$_SESSION['username'];
$name=$_POST['name'];

$password=$_POST['password'];

if(isset($_POST['submit']))
{

	$name=$_POST['name'];
		
	$password=$_POST['password'];
		$sql="UPDATE student SET password='".$password."' WHERE roll_no='".$rid."'";   
		if(mysqli_multi_query($conn,$sql)){
			echo "<br><Br><div class='container try'>";
			echo"
			<div class='alert alert-success'>
			<strong>Congratulations! You have updated details</strong>  
			</div>
			";

			echo "<div class='alert alert-info'>
			<center> <a href='../index.php'>View profile</a>.</center>
			</div>";
			echo "</div>";
		}
		else
			die('Invalid query: ' .mysqli_error($conn));
	
}
else{
	echo "wrong";
	exit();
}

?>