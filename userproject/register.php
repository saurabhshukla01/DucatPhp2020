<?php

extract($_POST);

if(isset($sub))
{
	if(is_dir("users/$em"))
	{
		echo "Email Already Exist";
	}
	else
	{
		mkdir("users/$em");
		file_put_contents("users/$em/details.txt","$pass\n$un\n$gen\n$city");
		//echo "Registration Successfully";
		header("location:index.php?user=$un");
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Regestration page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container font-weight-bold">
  <div class="jumbotron col-md-6" style="margin-left:25%;margin-top:10%;">
    <h3 class="pb-4 text-center">User register Form</h3>
    <form method="POST">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" placeholder="Enter email" id="un" name="un">
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="em" name="em">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pass" name="pass">
          </div>
          <div class="form-group">
             <label for="pwd">Gender:</label>
             <div class="form-check-inline pl-4">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gen">Male
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gen">Female
                  </label>
                </div>
          </div>
          <div class="form-group">
              <label for="sel1">Select City:</label>
              <select class="form-control" id="city" name="city">
                <option selected disabled> ---- Select one city ---- </option>
                <option value="noida">Noida</option>
                <option value="Kanpur">Kanpur</option>
                <option value="Dehli">Dehli</option>
                <option value="Agra">Agra</option>
              </select>
          </div>
          <!--<div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>-->
          <button type="submit" class="btn btn-primary" id="sub" name="sub">Register</button>
    </form>
  </div>
</div>

</body>
</html>