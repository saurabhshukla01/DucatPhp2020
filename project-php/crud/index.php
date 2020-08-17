<?php 

$link = mysqli_connect("localhost","root","","6pm") or die(mysqli_connect_error());

// delete record

if(!empty($_GET['delid']))
{
	$did = $_GET['delid'];

	if(mysqli_query($link,"delete from employee where id='$did'"))
	{
		header("location:index.php");
	}
	else
	{
		echo mysqli_error($link);
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
</head>
<body>

	<table border="1" align="center">
		<tr>
			<th colspan="6"><a href="insert.php"><input type="button" value="Add Employee"></a></th>
		</tr>

		<tr>
			<th>S.No.</th>
			<th>Employee ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Date</th>
			<th>Action</th>
		</tr>

		<?php 

			$result = mysqli_query($link,"select * from employee");

			$sn = 1;
			while($arr = mysqli_fetch_assoc($result))
			{
				// echo "<pre>";
				// print_r($arr);
				// echo "</pre>";

				$empid = $arr['id'];

				echo "<tr>";
					echo "<td>".$sn."</td>";
					echo "<td>".$arr['id']."</td>";
					echo "<td>".$arr['name']."</td>";
					echo "<td>".$arr['email']."</td>";
					echo "<td>".$arr['date']."</td>";
					echo "<td><a href='update.php?editid=$empid'>Edit</a> 
					<a href='index.php?delid=$empid'>Delete</a></td>";
				echo "</tr>";
				$sn++;
			}

		 ?>

	</table>

</body>
</html>