<?php
session_start();
include_once("php/config.php");
$id=$_SESSION['username'];
$nquery=mysqli_query($conn,"select * from `student` where name='$id';" );
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
	<meta name= "viewport" content="width=device-width,initial-scale= 1"/>
</head>
<style>
body/* Only targeting <th> tag for gradient, change this to body to apply to whole */{
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
	background-size: 500%  700% ;
	-webkit-animation: Gradient 15s ease infinite; /*change time here for gradient*/
	-moz-animation: Gradient 15s ease infinite; /*change time here for gradient*/
	animation: Gradient 15s ease infinite; /*change time here for gradient*/
}
@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}

}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
</style>
<body>
	<div class="navbar navbar-inverse navbar-fixed" role="navigation">
		<div class="nav navbar-header">	
			<button class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"<center>
				<i>Students.com</i>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Edit Profile</font></a></li>
				<li><a href="change.php">Change Password</font></a></li>
				<li><a href="php/logout.php">Logout</font></a></li>				
			</ul>   
		</div>
	</div>
	<br><Br><br>
	<center>
		<div class="container">
			<div class="page-header">
				<h1>Welcome Student</h1>
			</div>
			<div class="row">
				<?php
				while($crow = mysqli_fetch_array($nquery)){
					?>
					
					<?php 

					echo "
					<div class='col-lg-12 col-sm-12 col-xs-12 col-md-7'>
					
					<div class='desc'>
					<b><h4>
					ROLL NO.:
					".$crow['roll_no']."</h4></b><br>
					<b><h4>
					NAME:
					".$crow['name']."</h4></b><br>
					<b><h4>
					COURSE:
					".$crow['course']."</h4></b><br><a href='edit.php?id=".$crow['roll_no']."'><button type='button' class='btn btn-primary'>EDIT</button></a>

					</div></div>";}

					?>
				</div>
			</div>
		</center>
		<div class="modal fade" id="addStudent" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<?php
					include_once('addStudent.php');
					?>
				</form>

			</div>
		</div>
	</div>  
	<script src="../js/jquery.js"></script>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html> 