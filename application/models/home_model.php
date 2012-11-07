<?php
/*
 * Created on 2012-11-1
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class home_model extends CI_Model
 {
 	function __construct()
 	{
 		parent::__construct(); 	
 	}
 	
 	//------------------------------------------------
 	/**
 	 * 加载图书馆信息
 	 */ 	
 	function get_lib_name()
 	{
 		//$this->db->get();
 		$this->db->from('lib_library');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array(); 
 	}
 	
 	//------------------------------------------------------------
 	/**
 	 * 加载最新五条新闻
 	 */
 	 function get_last_five_news()
 	 {
 	 	$this->db->from('lib_news');
 	 	$this->db->where('isdelete','0');
        $this->db->order_by("id", "desc");
        $this->db->limit('5');
        $query =  $this->db->get();
        return $query->result_array(); 
 	 }
 	
 }
?>
