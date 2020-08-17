<?php 	
   include("config/database.php");
   session_start();
   $adminname = $_SESSION['adminname'];
   
   
   if(!empty($_GET['oldpass']) && !empty($_GET['newpass']))
   {
   		$op = $_GET['oldpass'];
   		$np = $_GET['newpass'];
   
   		$select_data = mysqli_query($link,"select * from admins where name='$adminname'");
   		$arr = mysqli_fetch_assoc($select_data);
   
   		if($op == $arr['password'])
   		{
   			if(mysqli_query($link,"update admins set password='$np' where name='$adminname'"))
   			{
   				echo "<strong class='p-2'>Password Change Successfully</strong>";
   			}
   		}
   		else
   		{
   			echo "<strong class='p-2'>Old Password Incorrect<strong>";
   		}
   		
   }
   
   
    ?>
