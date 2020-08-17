<?php

defined("BASEPATH") or die("Not Allowed");

class FrontModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getallcategory()
	{
		$sel = $this->db->get("category");
		return $sel->result_array();
	}	
	
	function getlatestproduct($start,$limit)
	{		
		$this->db->limit($limit,$start); 
		$this->db->order_by('pid', 'DESC');
		$sel = $this->db->get("product");
		return $sel->result_array();
	}
	
	function getproductbycategory($catid)
	{
		$this->db->where("procat",$catid);
		$sel = $this->db->get("product");
		return $sel->result_array();
	}
	
	function countproduct()
	{
		$sel = $this->db->get("product");
		return $sel->num_rows();
	}
	
	function searchproduct($userser)
	{
		$this->db->like('colour',$userser);
		$this->db->or_like('mobile_name',$userser);
		$this->db->or_like('price',$userser);
		
		$sel = $this->db->get("product");
		return $sel->result_array();
	}
	
	function getproductdetails($proid)
	{		
		$sel = $this->db->get_where("product",['pid'=>$proid]);
		return $sel->row();
	}
	
	function getrelatedproduct($proprice,$proid)
	{
		$minprice = $proprice*0.8;
		$maxprice = $proprice*1.2;
		
		$this->db->where('price >=', $minprice);
		$this->db->where('price <=', $maxprice);
		$this->db->where('pid !=', $proid);
		$this->db->limit(5); 
		$this->db->order_by('pid', 'DESC');
		
		$sel = $this->db->get("product");
		return $sel->result_array();
		
	}
}

?>