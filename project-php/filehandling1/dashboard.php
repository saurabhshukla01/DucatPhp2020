<?php

session_start();

$useremail = $_SESSION['email'];

if($useremail == "")
{
	header("location:index.php");
}

?>
<html>
	<head>
		<title>Dashboard</title>
	</head>

	<body>
		<h2>Welcome : <?php echo $useremail; ?></h2>	
		<a href="logout.php">Logout</a>
	</body>
</html>