<style>
	#ope,#npe,#cpe{display:none;}
</style>

<script>
	$(document).ready(function()
	{
		$('#sub').click(function()
		{
			var op_error = np_error = cp_error = "";
			var op_valid = np_valid = cp_valid = false;
			
			// old pass validation
			
			op = $('#op').val();
			
			if(op.trim() != "")
			{
				op_valid = true;
			}
			else
			{
				op_error = "Enter Old Passsword";
			}	
			
			
			// new pass validation
			
			np = $('#np').val();
			if(np.trim() != "")
			{
				if(np.length>=6 && np.length<=10)
				{
					np_valid = true;
				}
				else
				{
					np_error = "Password Must Between 6 To 10 Characters";
				}
			}
			else
			{
				np_error = "Enter New Password";
			}
			
			
			// Confirm Passsword Validation
			
			cp = $('#cp').val();
			
			if(cp.trim() != "")
			{
				if(cp == np)
				{
					cp_valid = true;
				}
				else
				{
					cp_error = "New Passsword And Confirm Passsword Are Not Same";
				}
			}
			else
			{
				cp_error = "Enter Confirm Password";
			}
			
			
			
			
			
			if(op_valid && np_valid && cp_valid == true)
			{
				// if no error in validation
				
				$.ajax({
					url : 'cpapi.php',
					method : 'get',
					data : {opass:op,npass:np},
					success : function(res)
					{
						$('#ope,#npe,#cpe').css('display','none');
						$('#myform').trigger("reset");										
						
						//alert(res);						
						$('#message').html(res);
					},
					error : function()
					{
						alert('Not Working');
					}
				})
			}
			else
			{
				// if error in validation
				$('#ope,#npe,#cpe').css('display','block');
				$('#ope').html(op_error);
				$('#npe').html(np_error);
				$('#cpe').html(cp_error);
			}
			
		})
	})
</script>

<h2>Change Password</h2>

<label id="message" class="alert-info"></label>


<form id="myform" method="post">
			
		<div class="form-group">
			<label>Old Password</label>
			<input type="password" id="op" class="form-control">
			<label id="ope" class="text-danger"></label>
		</div>
				
		<div class="form-group">
			<label>New Password</label>
			<input type="password" id="np" class="form-control">
			<label id="npe" class="text-danger"></label>		
		</div>
		
		<div class="form-group">
			<label>Confirm Password</label>
			<input type="password" id="cp" class="form-control">
			<label id="cpe" class="text-danger"></label>
		</div>
				
		<div>
			<input type="button" id="sub" value="Submit" class="btn btn-success">
		</div>
				
</form>


	