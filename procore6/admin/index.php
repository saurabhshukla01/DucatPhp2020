<?php

include("config/database.php");
session_start();

if(!empty($_SESSION['aemail']))
{
	// if user is login
	header("location:dashboard.php");
}

extract($_POST);

if(isset($login))
{
	$em_error = $pass_error = "";
	$em_valid = $pass_valid = false;
	
	
	// email validation
	$em = trim($em);
	
	if(!empty($em))
	{
		if(filter_var($em,FILTER_VALIDATE_EMAIL))
		{
			$result = mysqli_query($link,"select email from admin where email='$em'");
			
			if(mysqli_num_rows($result) == 1)
			{
				$em_valid = true;
			}
			else
			{
				$em_error = "Email ID Not Exist";
			}
		}
		else
		{
			$em_error = "Enter Valid Email";
		}
	}
	else
	{
		$em_error = "Enter Email ID";
	}
	
	
	
	// Password Validation
	
	$pass = trim($pass);
	
	if(!empty($pass))
	{
		if(strlen($pass) >=6 && strlen($pass) <= 10)
		{
			$pass_valid = true;
		}
		else
		{
			$pass_error = "Password Must Between 6 To 10 Characters";
		}
	}
	else
	{
		$pass_error = "Enter Password";
	}
	
	
	
	// if no error in validation
	if($em_valid && $pass_valid == true)
	{
		$result = mysqli_query($link,"select * from admin where email='$em'");
		$arr = mysqli_fetch_assoc($result);
		
		if(md5($pass) == $arr['password'])
		{
			$_SESSION['aname'] = $arr['name'];
			$_SESSION['aemail'] = $arr['email'];
			header("location:dashboard.php");
		}
		else
		{
			$pass_error = "Enter Correct Password";
		}
	}
}


?>
<html>
	<head>
		<title>Admin Panel</title>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
		
		<main>
			<header class="jumbotron"><h1 class="text-center">Admin Panel</h1></header>
			
			<section class="container">
				<form method="post">
			
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="em" value="<?=@$em?>" class="form-control">
					<?php
					if(!empty($em_error))
					{
						echo "<label class='text-danger'>$em_error</label>";
					}
					?>
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control">
					<?php
					if(!empty($pass_error))
					{
					?>
						<label class="text-danger"><?=$pass_error?></label>
					<?php
					}
					?>
				</div>
				
				<div>
					<input type="submit" name="login" value="Login" class="btn btn-success">
				</div>
				
				</form>
			</section>
		</main>
		
	</body>
</html>