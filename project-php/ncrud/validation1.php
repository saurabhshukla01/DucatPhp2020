<?php 

$link = mysqli_connect("localhost","root","","6pm") or die("Not Connect");

extract($_POST);

if(isset($sub))
{
	$un_error = $em_error = $login_error = $pass_error = $cpass_error = $mn_error =  $img_error = "";

	$un_valid = $em_valid = $login_valid = $pass_valid = $cpass_valid = $mn_valid = $img_valid = false;


	// Name Validation
	
	$un = trim($un);

	if(!empty($un))
	{
		$format = "/^[a-zA-Z]+$/";

		if(preg_match($format,$un))
		{
			$un_valid = true;
		}
		else
		{
			$un_error = "Only Alphabets Support in User Name";
		}
	}
	else
	{
		$un_error = "Enter User Name ";
	}




	// Email Validation

	$em = trim($em);

	if(!empty($em))
	{
		if(filter_Var($em,FILTER_VALIDATE_EMAIL))
		{
			$result = mysqli_query($link,"select email from users where email='$em'");
			$record = mysqli_num_rows($result);

			if($record == 0)
			{
				$em_valid = true;
			}
			else
			{
				$em_error = "Email Alredy Exist";
			}
		}	
		else
		{
			$em_error = "Enter Valid Email ID";
		}	
	}
	else
	{
		$em_error = "Enter Email ID";
	}



	// Login Name

	$ln = trim($ln);

	if(!empty($ln))
	{

		if(strlen($ln)>=6 && strlen($ln)<=10)
		{
			$format = "/^[a-zA-Z0-9]{6,10}$/";

			if(preg_match($format,$ln))
			{
				$result = mysqli_query($link,"select login_name from users where login_name='$ln'");
				$record = mysqli_num_rows($result);

				if($record == 0)
				{
					$login_valid = true;
				}
				else
				{
					$login_error = "Login Name Already Exist";
				}
			}
			else
			{
				$login_error = "Only Alphabets and Numbers allowed In Login Name";
			}
		}
		else
		{
			$login_error = "Enter Login Name Between 6 To 10 Characters";
		}
	}
	else
	{
		$login_error = "Enter Login Name";
	}

	
	
	// Password Validation
	
	$pass = trim($pass);
	
	if(!empty($pass))
	{
		if(strlen($pass)>=6 && strlen($pass)<=10)
		{
			$pass_valid = true;
		}
		else
		{
			$pass_error = "Enter Password Between 6 To 10 Characters";
		}
	}
	else
	{
		$pass_error = "Enter Password";
	}
	
	
	// Confirm Password Validation
	
	$cpass = trim($cpass);
	
	if(!empty($cpass))
	{
		if($pass == $cpass)
		{
			$cpass_valid = true;
		}
		else
		{
			$cpass_error = "Password And Confirm Password Are Not Same";
		}
		
	}
	else
	{
		$cpass_error = "Enter Confirm Password";
	}
	
	
	// Mobile Number Validation
	
	$mn = trim($mn);
	
	if(!empty($mn))
	{
		$format = "/^[6-9]{1}[0-9]{9}$/";
		
		if(preg_match($format,$mn))
		{
			$result = mysqli_query($link,"select mobile from users where mobile='$mn'");
			$record = mysqli_num_rows($result);
			
			if($record == 0)
			{
				$mn_valid = true;
			}
			else
			{
				$mn_error = "Mobile Number Already Exist";
			}
		}
		else
		{
			$mn_error = "Enter Valid Mobile Number";
		}
	}
	else
	{
		$mn_error = "Enter Mobile Number";
	}
	
	
	
	// Image Validation
	
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	
	if(!empty($fn))
	{
		$arr = explode('.',$fn);
		$ext = end($arr);
		$ext = strtolower($ext);
		
		if($ext=="jpg" || $ext=="jpeg")
		{
			$fnn = rand().'.'.$ext;
			
			$img_valid = true;
		}
		else
		{
			$img_error = "Support only jpg or jpeg file";
		}
		
	}
	else
	{
		$img_error = "Please Select Image";
	}
	

	if($un_valid && $em_valid && $login_valid && $pass_valid && $cpass_valid && $mn_valid && $img_valid == true)
	{
		// if no error in validation
		
		if(move_uploaded_file($tmp,"images/".$fnn))
		{
			if(mysqli_query($link,"insert into users (name,email,login_name,password,mobile,image) values ('$un','$em','$ln','$pass','$mn','$fnn')"))
			{
				//header("location:validation.php");
				echo "Data Insert Successfully";
			}
			else
			{
				unlink("images/".$fnn);
				$error = mysqli_error($link);
			}
		}
		else
		{
			$error = "File Uploading Error <br>";
		}
	}

}



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
</head>
<body>

	


	<form method="post" enctype="multipart/form-data">

	<table>
		Name <input type="text" name="un" value="<?= @$un ?>"><?php if(isset($un_error)){	echo "<label style='color:red;'>$un_error</label>";} ?>
		<br>
		Email <input type="text" name="em" value="<?= @$em ?>"><?php if(isset($em_error)){	echo "<label style='color:red;'>$em_error</label>";} ?>
		<br>
		Login Name <input type="text" name="ln" value="<?= @$ln ?>"><?php if(isset($login_error)){	echo "<label style='color:red;'>$login_error</label>";} ?>
		<br>
		Password <input type="password" name="pass"><?php if(isset($pass_error)){	echo "<label style='color:red;'>$pass_error</label>";} ?>
		<br>
		Confirm Password <input type="password" name="cpass"><?php if(isset($cpass_error)){	echo "<label style='color:red;'>$cpass_error</label>";} ?>
		<br>
		Mobile No. <input type="text" name="mn" value="<?= @$mn	 ?>"><?php if(isset($mn_error)){	echo "<label style='color:red;'>$mn_error</label>";} ?>
		<br>
		Image : <input type="file" name="att"><?php if(isset($img_error)){	echo "<label style='color:red;'>$img_error</label>";} ?>
		<br>
		
		<input type="submit" name="sub">
	</table>

	</form>

</body>
</html>