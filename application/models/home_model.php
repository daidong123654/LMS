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
 	 function get_last_five_news($limit)
 	 {
 	 	if($limit)
 	 	{
 	 		$this->db->from('lib_news');
	 	 	$this->db->where('isdelete','0');
	        $this->db->order_by("id", "desc");
	        $this->db->limit($limit);
	        $query =  $this->db->get();
	        return $query->result_array(); 
 	 	}
 	 	else
 	 	{
 	 		$this->db->from('lib_news');
	 	 	$this->db->where('isdelete','0');
	        $this->db->order_by("id", "desc");
	        $query =  $this->db->get();
	        return $query->result_array(); 
 	 	}
 	 	
 	 }
 	 
 	 //------------------------------------------------------------------------------------------
 	      /**
 	       * 查找图书
 	       */
 	      
 	   function find_book($keyword)	
 	   { 
        	//$sql = "select * from lib_bookinfo where isdelete = '0' and bookname like '%$keyword%'";
        	$sql = "select * from lib_bookinfo where isdelete = '0' and " .
        			"bookID in(select bookID from lib_bookinfo where " .
        			"bookname like '%$keyword%' or author like '%$keyword%' or keywords like '%$keyword%' )";       		
        	
        	$query = $this->db->query($sql);
        	$rows = array();
        	
        	while($query)
        	{        		
        		//开始匹配全部信息
        		foreach($query->result_array() as $row)
        		{
        			//echo "<br/>line 296 row:  ";
	        		//print_r($row);
        			//echo "<br/>";
    	    		//查找图书类型
        			$query1 = $this->db->get_where('lib_books_cat',array('id'=>$row['booktype'])); 
        			//print_r($query1);  
        			//echo "275";   
      		  		$row1 = $query1->row_array();
        			if(!empty($row1))
        			{
        			//echo "278";
        			$row['booktypename'] = $row1['name'];
	        		}
	        		else
	        		{
	        			//echo "283";
	        			$row['booktypename'] = $row1['name'];
	        		}
	        		//查找图书出版社
	        		$query2 = $this->db->get_where('lib_publishing',array('ISBN'=>$row['ISBN']));
	        		$row2 = $query2->row_array();
	        		if(!empty($row2))
	        		{
	        			$row['publisher'] = $row2['ISBNname'];
	        		}
	        		else
	        		{
	        			$row['publisher'] = '';
	        		}	        		       		        		
	        	}	        	
	        	return $rows;  
        	} 
			return $rows;
 	   }
 	
 }
?>
