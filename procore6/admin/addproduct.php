
<?php

extract($_POST);

if(isset($addprosub))
{
	// check validation
	
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];
	$arr = explode('.',$fn);
	$ext = end($arr);
	$ext = strtolower($ext);
	$fnn = uniqid().'.'.$ext;
	
	if(move_uploaded_file($tmp,"images/product/".$fnn))
	{
		if(mysqli_query($link,"insert into product(procat,mobile_name,price,quantity,discount,processor,operating_system,ram,internal_memory,camera,display,battery,colour,warranty,image) values ('$cat','$mname','$price','$qua','$disc','$pro','$os','$ram','$imem','$cam','$display','$batt','$col','$war','$fnn')"))
		{
			$_SESSION['status'] = "Product Added Successfully";
			header("location:dashboard.php?page=pro");
			exit;
		}
		else
		{
			unlink("images/product/".$fnn);
			$errormsg = mysqli_error($link);
		}
	}
	else
	{
		$errormsg = "File Uploading Error";
	}
	
}

?>

<h2 class="text-primary">Add Product</h2>

<?php

if(isset($errormsg))
{
?>
	<label class="alert-danger"><?=$errormsg?></label>
<?php
}

?>


<form method="post" enctype="multipart/form-data">
       
	<div class="form-group">
	<label>Category : </label>
     <select  style="font-size:18px;" class="form-control" name="cat">
	<option style="background:lightgrey" value="" hidden>Select</option>
		<?php
			$result = mysqli_query($link,"select * from category");			
			while($arr = mysqli_fetch_assoc($result))
			{
			?>
				<option value="<?=$arr['id']?>"><?=$arr['cname']?></option>
			<?php
			}
		?>
	</select>
	</div>
	
	<div class="form-group">
	<label>Mobile Name : </label>
	<input type="text" name="mname" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Price : </label>
	<input type="text" name="price"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Quantity : </label>
	<input type="text" name="qua"class="form-control"/>
	</div>

	<div class="form-group">
	<label>Discount : </label>
	<input type="text" name="disc"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Processor : </label>
	<input type="text" name="pro"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Operating System : </label>
	<input type="text" name="os" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Ram : </label>
	<input type="text" name="ram"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Internal Memory : </label>
	<input type="text" name="imem"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Camera : </label>
	<input type="text" name="cam"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Display : </label>
     <input type="text" name="display"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Battery : </label>
	<input type="text" name="batt"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Colour : </label>
	<input type="text" name="col" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Warranty : </label>
	<input type="text" name="war"  class="form-control"/>
	</div>


	<div class="form-group">
	<label>Image : </label>
	<input type="file" name="att"  class="form-control"/>
	</div>

   <input type="submit" name="addprosub" class="btn btn-success btn-lg"/>
	
</form>	