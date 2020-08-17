<?php 

$link = mysqli_connect("localhost","root","","6pm") or die("Not Connect");

extract($_POST);

if(isset($sub))
{
	$error = "";

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
			$error .= "Only Alphabets Support in User Name <br>";
		}
	}
	else
	{
		$error .= "Enter User Name <br>";
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
				$error .= "Email Alredy Exist <br>";
			}
		}	
		else
		{
			$error .= "Enter Valid Email ID <br>";
		}	
	}
	else
	{
		$error .= "Enter Email ID <br>";
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
					$error .= "Login Name Already Exist <br>";
				}
			}
			else
			{
				$error .= "Only Alphabets and Numbers allowed In Login Name <br>";
			}
		}
		else
		{
			$error .= "Enter Login Name Between 6 To 10 Characters <br>";
		}
	}
	else
	{
		$error .= "Enter Login Name <br>";
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
			$error .= "Enter Password Between 6 To 10 Characters <br>";
		}
	}
	else
	{
		$error .= "Enter Password <br>";
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
			$error .= "Password And Confirm Password Are Not Same <br>";
		}
		
	}
	else
	{
		$error .= "Enter Confirm Password <br>";
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
				$error .= "Mobile Number Already Exist <br>";
			}
		}
		else
		{
			$error .= "Enter Valid Mobile Number <br>";
		}
	}
	else
	{
		$error .= "Enter Mobile Number <br>";
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
			$error .= "Support only jpg or jpeg file <br>";
		}
		
	}
	else
	{
		$error .= "Please Select Image <br>";
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

	<?php

	if(isset($error))
	{
		echo "<label style='color:red;'>$error</label>";
	}

	?>


	<form method="post" enctype="multipart/form-data">

	<table>
		Name <input type="text" name="un" value="<?= @$un ?>">
		<br>
		Email <input type="text" name="em" value="<?= @$em ?>">
		<br>
		Login Name <input type="text" name="ln" value="<?= @$ln ?>">
		<br>
		Password <input type="password" name="pass">
		<br>
		Confirm Password <input type="password" name="cpass">
		<br>
		Mobile No. <input type="text" name="mn" value="<?= @$mn	 ?>">
		<br>
		Image : <input type="file" name="att">
		<br>
		
		<input type="submit" name="sub">
	</table>

	</form>

</body>
</html>