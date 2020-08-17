<?php



$config = array(
		'addsliderrules'=>array(
				array(
					'field' => 't1',
					'label' => 'Title 1',
					'rules' => 'required|trim|is_unique[slider.title1]',
				),	

				array(
					'field' => 't2',
					'label' => 'Title 2',
					'rules' => 'required|trim',
				),		
		),


		

		'addproductrules'=>array(
				array(
		                'field' => 'procat',
		                'label' => 'Category',
		                'rules' => 'required',
		                'errors' => array(
		               		   'required' => '%s Can Not Blank.',
		               		),
		               ), 

		         array(
		                'field' => 'mobile_name',
		                'label' => 'Mobile Name',
		                'rules' => 'required|min_length[5]|max_length[50]|is_unique[product.mobile_name]',
		                'errors' => array(
		               		   'required' => '%s Can Not Blank.',
		               		   'min_length'=>'%s Must Between 5 To 50 Characters',
		               		   'max_length'=>'%s Must Between 5 To 50 Characters',
		               		   'is_unique'=>'%s Already Exist',
		               		),
		               ),
		),

);



?>