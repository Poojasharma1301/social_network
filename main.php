<!DOCTYPE html>
<html>
<head>
	<title>Knowledge AND Research login and signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 40%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 40%;
		transform: translate(-50%, -50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
		background-color:#4682B4;
	}
	#signup:hover{
		width: 60%;
		background-color: #fff;
		color: black;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color:#fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color:#4682B4;
	}

</style>
<body>
	<div class="row alert-info">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">Knowledge AND Research</h1></center>
			</div>
		</div>
	</div>
	<div class="row alert-info">
		<div class="col-sm-6" style="left:0.5%;">
			<img src="images/close.jpg" class="img-rounded" title="Knowledge AND Research" width="650px" height="565px">
			<div id="centered1" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Interests.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Hear what People are doing.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the projects and post your interests.</strong></h3></div>
		</div>
		<div class="col-sm-6 alert-info" style="left:8%:">
		
			<h2 class="text-center"><strong>See what's happening in <br> the world right now</strong></h2><br><br>
			<h4 class="text-center"><strong>join Knowledge AND Research today.</strong></h4>
			<form method="post" action="" class="text-center">
				<button id="signup" class=" text-center btn btn-default btn-lg"  name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-default btn-lg"   name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
			<h6 class="text-center">Created by Pooja Sharma<br>Contact...s.pooja1301@gmail.com</h6>
		</div>
	</div>
</body>
</html>