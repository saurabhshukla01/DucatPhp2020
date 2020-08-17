<?php

defined("BASEPATH") or die("Not Allowed");

class AdminModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function adminlogin($em)
	{
		$sel = $this->db->get_where("admin",["email"=>$em]);
		
		return $sel->row();   	
	}


	function addcat($catname)
	{
		//$this->db->insert("tablename",["table column name"=>data]);	
		return $this->db->insert("category",["cname"=>$catname]);	
	}


	function getallcategory()
	{
		$sel = $this->db->get("category");
	  	return $sel->result_array();
	}



	function deletecat($did)
	{
		return $this->db->delete("category",["id"=>$did]);
	}
	


	function getcategorybyid($eid)
	{
		$sel = $this->db->get_where("category",["id"=>$eid]);
		return $sel->row();
	}


	function updatecategory($eid,$catname)
	{
		$this->db->where("id",$eid);
		return $this->db->update("category",["cname"=>$catname]);
	}

	function addsliderinfo($t1,$t2,$fn)
	{
		return $this->db->insert('slider',['title1'=>$t1,'title2'=>$t2,'image'=>$fn]);
	}


	function addproduct($formdata)
	{
		return $this->db->insert("product",$formdata);
	}

	function getallslider()
	{
		$sel = $this->db->get("slider");
		return $sel->result_array();
	}

	function delslider($did)
	{
		return $this->db->delete("slider",['id'=>$did]);
	}

	function getsliderbyid($sid)
	{
		$sel = $this->db->get_where("slider",['id'=>$sid]);
		return $sel->row();
	}

	function unique_title_check($hid,$t1)
	{
		$this->db->where_not_in('id', $hid);
		$this->db->where("title1",$t1);
		$sel = $this->db->get("slider");
		return $sel->num_rows();
	}

	function updatesliderinfo($hid,$arr)
	{
		$this->db->where('id',$hid);
		return $this->db->update('slider',$arr);
	}
}

?>