<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
 
  <link rel="icon" type="image/ico" href="logo.jpg" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width,initial-scale=1"/>


<!DOCTYPE html>
<html>

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name= "viewport" content="width=device-width,initial-scale= 1"/>
</head>
<body>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

.customize-radio label > input[type = 'radio'] {
    visibility: hidden;
    position: absolute;
}
.customize-radio label > input[type = 'radio'] ~ span{
    cursor: pointer;
    width: 27px;
    height: 24px;
    display: inline-block;
    background-size: 27px 24px;
    background-repeat: no-repeat;
}

.admin-img{
    background-image: url('admin_.png');
}
.student-img{
    background-image: url('student.jpg');
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
} 
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
#meu_div{
  width: 100px;
  height: 100px;
  

}
.spinEffect{
   transform: rotate(45deg);
   -webkit-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
}

/*Animação com loop infinito (até clicar)*/
/* Safari and Chrome */
/*@-webkit-keyframes rotating  {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotating {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.rotating {
  -webkit-animation: rotating 2s linear infinite;
  -moz-animation: rotating 2s linear infinite;
  -ms-animation: rotating 2s linear infinite;
  -o-animation: rotating 2s linear infinite;
  animation: rotating 2s linear infinite;
}*/

.signup-box {
    min-height: 490px;
    max-width: 370px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 10px 17.3px 50px 0 rgba(0,0,0,.2);
    position: relative;
}


</style>

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
				<li><a href="index.php">LOGIN</font></a></li>
			</ul>   
		</div>
	</div>
	<br><Br><br>
	<center>
		<div class="container">
					<div class="signup-box">

			<div class="page-header">
			
				<h1 style="    font-family: inherit;">Login Here!</h1>
			</div>
			<form action="php/login.php" method="POST"> 
				   <div class="customize-radio" >
				   <div id="meu_div">
				     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
					 <script  src="js/index.js"></script>


				<label><input type="radio" name="category" value="admin"> <br>
				          <span class="admin-img "></span>
						  Admin
					</div>

				</label>&nbsp;&nbsp;
				<label><input type="radio" name="category" value="student"> <br>
				          <span class="student-img "></span>
						  Student

				</label>
				
				</div>
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="submit"  class="btn btn-primary" name="submit" value="Login">
				</div>
				</form>
				<div class="form-group">
				<form action="php/register.php" method="POST">
				<input href="register.php" type="submit" name="Register" class="btn btn-default" value="Register"> 
				</form>
				</div>

			
			
		</div>
		</div>
	</center>
	<script src="js/jquery.js"></script>
	

	<script src="js/bootstrap.min.js"></script>

<footer class="w3-container  w3-center w3-margin-top footer">
  <p>Find me on social media.</p>

  <a href= "https://www.facebook.com/" class="fa fa-facebook-official w3-hover-opacity" style="color: white;"></a>
  <a href="https://www.instagram.com/" class="fa fa-instagram w3-hover-opacity" style="color: white;"></a>
  <a href="https://www.snapchat.com/" class="fa fa-snapchat w3-hover-opacity" style="color: white;"></a>
  <a href="https://www.linkedin.com/feed/" class="fa fa-linkedin w3-hover-opacity" style="color: white;"></a>
</footer>
</body>
</html></head>
<body>

</body>
</html>