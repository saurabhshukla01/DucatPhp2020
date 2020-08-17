<script>
	$(document).ready(function()
	{
		$('.edit').click(function()
		{
			var cn = $(this).attr('catname');
			var cid = $(this).attr('catid');
			var cimg = $(this).attr('catimage');
			
			//alert(cid+cn+cimg);
			
			$('#hid').val(cid);
			$('#himage').val(cimg);
			$('#ecn').val(cn);
		})
	})
</script>

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



// delete record

if(isset($_GET['delid']) && isset($_GET['delimg'])) // get from url when click on delete button
{
	$did = $_GET['delid'];
	$dimg = $_GET['delimg'];
	
	mysqli_query($link,"delete from category where id='$did'");
	unlink("images/category/".$dimg);
	
	$msg = "Category Delete Successfully";
	header("location:dashboard.php?page=cat&message=$msg");	
	exit;
}





// update record

extract($_POST);

if(isset($editcatsub))
{
	$cn_valid = $img_valid = false;
	$errormsg = "";
	
	
	// category name validation
	$ecn = trim($ecn);
	
	if(!empty($ecn))
	{
		$format = "/^[a-zA-Z]+$/";
		
		if(preg_match($format,$ecn))
		{
			$result = mysqli_query($link,"select * from category where cname='$ecn' and id!='$hid'");
			
			if(mysqli_num_rows($result) == 0)
			{
				$cn_valid = true;
			}
			else
			{
				$errormsg = "Category Name Already Exist";
			}
		}
		else
		{
			$errormsg = "Only Alphabets Allowed In Category Name";
		}
	}
	else
	{
		$errormsg = "Enter Category Name";
	}
	
	
	
	
	
	$fn = $_FILES['eatt']['name'];
	$tmp = $_FILES['eatt']['tmp_name'];
	
	if(empty($fn))	
	{
		// update only data
		
		if($cn_valid == true)
		{
			//if validation true
			if(mysqli_query($link,"update category set cname='$ecn' where id='$hid'"))
			{
				$_SESSION['status'] = "Category Update Successfully";
				header("location:dashboard.php?page=cat");
				exit;
			}
			else
			{
				$errormsg = mysqli_error($link);
			}
		}
	}
	else
	{
		// update data and image
		
		// image validation
		
		$arr = explode('.',$fn);
		$ext = end($arr);
		$ext = strtolower($ext);
		
		if($ext=="jpg" || $ext=="jpeg")
		{
			$img_valid = true;
		}
		else
		{
			$errormsg .= "<br> Only jpg or jpeg file support";
		}
		
		
		
		
		if($cn_valid && $img_valid == true)
		{
			// if no error in validation
			$fnn = rand().'.'.$ext;
			
			if(move_uploaded_file($tmp,"images/category/".$fnn))
			{
				if(mysqli_query($link,"update category set cname='$ecn', image='$fnn' where id='$hid'"))
				{
					unlink("images/category/".$himage);
					$_SESSION['status'] = "Category Update Successfully";
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
				$errormsg = "File Upload Error";
			}
		}
	}
	
}






?>



<?php

if($pageaccess != true)
{
	header("location:dashboard.php");
}

?>

<h2 class="text-info">Category</h2>



<?php

if(!empty($_GET['message']))
{
?>
	<label class="alert-danger"><?=$_GET['message'];?></label>
<?php
}

?>











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
				<td><img class="img-thumbnail" src="images/category/<?=$arr['image']?>" height="30" width="80"></td>
				<td><?=$arr['date']?></td>
				<td><a href="javascript:void()" class="btn btn-info edit" catname="<?=$arr['cname']?>" catid="<?=$arr['id']?>" catimage="<?=$arr['image']?>" data-toggle="modal" data-target="#editcatmodal">Edit</a> 
				<a href="dashboard.php?page=cat&delid=<?=$arr['id']?>&delimg=<?=$arr['image']?>" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete ?')">Delete</a></td>
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








<!-- Edit Category Modal -->
<div id="editcatmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Category</h4>
      </div>
      <div class="modal-body">
        
			<form method="post" enctype="multipart/form-data">
			
				<input type="hidden" name="hid" id="hid">
				<input type="hidden" name="himage" id="himage">
			
				<div class="form-group">
					<label>Category Name</label>
					<input type="text" name="ecn" id="ecn"  class="form-control">
					
				</div>
				
				<div class="form-group">
					<label>Image</label>
					<input type="file" name="eatt" class="form-control">
					
				</div>
				
				<div>
					<input type="submit" name="editcatsub" value="Submit" class="btn btn-success">
				</div>
				
				</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>