<?php

include("config/database.php");

session_start();
$loginuser = $_SESSION['aemail'];



if(!empty($_GET['opass']) && !empty($_GET['npass']))
{
	$oldpass = $_GET['opass'];
	$newpass = $_GET['npass'];
	
	$result = mysqli_query($link,"select * from admin where email='$loginuser'");
	$arr = mysqli_fetch_assoc($result);
	
	if($arr['password'] == md5($oldpass))
	{
		$newpass = md5($newpass);
		
		if(mysqli_query($link,"update admin set password='$newpass' where email='$loginuser'"))
		{
			echo "Password Change Successfully";
		}
	}
	else
	{
		echo "Old Password Is Incorrect";
	}
}


?>