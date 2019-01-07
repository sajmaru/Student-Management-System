<?php
$conn = mysqli_connect('localhost', 'root','','student');

if(!$conn){
    echo "Server issue";
    exit();
}
else{
    //
}$id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_STRING);
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

.signup-box {
    min-height: 490px;
    max-width: 370px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 10px 17.3px 50px 0 rgba(0,0,0,.2);
    position: relative;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}

.signup-box .signup-btn {
    border-radius: 22px;
    background-color: #dc3545;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    text-align: left;
    color: #fefefe;
    position: absolute;
    left: 0;
    right: 0;
    bottom: -20px;
    margin: 0 auto;
    width: 160px;
    text-align: center;
}
.signup-box h1 {
    font-size: 37px;
    font-weight: 600;
    text-align: center;
    color: #294362;
    padding-top: 30px;
}
</style>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $courseErr = $passwordErr ="";
$name = $email = $course = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["course"])) {
    $courseErr = "";
  } else {
    $course = test_input($_POST["course"]);
    // check if URL address syntax is valid
     
  }

  if (empty($_POST["password"])) {
    $cpasswordErr = "";
  } else {
    $password = test_input($_POST["password"]);
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
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
		
	</div>
	<br><Br><br>
	<center>
	<div class="container">
	<div class="signup-box">
				<h1>Registration</h1>
			<center>
									<!--form action="edit3.php" enctype="multipart/form-data" method="POST"-->
									<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
						           <form action="edit3.php" enctype="multipart/form-data" method="POST">


					<div class="form-group">

								
							<br><Br><br> 																
							<div class="form-group">
								<p><span class="error" style="color: #FF0000;">* Required field</span></p>

								<label for="contact-name" class="col-lg-3 control-label">Name<span class="error" style="color: #FF0000;">*<?php echo $nameErr;?></span>:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  name="name" placeholder="Enter Name" value="" required>
									
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
								</div>
							</div><br><Br>
							<label for="contact-name" class="col-lg-3 control-label">Email<span class="error" style="color: #FF0000;">*<?php echo $emailErr;?></span>:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  name="email" placeholder="Enter Email" value="" required>
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
								</div>
							</div><br><Br>
							<div class="form-group">
								<label for="contact-email" class="col-lg-3 control-label">course<span class="error" style="color: #FF0000;">*<?php echo $courseErr;?></span>:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="course"  placeholder="Enter Course" value=""  required>
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context here "contact-email "-->
								</div>
							</div><br><br>
							<div class="form-group">
								<label for="contact-name" class="col-lg-3 control-label">password 									
									<span class="error" style="color: #FF0000;">*</span>:</label>
								<div class="col-lg-9">
									<input type="password" class="form-control"  name="password" placeholder="Enter Password" " required>
								<!--inlabel whatever for="value" is should be same as id in input field  repeat div class form group for various 
									form context-->
								</div>
							</div><br><Br>
							
							<button  type="submit" name="submit" class="btn signup-btn ng-pristine ng-untouched ng-valid">SIGN UP</button>

							
						</form>
						</form>
					</center>
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