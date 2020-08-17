<?php

defined("BASEPATH") or die("Not Allowed");

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{		
		
		if($this->input->post('sub'))
		{
			// if click on login button
			
			$em = $this->input->post('em');
			$pa = $this->input->post('pass');		
			
			//$this->ModelName->FunctionName(data);
			$admininfo = $this->AdminModel->adminlogin($em);
			
			if($admininfo)
			{
				//echo "Correct Email <br>";
				//print_r($admininfo);
				
				if(md5($pa) == $admininfo->password)
				{
					//echo "Login Successfully <br>";					

					//$this->session->set_userdata('session name','value');
					$this->session->set_userdata('aname',$admininfo->name);
					$this->session->set_userdata('aemail',$admininfo->email);
					//redirect("Controller/function")
					redirect("Admin/dashboard");
				}
				else
				{
					//echo "Incorrect Password <br>";
					$this->session->set_flashdata('status',"Incorrect Password");
					
				}
			}
			else
			{
				//echo "Incorrect Email";
				$this->session->set_flashdata('status',"Incorrect Email");
			}
			
		}	


		$this->load->view("adminpages/login.php");	
	}

	//--------------------------------------------------------------

	
	function logout()
	{
		$this->session->sess_destroy();
		redirect("Login/index");
	}



	//--------------------------------------------------------------
	
}







?>