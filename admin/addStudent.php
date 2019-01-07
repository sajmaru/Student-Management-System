<?php
include_once("php/config.php");
$id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_STRING);
session_start();
$sql="select * from student where roll_no='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if (mysqli_num_rows($result)>0){
$row=mysqli_fetch_assoc($result);//fetches record
$_SESSION['username']=$id;
$name=$row['name'];
$course=$row['course'];
$password=$row['password'];
}


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
				<li><a href="index.php">Edit Student</font></a></li>
				<li> <a href="#addStudent" data-toggle="modal">Add Student</a></li>
				<li><a href="change.php">Change Password</font></a></li>
				<li><a href="php/logout.php">Logout</font></a></li>				
			</ul>  
		</div>
	</div>
	<br><Br><br>
	<center>
	<div class="page-header">
				<h1>Add Student</h1>
			</div>
		<div class="container">
			<center>
									<form action="php/edit1.php" enctype="multipart/form-data" method="POST">

					<div class="form-group">
						
								
							<br><Br><br>
							<div class="form-group">
								<label for="contact-name" class="col-lg-3 control-label">Name :</label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  name="name" placeholder="Enter Name" value="" required>
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
								</div>
							</div><br><Br>
							<div class="form-group">
								<label for="contact-email" class="col-lg-3 control-label">course :</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="course"  placeholder="Enter Course" value=""  required>
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context here "contact-email "-->
								</div>
							</div><br><br>
							<div class="form-group">
								<label for="contact-name" class="col-lg-3 control-label">password :</label>
								<div class="col-lg-9">
									<input type="password" class="form-control"  name="password" placeholder="Enter Password" value="<?php echo $password;?>" required>
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
								</div>
							</div><br><Br>
							
							<input type="submit" name="submit" value="Save" class="btn btn-primary">
						</form>
					</center>
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