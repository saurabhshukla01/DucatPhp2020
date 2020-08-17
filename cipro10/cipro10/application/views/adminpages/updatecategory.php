<h2>Edit Category</h2>

<?php
// if error in category insert
if($this->session->has_userdata('status'))
{
?>
	<label class="alert-info"><?=$this->session->userdata('status')?></label>
<?php
}


?>




	


	



		<?php //print_r($categorydata) ?>

	<main>
	<?= form_open("Admin/editcategorysave") ?>
				

		<?= form_input("hid",$categorydata->id) ?>

		<div class="form-group">
		<?= form_label("Category Name","",["class"=>"text-primary"]) ?>
		<?= form_input("cn",$categorydata->cname,["class"=>"form-control","placeholder"=>"Category Name"])?>



		<!-- Display Error Of Particular Field -->
		<?php echo form_error('cn', '<div class="text-danger">', '</div>'); ?>
		</div>
		
		
		<div>
		<?= form_submit("sub","submit",["class"=>"btn btn-success"])?>
		</div>
					
				
	<?= form_close() ?>
	</main>