<?php

defined("BASEPATH") or die("Not Allowed");

class Front extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("FrontModel","FM");
	}	
	
	function index($start = 0)
	{
		
		$config['base_url'] = base_url().'Front/index';
		$tr = $this->FM->countproduct();
		$config['total_rows'] = $tr;
		$config['per_page'] = 3;
		$data['latestpro'] = $this->FrontModel->getlatestproduct($start,$config['per_page']);
		$this->pagination->initialize($config);
		$data['pagelinks'] = $this->pagination->create_links();
		
		$data['category'] = $this->FrontModel->getallcategory();		
		
		$this->load->view("frontpages/header.php");
		$this->load->view("frontpages/sidebar.php",$data);
		$this->load->view("frontpages/index.php",$data);
		$this->load->view("frontpages/footer.php");
		
	}
	
	function category($catid,$catname)
	{	
			
		$data['category'] = $this->FM->getallcategory();
		$data['product'] = $this->FM->getproductbycategory($catid);
		$data['categoryname'] = $catname;
		
		$this->load->view("frontpages/header.php");
		$this->load->view("frontpages/sidebar.php",$data);
		$this->load->view("frontpages/category.php",$data);
		$this->load->view("frontpages/footer.php");
	}
	
	
	function search()
	{
		$userser = $this->input->post('ser');
		$data['product'] = $this->FM->searchproduct($userser);
		
		
		$data['category'] = $this->FM->getallcategory();
			
		$this->load->view("frontpages/header.php");
		$this->load->view("frontpages/sidebar.php",$data);
		$this->load->view("frontpages/search.php",$data);
		$this->load->view("frontpages/footer.php");
	}
	
	function productdetails()
	{
		$proid = $this->uri->segment(3);	// get from url
		$proprice = $this->uri->segment(4);	 // get from url
		
		$data['product'] = $this->FM->getproductdetails($proid);
		$data['relatedpro'] = $this->FM->getrelatedproduct($proprice,$proid);
		$data['category'] = $this->FM->getallcategory();
			
		$this->load->view("frontpages/header.php");
		$this->load->view("frontpages/sidebar.php",$data);
		$this->load->view("frontpages/productdetails.php",$data);
		$this->load->view("frontpages/footer.php");
	}
	
	function addtocart()
	{
		extract($_GET);
		
		$data = array(
				'id'      => $mid,
				'qty'     => $mquan,
				'price'   => $mprice,
				'name'    => $mname,
				'discount'=> $mdiscount,
				'image'   => $mimage,
				
		);
		
		//print_r($data);

		if($this->cart->insert($data))
		{
			echo "Cart Added Successfully";
		}
	}
	
	
	function getcartdata()
	{
		$totalprice = $this->cart->total();
		$totalquantity = $this->cart->total_items();
		$totalitems = count($this->cart->contents());
		
		//echo "TOTAL : Rs $totalprice | ITEMS : $totalitems";
		
		echo '<span class="icon-shopping-cart"></span>'. $totalitems .' Item(s) - <span class="badge badge-warning">Rs '. $totalprice.'</span>';
	}
}







?>