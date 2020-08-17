<?php

defined("BASEPATH") or die("Not Allowed");

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if(!$this->session->has_userdata('aemail'))
		{
			redirect('Login/index');
		}

	}
	
	function index()
	{
		redirect("Login/index");
	}


	function dashboard()
	{
		$this->load->view("adminpages/header");
		$this->load->view("adminpages/dashboard");
		$this->load->view("adminpages/footer");
	}
	
	function category()
	{

		$data['catdata'] = $this->AdminModel->getallcategory();

		$this->load->view("adminpages/header");
		$this->load->view("adminpages/category",$data);
		$this->load->view("adminpages/footer");
	}
	
	function product()
	{
		$this->load->view("adminpages/header");
		$this->load->view("adminpages/product");
		$this->load->view("adminpages/footer");
	}

	function addcategory()
	{

		if($this->input->post('sub'))
		{
			// if click on submit

			//$this->form_validation->set_rules('form field name', 'Alias of Field Name', 'validation Rules');
			$this->form_validation->set_rules('cn', 'Category', 'required|trim|min_length[4]|max_length[12]|alpha|is_unique[category.cname]');

			if($this->form_validation->run() == TRUE)
            {
              // if no error in validation

            	$catname = $this->input->post('cn');

            	if($this->AdminModel->addcat($catname))
            	{
            		// if return true from modal

            		$this->session->set_flashdata("status","Category Added Successfully");
            		redirect("Admin/category");
            	}
            	else
            	{
            		// if return false from modal

            		$error = $this->db->error();
            		//print_r($error);
            		$this->session->set_flashdata("status",$error['message']);
            		//$this->session->set_flashdata("status","Error in insert category, Check Query");
            		redirect("Admin/addcategory");
            	}
            }
           

		}

		$this->load->view("adminpages/header");
		$this->load->view("adminpages/addcategory");
		$this->load->view("adminpages/footer");		
	}
	
	
	
	function deletecategory($did)
	{
		if($this->AdminModel->deletecat($did))
		{
			// if return true from model
			$this->session->set_flashdata("status","Category Delete Successfully");
			redirect("Admin/category");
		}
		else
		{
			// if return false from model
			$error = $this->db->error();
			$this->session->set_flashdata("status",$error['message']);
			redirect("Admin/category");
		}
	}





	function editcategoryview($eid)
	{
		$data['categorydata'] = $this->AdminModel->getcategorybyid($eid);

		$this->load->view("adminpages/header");
		$this->load->view("adminpages/updatecategory",$data);
		$this->load->view("adminpages/footer");
	}

	//----------------------------------------------------------

	function editcategorysave()
	{
		if($this->input->post('sub'))
		{
			// if click on submit button

			$eid = $this->input->post('hid');
			$catname = $this->input->post('cn');

			$this->form_validation->set_rules('cn', 'Category', 'required|trim|min_length[4]|max_length[12]');

			
			$this->load->helper('security');
			if($this->form_validation->run() == TRUE)
            {
            	// if no error in validation

            	
            	if($this->AdminModel->updatecategory($eid,$catname))
            	{
            		// if update successfully
            		$this->session->set_flashdata("status","Category Update Successfully");
            		redirect("Admin/category");
            	}
            	else
            	{
            		// if error
            		$error = $this->db->error();            		
            		$this->session->set_flashdata("status",$error['message']);
            		redirect("Admin/editcategoryview/$eid");
            		
            	}

            }
            else
            {
            	// if error in validation            

    //         	$data['categorydata'] = $this->AdminModel->getcategorybyid($eid);	

				// $this->load->view("adminpages/header");
				// $this->load->view("adminpages/updatecategory",$data);
				// $this->load->view("adminpages/footer");

				//  or

				$this->editcategoryview($eid);

            }
		}
	}


	//----------------------------------------------------------

	function slider()
	{
		$data['allslider'] = $this->AdminModel->getallslider();

		$this->load->view("adminpages/header");
		$this->load->view("adminpages/slider",$data);
		$this->load->view("adminpages/footer");
	}

	//----------------------------------------------------------


	function addslider()
	{
        $this->load->view("adminpages/header");
		$this->load->view("adminpages/addslider");
		$this->load->view("adminpages/footer");		
	}


	function deleteslider($did,$dimg)
	{
		if($this->AdminModel->delslider($did))
		{
			unlink('./uploads/slider/'.$dimg);
			$this->session->set_flashdata("status","Slider Delete Successfully");
			redirect("Admin/slider");
		}

	}


	function addslidersave()
	{
		//$this->form_validation->set_rules('t1','Title 1','required|trim');
		//$this->form_validation->set_rules('t2','Title 2','required|trim');

		 $config['upload_path'] = './uploads/slider';
		 $config['allowed_types'] = 'jpeg|jpg|png';

		 $this->upload->initialize($config);

		if($this->form_validation->run('addsliderrules') && $this->upload->do_upload('att'))
		{
			// if validation true
			$uploadinfo = $this->upload->data();	// show upload file information
			//print_r($uploadinfo);
			$fn = $uploadinfo['file_name'];

			$t1 = $this->input->post('t1');
			$t2 = $this->input->post('t2');

			if($this->AdminModel->addsliderinfo($t1,$t2,$fn))
			{
				// if return true from model 
				$this->session->set_flashdata("status","Slider Added Successfully");
				redirect("Admin/slider");		
			}
			else
			{
				// if return false from model	

				unlink('./uploads/slider/'.$fn);	// delete file from upload folder

				$error = $this->db->error();            		
            	$this->session->set_flashdata("status",$error['message']);

				// $this->load->view("adminpages/header");
				// $this->load->view("adminpages/addslider");
				// $this->load->view("adminpages/footer");		
				// or 

				$this->addslider();			

			}

		}
		else
		{
			// if validation false

			$data['uploaderror'] = $this->upload->display_errors(); // file uploading errors

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			$this->load->view("adminpages/header");
			$this->load->view("adminpages/addslider",$data);
			$this->load->view("adminpages/footer");	
			
		}
	}

	//-----------------------------------------------

	function addproduct()
	{
		$data['categories'] = $this->AdminModel->getallcategory();

		$this->load->view("adminpages/header");
		$this->load->view("adminpages/addproduct",$data);
		$this->load->view("adminpages/footer");	
	}


	//-----------------------------------------------



	function addproductsave()
	{
		
		 $config['upload_path'] = './uploads/product';
		 $config['allowed_types'] = 'jpeg|jpg|png';

		 $this->upload->initialize($config);		

		if($this->form_validation->run('addproductrules') && $this->upload->do_upload('att'))
		{
			// if no error in validation
			$uploadinfo = $this->upload->data();	// show upload file information
			//print_r($uploadinfo);
			$fn = $uploadinfo['file_name'];

			$formdata = $this->input->post();
			unset($formdata['sub']);
			$formdata['image'] = $fn;
			//print_r($formdata);

			if($this->AdminModel->addproduct($formdata))
			{
				// if return true from model
				$this->session->set_flashdata("status","Product Added Successfully");
				redirect("Admin/product");
			}
			else
			{
				// if return false from model	

				unlink('./uploads/product/'.$fn);
				$error = $this->db->error();            		
            	$this->session->set_flashdata("status",$error['message']);
				redirect("Admin/addproduct");
			}
					

		}
		else
		{
			// if error in validation
			

			$data['uploaderror'] = $this->upload->display_errors(); // file uploading errors


			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');			

			$data['categories'] = $this->AdminModel->getallcategory();
			$this->load->view("adminpages/header");
			$this->load->view("adminpages/addproduct",$data);
			$this->load->view("adminpages/footer");	



		}
			
	}


	//--------------------------------------


	function updateslider()
	{
		$sid = $this->uri->segment(3);

		$data['sliderinfo'] = $this->AdminModel->getsliderbyid($sid);

		$this->load->view("adminpages/header");
		$this->load->view("adminpages/updateslider",$data);
		$this->load->view("adminpages/footer");			
	}

	//--------------------------------------


	function updateslidersave()
	{
		$this->form_validation->set_rules('t1','Title 1','required|callback_unique_title');
		$this->form_validation->set_rules('t2','Title 2','required');

		if($this->form_validation->run())
		{
			//echo "No Error";

			$filename = $_FILES['att']['name'];

			$hid = $this->input->post('hid');

			$arr = [
				'title1' => $this->input->post('t1'),
				'title2' => $this->input->post('t2'),
				'image'  => $this->input->post('himage'),
			];

			if(empty($filename))
			{
				// update only database
				if($this->AdminModel->updatesliderinfo($hid,$arr))
				{
					$this->session->set_flashdata("status","slider update successfully");
					redirect("Admin/slider");
				}
			}
			else
			{
				// update database and image

				$config['upload_path'] = './uploads/slider';
				$config['allowed_types'] = 'jpeg|jpg|png';

				$this->upload->initialize($config);		

				if($this->upload->do_upload('att'))
				{
					$uploadinfo = $this->upload->data();	// show upload file information
					//print_r($uploadinfo);
					$arr['image'] = $uploadinfo['file_name'];

					if($this->AdminModel->updatesliderinfo($hid,$arr))
					{
						$oldimage = $this->input->post('himage');

						unlink('./uploads/slider/'.$oldimage);
						$this->session->set_flashdata("status","slider update successfully");
						redirect("Admin/slider");		
					}
				}
				else
				{
					$data['uploaderror'] = $this->upload->display_errors(); // file uploading errors
					$hid = $this->input->post('hid');
					$data['sliderinfo'] = $this->AdminModel->getsliderbyid($hid);
					$this->load->view("adminpages/header");
					$this->load->view("adminpages/updateslider",$data);
					$this->load->view("adminpages/footer");	
				}

			}



		}
		else
		{
			//echo "Error";
			//echo validation_errors();
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');		

			$hid = $this->input->post('hid');
			$data['sliderinfo'] = $this->AdminModel->getsliderbyid($hid);
			$this->load->view("adminpages/header");
			$this->load->view("adminpages/updateslider",$data);
			$this->load->view("adminpages/footer");	
		}
	}

	function unique_title()
	{
		$hid = $this->input->post('hid');
		$t1 = $this->input->post('t1');
		//echo $hid,$t1;

		$record = $this->AdminModel->unique_title_check($hid,$t1);

		if($record == 0)
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('unique_title',"Title1 Already Taken");
			return false;
		}
	}


}





?>