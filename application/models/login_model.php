<?php
/*
 * Created on 2012-11-7
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class login_model extends CI_Model
 {
 	var $name;
 	var $password; 	
 	
 	function __construct()
 	{
 		parent::__construct();
 	} 
 	
 	//-----------------------------------------------
 	/**
 	 * checkLogin
 	 */
 	 function signin()
 	 {
 	 	//echo $this->name."  ".md5($this->password);
 	 	//echo $this->name."  ".md5($this->password);
 	 	
 	 	//$query = $this->db->get_where('lib_reader',array('name'=>'dd','password'=>'1bbd886460827015e5d605ed44252251'));
 	 	//$query = $this->db->get_where('lib_reader',array('name'=>$this->name));
 	 	$query = $this->db->get_where('lib_reader',array('name'=>$this->name,'password'=>md5($this->password))); 	 	
 	 	//print_r($query); 	
 	 	 	
 	 	if($row = $query->row_array())
 	 	{
 	 		$query1 = $this->db->get_where('lib_readertype',array('id'=>$row['typeid']));
 	 		//echo 'fucl';
 	 		$row1 = $query1->row_array();
 	 		if(!empty($row1))
 	      	{
 	      		$row['reader_type'] = $row1['name'];
 	      		$row['numberdays'] = $row1['numberdays'];
 	      	}
 	      	else
 	      	{
 	      		$row['reader_type'] = '';
 	      		$row['numberdays'] = '';
 	      	}
 	      	//echo '11';
 	      	//print_r($row);
 	      	return $row;
 	 	}
 	 	//print_r($row);
 	 	return array();
 	 }
 	 
 	 //--------------------------------
 	  /**
 	       * set login time
 	       * 
 	       */
 	       function set_login_time($id)
 	       {
 	       		$datetime = date('Y-m-d H:m:s');
 	       		$this->db->set('LastLoginTime',$datetime);
 	       		$this->db->where('id',$id);
 	       		$this->db->update('lib_reader');
 	       }
 }
?>
