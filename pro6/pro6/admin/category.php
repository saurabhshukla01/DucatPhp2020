<?php
// database connect on dashboard.php


// add category

extract($_POST);

if(isset($addcatsub))
{
	$errormsg = "";
	$cn_valid = $img_valid = false;
	
	// category name validation
	
	$cn = trim($cn);	
	if(!empty($cn))
	{
			$result = mysqli_query($link,"select cname from category where cname='$cn'");
			
			if(mysqli_num_rows($result) == 0)
			{
				$cn_valid = true;
			}
			else
			{
				$errormsg .= "Category Name Already Exist <br>";
			}
	}
	else
	{
		$errormsg .= "Enter Cateogry Name <br>";
	}

	
	
	// image validation
	
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	
	if(!empty($fn))
	{
		$arr = explode('.',$fn);
		$ext = end($arr);
		$ext = strtolower($ext);
		
		if($ext=="jpg" || $ext=="jpeg")
		{
			$img_valid = true;
		}
		else
		{
			$errormsg = "Only jpg or jpeg file support <br>";
		}
	}
	else
	{
		$errormsg .= "Please Choose File <br>";
	}
	
	
	
	// if no error in validation
	if($cn_valid && $img_valid == true)
	{
		$fnn = rand().'.'.$ext;
		
		if(move_uploaded_file($tmp,"images/category/".$fnn))
		{
			if(mysqli_query($link,"insert into category (cname,image) values ('$cn','$fnn')"))
			{
				$_SESSION['status'] = "Category Added Successfully";
				header("location:dashboard.php?page=cat");
				exit;
			}
			else
			{
				unlink("images/category/".$fnn);
				$errormsg = mysqli_error($link);
			}
		}
		else
		{
			$errormsg = "File Uploading Error";
		}
	}
}




?>
<h2 class="text-info">Category</h2>

<?php

if(!empty($_SESSION['status']))
{
?>
	<label class="alert-info"><?=$_SESSION['status']?></label>
<?php
	unset($_SESSION['status']);
}


?>





<?php
if(!empty($errormsg))
{
?>
	<label class="text-danger"><?=$errormsg?></label>
<?php
}
?>

<table class="table">
	<tr>
		<th colspan="5" class="text-center"><a href="" class="btn btn-success" data-toggle="modal" data-target="#addcatmodal">Add Category</a></th>
	</tr>
	
	<tr>
		<th>S.No.</th>
		<th>CName</th>
		<th>Image</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	
	<?php
		
		$result = mysqli_query($link,"select * from category");
		
		$sn = 1;
		while($arr = mysqli_fetch_assoc($result))
		{
		?>
			<tr>
				<td><?=$sn?></td>
				<td><?=$arr['cname']?></td>
				<td><img src="images/category/<?=$arr['image']?>" height="30" width="80"></td>
				<td><?=$arr['date']?></td>
				<td><a href="" class="btn btn-info">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
			<tr>
		<?php
		$sn++;
		}
	
	?>
</table>





<!-- Add Category Modal -->
<div id="addcatmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Category</h4>
      </div>
      <div class="modal-body">
        
			<form method="post" enctype="multipart/form-data">
			
				<div class="form-group">
					<label>Category Name</label>
					<input type="text" name="cn"  class="form-control">
					
				</div>
				
				<div class="form-group">
					<label>Image</label>
					<input type="file" name="att" class="form-control">
					
				</div>
				
				<div>
					<input type="submit" name="addcatsub" value="Submit" class="btn btn-success">
				</div>
				
				</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>