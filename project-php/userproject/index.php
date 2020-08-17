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
<html lang="en">
<head>
  <title>Home page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php

		if(!empty($_GET['user']))
		{
			echo $_GET['user']." Registration Successfully ";
		}


	?>
<div class="container font-weight-bold">
  <div class="jumbotron col-md-6" style="margin-left:25%;margin-top:10%;">
    <h3 class="pb-4 text-center">User Login Form</h3>
    <form method="POST">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="em" name="em" value="<?php echo @$_COOKIE['useremail'] ?>" required>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pass" name="pass" value="<?php echo @$_COOKIE['userpass'] ?>" required>
          </div>
          <div class="form-group row" style="font-size:24px;">
               <label class="col-md-4" for="captcha"><?php echo $ques; ?></label>
               <input type="text" class="form-control col-md-3" value="" name="uans">
               <input type="hidden" class="form-control col-md-3" name="hans" value="<?php echo $answer; ?>">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" name="c1" value="cook" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary col-md-4" id="login" name="login">Login</button>
          <input type="button" class="btn btn-info col-md-4" onclick="window.location.href='register.php'" value="register">
    </form>
  </div>
</div>

</body>
</html>