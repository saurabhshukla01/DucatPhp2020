<?php

extract($_POST);

if(isset($sub))
{
	echo "Data Insert";
}

?>
<html>
	<head>
		<title>Validation</title>
		
		<style>
			label{color:red;}
		</style>
		
		<script>
			
			function validate()
			{
				unerror = emerror = mnerror = "";
				un_valid = em_valid = mn_valid = false;
				focuscount = 0;
				
				
				// name validation
				un = myform.un.value;
				if(un.trim() != "")
				{
					format = /^[a-zA-Z]+$/;
					if(format.test(un))
					{
						un_valid = true;
					}
					else
					{
						unerror = "User Name Support Only Alphabets";
						if(focuscount == 0)
						{
							myform.un.focus()
							focuscount = 1;
							
							myform.un.style.backgroundColor = "grey";
						}
					}
					
				}
				else
				{
					unerror = "Enter User Name";					
					if(focuscount == 0)
					{
						myform.un.focus()
						focuscount = 1;
						
						myform.un.style.backgroundColor = "grey";
					}
				}
				
				
				
				
				
				// email validation
				em = myform.em.value;
				if(em.trim() != "")
				{
					format = /^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
					if(format.test(em))
					{
						em_valid = true;
					}
					else
					{
						emerror = "Enter Valid Email";
						if(focuscount == 0)
						{
							myform.em.focus()
							focuscount = 1;
						}
					}
				}
				else
				{
					emerror = "Enter Email";
					if(focuscount == 0)
					{
						myform.em.focus()
						focuscount = 1;
					}
				}
				
				
				
				// mobile  validation
				mn = myform.mn.value;
				if(mn.trim() != "")
				{
					format = /^[6-9]{1}[0-9]{9}$/;
					
					if(format.test(mn))
					{
						mn_valid = true;
					}
					else
					{
						mnerror = "Enter Valid Mobile Number";
						if(focuscount == 0)
						{
							myform.mn.focus()
							focuscount = 1;
						}
					}
				}
				else
				{
					mnerror = "Enter Mobile Number";
					if(focuscount == 0)
					{
						myform.mn.focus()
						focuscount = 1;
					}
				}
				
				
				
				if(un_valid && em_valid && mn_valid == true)
				{
					// no error in validation
					return true;
				}
				else
				{
					// error in validation
					document.getElementById('une').innerHTML = unerror;
					document.getElementById('eme').innerHTML = emerror;
					document.getElementById('mne').innerHTML = mnerror;
					return false;
				}
				
			}
			
		</script>
	</head>

	
	<body>
		
		<form name="myform" method="post">
			Name <input type="text" name="un"><label id="une"></label>
			<br>
			Email <input type="text" name="em"><label id="eme"></label>
			<br>
			Mobile <input type="text" name="mn"><label id="mne"></label>
			<br>
			<input type="submit" name="sub" onclick="return validate()">
		</form>
		
		
	</body>
</html>