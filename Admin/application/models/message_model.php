<?php
/*
 * Created on 2012-10-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class Message_model extends CI_Model
 {
 	var $id;
 	var $username;
 	var $content;
 	var $reply;
 	var $reply_admin;
 	var $userip;
 	var $if_show;
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 	//--------------------------------------------------------------------------------------------
 	/**
 	 * load by id
 	 * 
 	 */
 	 function load($id)
 	 {
 	 	if(!$id)
 	 	{
 	 		return array();
 	 	}
 	 	$query = $this->db->get_where('lib_message',array('id'=>$id));
 	 	if($row = $query->row_array())
 	 	{
 	 		return $row;
 	 	}
 	 	else
 	 	{
 	 		return array();
 	 	} 	 	
 	 }
 	 
 	 
 	 //---------------------------------------------
 	 /**
 	  * reply
 	  */
 	 function reply($id)
 	 {
 	 	$time = date('Y-m-d H:m:s'); 	 	
 	 	$this->db->set('reply',$this->reply);
 	 	$this->db->set('reply_admin',$this->reply_admin);
 	 	$this->db->set('reply_time',$time);
 	 	
 	 	$this->db->where('id',$id);
 	 	$this->db->update('lib_message'); 	 	
 	 }
 	 
 	 //---------------------------------------------------
 	 /**
 	  * create
 	  */
 	  function create()
 	  {
 	  	$time = date('Y-m-d H:m:s'); 	
 	  	$this->db->set('username',$this->username);
 	  	$this->db->set('content',$this->content);
 	  	$this->db->set('user_ip',$this->userip);
 	  	$this->db->set('AskTime',$time);
 	  }
 	  
 	  //-------------------------------------------------------
 	  /**
 	   * delete
 	   */
 	   function delete($id)
 	   {
 	   		$this->db->where('id',$id);
 	   		return $this->db->delete('lib_message');
 	   }
 	   
 	   //------------------------------------
 	   /**
 	    * in_recycle
 	    */
 	    function in_recycle($id)
 	    {
 	    	$this->db->where('id',$id);
 	    	$this->db->set('if_show','0');
 	    	return $this->db->update('lib_message'); 	    	
 	    }
 	    
 	    //--------------------------------------------------------------------------------------
 	     /**
 	      * 还原
 	      * 
 	      */
 	      function out_recycle($id)
 	      {
 	      	$this->db->where('id',$id);
 	      	$this->db->set('if_show','1');
 	      	return $this->db->update('lib_message');
 	      }
 	      
 	      //----------------------------------------
 	      /**
 	       * find news
 	       */
 	     function find_message($keywords,$count,$offset,$isdelete)
 	     {
 	     	if($count)
 	     	{
 	     		$this->db->limit((int)$count, (int)$offset);
 	     	}
 	     	$this->db->where('if_show',$isdelete);
 	     	$this->db->order_by('id','desc');
 	     	$rows =array();
 	     	//没有关键字
 	     	if($keywords == '')
 	     	{ 	     		
 	     		$query = $this->db->get('lib_message'); 
 	     		//echo "no keywords";	     		
 	     	}
 	     	//有关键字 
 	     	else
 	     	{
 	     		$this->db->like('title',$keywords);
 	     		$query =$this->db->get('lib_message'); 	     		
 	     	}
 	     	
 	     	foreach($query->result_array() as $row)
 	     	{
 	     		$rows[$row['id']] = $row;
 	     		//print_r($row);
 	     	}
 	     	//print_r($rows);
 	     	return $rows;
 	     	 	     		
 	     }
 	     
 	     //--------------------------------------------------------------
	 /**
	  * total message
	  */
	  function total_message($keywords,$isdelete)
	  {	  	
 	     	$this->db->where('if_show',$isdelete);
 	     	$rows =array();
 	     	//没有关键字
 	     	if($keywords == '') 	     	
 	     	{ 	     		
 	     		$query = $this->db->get('lib_message'); 	     		
 	     	}
 	     	//有关键字 
 	     	else
 	     	{
 	     		$this->db->like('content',$keywords);
 	     		$query =$this->db->get('lib_message'); 	     		
 	     	} 	     	
 	     	
 	     	return $query->num_rows(); 	  
	  }     
 }
?>
