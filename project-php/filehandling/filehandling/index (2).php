<?php

include("captcha.php");

session_start();

extract($_POST);

if(isset($login))
{
	if($uans == $hans)	
	{
		if(is_dir("users/$em"))
		{
			$fo = fopen("users/$em/details.txt","r");
			$filepass = trim(fgets($fo));
			
			if($pass ==  $filepass)
			{
				if($c1 == "cook")
				{
					setcookie("useremail",$em,time()+3600);
					setcookie("userpass",$pass,time()+3600);
				}
				$_SESSION['email'] = $em;
				header("location:dashboard.php");
			}
			else
			{
				echo "Enter Correct Password";
			}
		
		}
		else
		{
			echo "Enter Correct Email";
		}
	}
	else
	{
		echo "Enter Correct Sum";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Panel</title>
</head>
<body>
	
	
	<?php
	
		if(!empty($_GET['user']))
		{
			echo $_GET['user']." Registration Successfully ";
		}
	
	
	?>
	
	
	<form method="post">
	<table border="1" align="center" bgcolor="skyblue">
		<tr>
			<th colspan="2">Login Panel</th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="text" name="em" value="<?php echo @$_COOKIE['useremail'] ?>" required></th>
		</tr>

		<tr>
			<th>Password</th>
			<th><input type="password" name="pass" value="<?php echo @$_COOKIE['userpass'] ?>" required></th>
		</tr>
		
		<tr>
			<th><?php echo $ques;?></th>
			<th><input type="text" name="uans" required><input type="hidden" name="hans" value="<?php echo $answer ?>"></th>
		</tr>

		<tr>
			<th colspan="2"><input type="checkbox" name="c1" value="cook">Remember Me</th>
		</tr>
		
		<tr>
			<th colspan="2">
				<input type="submit" name="login" value="Login">
				<a href="register.php"><input type="button" name="btn" value="Signup"></a>
			</th>
		</tr>
	</table>
	</form>
</body>
</html>