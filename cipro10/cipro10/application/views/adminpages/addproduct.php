<h2>Add Product</h2>

<?php
// if error in product insert
if($this->session->has_userdata('status'))
{
?>
	<label class="alert-info"><?=$this->session->userdata('status')?></label>
<?php
}


?>

<form action="<?=base_url()?>Admin/addproductsave" method="post" enctype="multipart/form-data">
       
	<div class="form-group">
	<label>Category : </label>
     <select  style="font-size:18px;" class="form-control" name="procat">
	<option style="background:lightgrey" value="" hidden>Select</option>

		<?php

		foreach($categories as $cat)
		{
		?>
			<option value="<?=$cat['id']?>"><?= $cat['cname']; ?></option>
		<?php
		}

		?>
	

	</select>

	<?= form_error('procat') ?>

	</div>
	
	<div class="form-group">
	<label>Mobile Name : </label>
	<input type="text" name="mobile_name" value="<?=set_value('mobile_name')?>" class="form-control"/>
	<?= form_error('mobile_name') ?>
	</div>
	

	<div class="form-group">
	<label>Price : </label>
	<input type="text" name="price"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Quantity : </label>
	<input type="text" name="quantity"class="form-control"/>
	</div>

	<div class="form-group">
	<label>Discount : </label>
	<input type="text" name="discount"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Processor : </label>
	<input type="text" name="processor"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Operating System : </label>
	<input type="text" name="operating_system" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Ram : </label>
	<input type="text" name="ram"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Internal Memory : </label>
	<input type="text" name="internal_memory"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Camera : </label>
	<input type="text" name="camera"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Display : </label>
     <input type="text" name="display"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Battery : </label>
	<input type="text" name="battery"  class="form-control"/>
	</div>

	<div class="form-group">
	<label>Colour : </label>
	<input type="text" name="colour" class="form-control"/>
	</div>

	<div class="form-group">
	<label>Warranty : </label>
	<input type="text" name="warranty"  class="form-control"/>
	</div>


	<div class="form-group">
	<label>Image : </label>
	<input type="file" name="att"  class="form-control"/>
	<?php
	if(isset($uploaderror))
	{
		echo "<label class='text-danger'>$uploaderror</label>";
	}

	?>

	</div>

   <input type="submit" name="sub" class="btn btn-success btn-lg"/>
	
</form>	