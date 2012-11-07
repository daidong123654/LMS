<?php
/*
 * Created on 2012-9-8
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class Reader_model extends CI_Model
 {
 	//注册必须的信息
 	var $name; 	
 	var $password; 	
 	var $papercode; 	
 	var $papertype; 	
 	var $Email; 	
 	var $typeid; 	
 	
 	//一般信息
 	var $barcode;
 	var $sex;
 	var $age;
 	var $birthday;
 	var $telephone;
 	var $remark;
 	var $credit;
 	
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();	//连接数据库
 	} 	
 	
 	//-------------------------------------------------------------------------------------------
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
 	 	
 	 	$query = $this->db->get_where('lib_reader',array('id'=>$id));
 	 	
 	 	if($row = $query->row_array())
 	 	{
 	 		//return $row;
 	 		$type = $this->db->get_where('lib_readertype',array('id'=>$row['typeid']));
 	 		$temp = $type->result_array();
 	 		//print_r($temp);
 	 		foreach($temp as $name => $value)
 	 		{
 	 			$row['type_name'] = $value['name'];
 	 			$row['numberofdays'] = $value['numberdays'];
 	 		}
 	 		
 	 		
 	 		return $row;
 	 	}
 	 	else
 	 	{
 	 		return array();
 	 	}
 	 }
 	 
 	 //-------------------------------------------------------------------------------------
 	 /**
 	  * 创建用户
 	  * 
 	  */
 	  function create()
 	  {
 	  	$datetime = date('Y-m-d H:i:s');
 	  	
 	  	$this->db->set('name',$this->name);
 	  	$this->db->set('Email',$this->Email);
 	  	$this->db->set('password',md5($this->password));
 	  	$this->db->set('typeid',$this->typeid);
 	  	$this->db->set('papertype',$this->papertype);
 	  	$this->db->set('papercode',$this->papercode); 	  	
 	  	$this->db->set('CreateDate',$datetime);
 	  	
 	  	$this->db->insert('lib_reader'); 	  	
 	  }
 	  
 	 
 	   
 	   function find_readers($options = array(), $count=20, $offset=0,$isdelete='0')
		{
			if (!is_array($options))
			{
	            return array();
	        }	
	        if ($count)
	        {
	            $this->db->limit((int)$count, (int)$offset);
	        }	          
	             	
	        $query = $this->_query_readers($options,$isdelete);	
	        $rows = array();
	        //print_r($rows);
	        foreach($query->result_array() as $row)
 	   		{
 	   			$query1 = $this->db->get_where('lib_readertype',array('id'=>$row['typeid']));
 	   			$row1 = $query1->row_array();
 	   			
 	   			if(!empty($row1))
 	   			{
 	   				$row['type_name'] = $row1['name'];
 	   				$row['numberofdays'] = $row1['numberdays'];
 	   			}
 	   			else
 	   			{
 	   				$row['type_name'] = 0;
 	   				$row['numberofdays'] = 0;
 	   			}
 	   			
 	   			$rows[$row['id']] = $row;
 	   		}
 	   		return $rows;
		}
		
		/**
		 * 私有函数
		 *
		 *
		 */
		function _query_readers($options = null,$isdelete)
	    {
	        $this->db->from('lib_reader');	        
	        $this->db->where('isdelete',$isdelete);	        
	        
			if (!empty($options['conditions']))
			{
	            $this->db->where($options['conditions']);
	        }
	        
	        if (isset($options['order']))
	        {
	            $this->db->order_by($options['order']);
	        } 
	        else
	        {
	            $this->db->order_by('id DESC');
	        }
	
	        return $this->db->get();
	    }
 	   
 	   //--------------------------------------------------------------------------------------
 	   /**
 	    * 更新
 	    * 
 	    */
 	    function update($id)
 	    {
 	    	$datetime = date('Y-m-d H:i:s');
 	  	
	 	  	$this->db->set('name',$this->name);
	 	  	$this->db->set('Email',$this->Email);
	 	  	if($this->password)
	 	  	{
	 	  		$this->db->set('password',md5($this->password));
	 	  	}	 	  	
	 	  	$this->db->set('typeid',$this->typeid);
	 	  	$this->db->set('papertype',$this->papertype);
	 	  	$this->db->set('papercode',$this->papercode); 	  	
	 	  	$this->db->set('UpdateDate',$datetime);	 	  
	 	  	
	 	  	$this->db->set('barcode',$this->barcode);
	 	  	$this->db->set('sex',$this->sex);
	 	  	$this->db->set('age',$this->age);
	 	  	$this->db->set('birthday',$this->birthday);
	 	  	$this->db->set('telephone',$this->telephone);
	 	  	$this->db->set('remark',$this->remark);
	 	  	$this->db->set('credit',$this->credit);
	 	  	
	 	  	$this->db->where('id',$id);
	 	  	return $this->db->update('lib_reader'); 	  	
 	    }
 }
?>
