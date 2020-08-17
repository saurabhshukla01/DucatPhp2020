<?php

include("admin/config/database.php");
session_start();

extract($_POST);

if(isset($login))
{
	$result = mysqli_query($link,"select * from users where email='$uid' or mobile='$uid'");
	
	if(mysqli_num_rows($result) > 0)
	{
		$arr = mysqli_fetch_assoc($result);
		
		if($pass == $arr['password'])
		{
			$_SESSION['username'] = $arr['name'];
			$_SESSION['useremail'] = $arr['email'];
			$_SESSION['userimage'] = $arr['image'];
			header("location:index.php");
		}
		else
		{
			$msg = "Enter Correct Password";
		}
	}
	else
	{
		$msg = "Enter Correct Email or Mobile";
	}
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
		  
		  <style type="text/css">
		  	
		  	/* login form css */

		  	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

			.login-page {
			  width: 360px;
			  padding: 8% 0 0;
			  margin: auto;
			}
			.form {
			  position: relative;
			  z-index: 1;
			  background: #FFFFFF;
			  max-width: 360px;
			  margin: 0 auto 100px;
			  padding: 45px;
			  text-align: center;
			  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			}
			.form input {
			  font-family: "Roboto", sans-serif;
			  outline: 0;
			  background: #f2f2f2;
			  width: 100%;
			  border: 0;
			  margin: 0 0 15px;
			  padding: 15px;
			  box-sizing: border-box;
			  font-size: 14px;
			}
			.form button {
			  font-family: "Roboto", sans-serif;
			  text-transform: uppercase;
			  outline: 0;
			  background: #4CAF50;
			  width: 100%;
			  border: 0;
			  padding: 15px;
			  color: #FFFFFF;
			  font-size: 14px;
			  -webkit-transition: all 0.3 ease;
			  transition: all 0.3 ease;
			  cursor: pointer;
			}
			.form button:hover,.form button:active,.form button:focus {
			  background: #43A047;
			}
			.form .message {
			  margin: 15px 0 0;
			  color: #b3b3b3;
			  font-size: 12px;
			}
			.form .message a {
			  color: #4CAF50;
			  text-decoration: none;
			}
			.form .register-form {
			  display: none;
			}
			.container {
			  position: relative;
			  z-index: 1;
			  max-width: 300px;
			  margin: 0 auto;
			}
			.container:before, .container:after {
			  content: "";
			  display: block;
			  clear: both;
			}
			.container .info {
			  margin: 50px auto;
			  text-align: center;
			}
			.container .info h1 {
			  margin: 0 0 15px;
			  padding: 0;
			  font-size: 36px;
			  font-weight: 300;
			  color: #1a1a1a;
			}
			.container .info span {
			  color: #4d4d4d;
			  font-size: 12px;
			}
			.container .info span a {
			  color: #000000;
			  text-decoration: none;
			}
			.container .info span .fa {
			  color: #EF3B3A;
			}
			


		  </style>
	</head>
	<body>
		
		<?php include("header.php") ?>
		
		<div class="clear"> </div>
		<?php include("navbar.php") ?>
		<!----End-top-nav---->
		<!----End-Header---->
		
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	
		    	
		    <div class="content-grids">
		    
					<div class="login-page">
					  <div class="form">
					   
					   <?php
					   if(isset($_GET['user']))
					   {
						   echo "<label style='color:blue;'>".$_GET['user']." Registration Successfully</label>";
					   }
					   
					   ?>
					   
					   
					    <?php
						   if(isset($msg))						   
						   {
							   echo "<label style='color:red;'>$msg</label>";
						   }
						   ?>
					   

						<form class="login-form" method="post">
						  <input type="text" name="uid" placeholder="Email or Mobile"/>
						  <input type="password" name="pass" placeholder="password"/>
						  <button type="submit" name="login">login</button>
						  <p class="message">Not registered? <a href="register.php">Create an account</a></p>
						</form>
					  </div>
					</div>
		    
		    	</div>
		    
		    	</div>
		    	<?php include("sidebar.php") ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
			<?php include("footer.php") ?>
	</body>
</html>

