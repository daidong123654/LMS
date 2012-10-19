<?php
class News_model extends CI_Model {
	var $id;
	var $title;
	var $author;
	var $text;
	
	function __construct()
	{
		parent::__construct();
	}	  
	
	//------------------------------------------------
	/**
	 * load by id
	 */
	function load($id)
	{
		if(!$id)
		{
			return array();
		}
		
		$query = $this->db->get_where('lib_news',array('id'=>$id));
		if($row = $query->row_array())
		{
			return $row;
		}
		else
		{
			return array();
		}
	}
	
	//-----------------------------------
	/**
	 * create
	 */
	function create()
	{
		$datetime = date('Y-m-d H:m:i');
		$this->db->set('title',$this->title);
		$this->db->set('text',$this->text);
		$this->db->set('author',$this->author);
		
		$this->db->set('adder',$this->session->userdata('name'));
		$this->db->set('CreateDate',$datetime);
		$this->db->set('UpdateDate',$datetime);
		$this->db->set('isdelete','0');
		$this->db->insert('lib_news');
	}
	
	//---------------------------------------------------------
	/**
	 * update
	 * 
	 */
	 function update($id)
	 {
	 	$datetime = date('Y-m-d H:m:i');
		$this->db->set('title',$this->title);
		$this->db->set('text',$this->text);
		$this->db->set('author',$this->author);
		
		$this->db->set('adder',$this->session->userdata('name'));
		$this->db->set('UpdateDate',$datetime);
		$this->db->where('id',$id);
		$this->db->update('lib_news');
	 }
	 
	 //--------------------------------------------------------------
	 /**
	  * total news
	  */
	  function total_news($keywords,$isdelete)
	  {	  	
 	     	$this->db->where('isdelete',$isdelete);
 	     	$rows =array();
 	     	//没有关键字
 	     	if($keywords == '') 	     	
 	     	{ 	     		
 	     		$query = $this->db->get('lib_news'); 	     		
 	     	}
 	     	//有关键字 
 	     	else
 	     	{
 	     		$this->db->like('title',$keywords);
 	     		$query =$this->db->get('lib_news'); 	     		
 	     	} 	     	
 	     	
 	     	return $query->num_rows(); 	  
	  }
	  
	  //--------------------------------------------------------------------------------------
 	   /**
 	      * 删除
 	      * 
 	      */
 	      function delete($id)
 	      {
 	      	$this->db->where('id',$id);
 	      	return $this->db->delete('lib_news');
 	      }
 	      
 	       //--------------------------------------------------------------------------------------
 	     /**
 	      * 回收
 	      * 
 	      */
 	      function in_recycle($id)
 	      {
 	      	$this->db->where('id',$id);
 	      	$this->db->set('isdelete','1');
 	      	return $this->db->update('lib_news');
 	      }
 	      
 	       //--------------------------------------------------------------------------------------
 	     /**
 	      * 还原
 	      * 
 	      */
 	      function out_recycle($id)
 	      {
 	      	$this->db->where('id',$id);
 	      	$this->db->set('isdelete','0');
 	      	return $this->db->update('lib_news');
 	      }
 	      
 	      
 	      
 	      //-----------------------------------
 	      /**
 	       * get newly one
 	       */
 	       function get_newly_one()
 	       {
 	       		$this->db->from('lib_news');
 	       		$this->db->order_by('id','desc');
 	       		$this->db->limit('1');
 	       		$query = $this->db->get();
 	       		
 	       		return $query->result_array();
 	       }
 	      
 	      //----------------------------------------
 	      /**
 	       * find news
 	       */
 	     function find_news($keywords,$count,$offset,$isdelete)
 	     {
 	     	if($count)
 	     	{
 	     		$this->db->limit((int)$count, (int)$offset);
 	     	}
 	     	$this->db->where('isdelete',$isdelete);
 	     	$this->db->order_by('id','desc');
 	     	$rows =array();
 	     	//没有关键字
 	     	if($keywords == '')
 	     	{
 	     		
 	     		$query = $this->db->get('lib_news');
 	     		
 	     	}
 	     	//有关键字 
 	     	else
 	     	{
 	     		$this->db->like('title',$keywords);
 	     		$query =$this->db->get('lib_news'); 	     		
 	     	}
 	     	
 	     	foreach($query->result_array() as $row)
 	     	{
 	     		$rows[$row['id']] = $row;
 	     	}
 	     	return $rows; 	     		
 	     }     
	   
}












