<?php
include_once("config.php");
$id=$_REQUEST['username'];
$password=$_REQUEST['password'];
$category=$_REQUEST['category'];
if ($category=='admin') {
	$sql="select * from admin where username='$id' and password='$password'";
	$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	if (mysqli_num_rows($result)>0){
		session_start();
$row=mysqli_fetch_assoc($result);//fetches record
$_SESSION['username']=$row['username'];
header('location:../admin/index.php');
}
else
{
	echo "<script>";
	echo"
	alert('invalid credentials');
	";

	echo "window.location.href='../index.php'";
	echo "</script>";
}
}
else{
	$sql="select * from student where name='$id' and password='$password'";
	$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	if (mysqli_num_rows($result)>0){
		session_start();
$row=mysqli_fetch_assoc($result);//fetches record
$_SESSION['username']=$row['name'];
$_SESSION['name']=$row['name'];
$_SESSION['course']=$row['course'];

header('location:../student/index.php');	
}

	else
	{
		echo "<script>";
		echo"
		alert('invalid credentials');
		";

		echo "window.location.href='../index.php'";
		echo "</script>";
	}
}
	?>