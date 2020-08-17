<h2>Product</h2>

<?php
// if product insert successfully
if($this->session->has_userdata('status'))
{
?>
	<label class="alert-info"><?=$this->session->userdata('status')?></label>
<?php
}


?>


<table class="table">
						<tr>
							<th colspan=8 class="text-center"><a href="<?=base_url()?>Admin/addproduct" class="btn btn-success">Add Product</a></th>
						</tr>
						
						<tr>
							<th>S.No.</th>
							<th>Category</th>
							<th>Product Name</th>
							<th>Image</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Discount</th>
							<th>Action</th>
						</tr>								
					
						
						
</table>