<?php

include("database.php");




// delete record

if(isset($_GET['delid']))
{
	$did = $_GET['delid'];
	$dimg = $_GET['delimg'];
	
	
	//$result = mysqli_query($link,"select * from student where id='$did'");
	//$arr = mysqli_fetch_assoc($result);
	//$dimg = $arr['image'];
	
	
	
	mysqli_query($link,"delete from student where id='$did'");
	unlink("images/".$dimg);
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>

	<table border="1" align="center">
		<tr>
			<th colspan="7"><a href="insert.php"><input type="button" value="Add Student"></a></th>
		</tr>

		<tr>
			<th>S.No.</th>
			<th>Student ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Image</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
		
		<?php
		
			$result = mysqli_query($link,"select * from student");
			
			$sn = 1;
			while($arr = mysqli_fetch_assoc($result))
			{
		?>
				<tr>
					<td><?php echo $sn ?></td>
					<td><?php echo $arr['id'] ?></td>
					<td><?php echo $arr['name'] ?></td>
					<td><?= $arr['email'] ?></td>
					<td><img src="images/<?php echo $arr['image'] ?>" height="30" width="80"></td>
					<td><?= $arr['date'] ?></td>					
					<td><a href="update.php?editid=<?php echo $arr['id'] ?>">Edit</a> <a href="index.php?delid=<?php echo $arr['id'] ?>&delimg=<?php echo $arr['image'] ?>">Delete</a></td>
				</tr>
		<?php
			$sn++;
			}
		
		?>

	</table>

</body>
</html>