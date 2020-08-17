<?php include('dbcon.php');  ?>
<?php
session_start();
if(isset($_POST['login']))
{
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];
    $sql = "select `email`,`password` from `admin` where `email`='$login_email' and `password`='$login_password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
        {
            echo "successfully Login";
            $_SESSION['email'] = $login_email;
            header("location:show-data.php");
        }
    else
        {
            echo "Try again login password does not matched";
            header("location:index.php");
        }
}


?>

<html>
    <head>
    <title>Home</title>
    </head>
    <body bgcolor="Skyblue">
        <center><h2>Home Page</h2></center>
        <form method="post">
	<table border="1" align="center" bgcolor="yellow" style="width:50%;height:50%;">
		<tr>
			<th colspan="2">Login Panel</th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="eamil" name="login_email" required></th>
		</tr>

		<tr>
			<th>Password</th>
			<th><input type="password" name="login_password" required></th>
		</tr>

		<tr>
			<th colspan="2">
				<input type="submit" name="login" id="login" value="Login">
				<a href="register.php"><input type="button" name="btn" value="Signup"></a>
			</th>
		</tr>
	</table>
	</form>
    </body>
</html>