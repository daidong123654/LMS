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
 	
 	//留言
 	var $message;
 	var $ip;
 	var $username;
 	
 	var $comments;
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();	//连接数据库
 	} 	
 	
 		 
 	 //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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
 	  	$this->db->set('typeid','1');
 	  	$this->db->set('papertype',$this->papertype);
 	  	$this->db->set('papercode',$this->papercode); 	  	
 	  	$this->db->set('CreateDate',$datetime);
 	  	
 	  	return $this->db->insert('lib_reader'); 	  	
 	  } 	  
 	 
 	   
 	   //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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
	 	  	//$this->db->set('typeid',$this->typeid);
	 	  	//$this->db->set('papertype',$this->papertype);
	 	  	//$this->db->set('papercode',$this->papercode); 	  	
	 	  	$this->db->set('UpdateDate',$datetime);	  
	 	  	
	 	  	//$this->db->set('barcode',$this->barcode);
	 	  	$this->db->set('sex',$this->sex);
	 	  	$this->db->set('age',$this->age);
	 	  	$this->db->set('birthday',$this->birthday);
	 	  	$this->db->set('telephone',$this->telephone);
	 	  	$this->db->set('remark',$this->remark);
	 	  	//$this->db->set('credit',$this->credit);
	 	  	
	 	  	$this->db->where('id',$id);
	 	  	return $this->db->update('lib_reader'); 	  	
 	    }
 	    
 	    //-------------------------------------------------------------------------------------------------------------------------------------------------------
 	    /**
 	     * 查询在借图书
 	     */
 	    function find_inborrow_books($id)
 	    {
 	    	$this->db->where('reader',$id);
 	    	$this->db->where('isreturn','0');
 	    	$this->db->order_by('borrowtime DESC');
 	    	$query = $this->db->get('lib_borrow');
 	    	
 	    	$query->result_array();
 	    	$rows = array();
 	    	
 	    	//$rows['total_inborrow'] = $query->num_rows();
 	    	 	    	
 	    	foreach ($query->result_array() as $row)
 	    	{
 	    		//图书相关信息
	 	  		//print_r($row); 	  		
	 	  		$query1 = $this->db->get_where('lib_bookinfo',array('bookID'=>$row['bookID']));
	 	  		$row1 = $query1->row_array();
	 	  		//print_r($row1);
	 	  		$row['bookname'] = $row1['bookname']; 	
	 	  		$row['barcode'] = $row1['barcode'];
	 	  		$row['price'] = $row1['price']; 	  		
	 	  		//图书类型名
	 	  		$query2 = $this->db->get_where('lib_books_cat',array('id'=>$row1['booktype']))  ;
	 	  		//print_r($query2);	
	 	  		$row2 = array();
	 	  		foreach($query2->result_array() as $row2 )
	 	  		{
	 	  					
	 	  		}
	 	  		$row['booktypename'] = $row2['name'];	
 	  			$row['bookAvail_days'] = $row2['Avail_days'];
 	  			$row['total_inborrow'] = $query->num_rows();
 	  			
 	  			$rows[$row['id']] = $row;
 	    	}
 	    	return $rows; 	    	
 	    }
 	    
 	    //-------------------------------------------------------------------------------------------------------------------------------------------------------
 	    /**
 	     * 查询历史借阅
 	     */
 	    function find_history_borrow_books($id)
 	    {
 	    	$this->db->where('reader',$id);
 	    	$this->db->where('isreturn','1');
 	    	$this->db->order_by('borrowtime DESC');
 	    	$query = $this->db->get('lib_borrow');
 	    	
 	    	$query->result_array();
 	    	$rows = array();
 	    	
 	    	//$rows['total_inborrow'] = $query->num_rows();
 	    	 	    	
 	    	foreach ($query->result_array() as $row)
 	    	{
 	    		//图书相关信息
	 	  		//print_r($row); 	  		
	 	  		$query1 = $this->db->get_where('lib_bookinfo',array('bookID'=>$row['bookID']));
	 	  		$row1 = $query1->row_array();
	 	  		//print_r($row1);
	 	  		$row['bookname'] = $row1['bookname']; 	
	 	  		$row['barcode'] = $row1['barcode'];
	 	  		$row['price'] = $row1['price']; 	  		
	 	  		//图书类型名
	 	  		$query2 = $this->db->get_where('lib_books_cat',array('id'=>$row1['booktype']))  ;
	 	  		//print_r($query2);	
	 	  		$row2 = array();
	 	  		foreach($query2->result_array() as $row2 )
	 	  		{
	 	  					
	 	  		}
	 	  		$row['booktypename'] = $row2['name'];	
 	  			$row['bookAvail_days'] = $row2['Avail_days'];
 	  			$row['total_inborrow'] = $query->num_rows();
 	  			$rows[$row['id']] = $row;
 	    	}
 	    	return $rows; 	    	
 	    }
 	    
 	    //----------------------------------------------------------------------------------------------------------------------------------------
 	    /**
 	     * 留言
 	     */
 	     function say_something()
 	     {
 	     	$datetime = date('Y-m-d H:m:s');
 	     	$this->db->set('username',$this->session->userdata('name'));
 	     	$this->db->set('content',$this->message);
 	     	$this->db->set('AskTime',$datetime);
 	     	//$ip=$_SERVER["REMOTE_ADDR"]; 
 	     	$ip = $this->ip; 
 	     	$this->db->set('user_ip',$ip);
 	     	return $this->db->insert('lib_message'); 	     	
 	     }
 	     
 	      //----------------------------------------------------------------------------------------------------------------------------------------
 	    /**
 	     * 修改留言
 	     */
 	     function edit_say_something($id)
 	     {
 	     	$datetime = date('Y-m-d H:m:s');
 	     	$this->db->set('username',$this->session->userdata('name'));
 	     	$this->db->set('content',$this->message);
 	     	$ip=$_SERVER["REMOTE_ADDR"];  
 	     	$this->db->set('user_ip',$ip);
 	     	$this->db->where('id',$id);
 	     	return  $this->db->update('lib_message'); 	     	
 	     }
 	     
 	     //------------------------------------------------------------------------------------------------------------------------------------------------
 	     /**
 	      * 查找所有留言
 	      */
 	      function find_all_message()
 	      {
 	      		$this->db->order_by('AskTime DESC');
 	      		$query = $this->db->get('lib_message');
 	      		$rows = array();
 	      		$message = $query->result_array();
 	      		foreach($message as $row)
 	      		{
 	      			//print_r($row);
 	      			$rows[$row['id']] = $row;
 	      		}
 	      		return $rows;
 	      }
 	     //---------------------------------------------------------------------------------------------------------------------------------------------------
 	     /**
 	      * 得到图书详细信息+在线阅读
 	      */
 	      function get_book_info($type,$value,$content)
 	      {
	 	      	if(!$value)
		 		{
		 			return array();
		 		}
		 		//的到书籍信息
		 		$query = $this->db->get_where('lib_bookinfo',array($type=>$value)); 		
		 		
		 		if($row = $query->row_array())
		 		{
		 			//分类信息
		 			$query1 = $this->db->get_where('lib_books_cat',array('id'=>$row['booktype']));	
		 			//还要找到各个等级,暂时返回叶等级
		 			$row1 = $query1->row_array();
		 			
		 			if(!empty($row1))
		 			{
		 				$row['type'] = $row1['name'];
		 			}
		 			else
		 			{
		 				$row['type'] = array();
		 			}
		 			
		 			if($content!=0)
		 			{
		 				//内容(这里的barcode就对应的是书本信息表里面的bookID,因为借书是想用barcode来实现的，现在用bookID代替)
			 			$query2 = $this->db->get_where('lib_book_content',array('barcode'=>$row['bookID']));
			 			$row2 = $query2->row_array(); 
			 			if(!empty($row2))
			 			{
			 				$row['content'] = $row2['content'];
			 			}
			 			else
			 			{
			 				$row['content'] = '';
			 			}
		 			}
		 			
		 			
		 			//查找图书出版社
			        $query3 = $this->db->get_where('lib_publishing',array('ISBN'=>$row['ISBN']));
			        $row3 = $query3->row_array();
			        if(!empty($row3))
			        {
			        	$row['publisher'] = $row3['ISBNname'];
			        }
			    else
			        {
			        	$row['publisher'] = '';
			        }		 			
		 			return $row;		
		 		} 		
		 		return array();
 	      }
 	      //------------------------------------------------------------------------------------------------------------------------------------------------
 	      /**
 	       * 续借
 	       */
 	      function xujie($id)
 	      {
 	      	$this->db->where("id",$id);
 	      	$this->db->where("isreturn",'0');
 	      	$query = $this->db->get('lib_borrow');
 	      	$row = $query->result_array(); 	
 	      	//print_r($row);
 	      	$datetime = date("Y-m-d H:i:s");
 	      	//还没有被续借过
 	      	if(!$row['0']['isdely'] && $returntime=$row['0']['returntime'] > $datetime)
 	      	{
 	      		//$returntime=$row['0']['returntime']." 00:00:00";
	 	      	$returntime=$row['0']['returntime'];
	 	      	//echo "<br/>1:",$returntime,"<br/>";
	 	      	$delyreturntime = date('Y-m-d',strtotime($returntime)+3600*24*30);
	 	      	//echo $delyreturntime,"<br/>";
	 			$this->db->set('returntime',$delyreturntime);
	 			$this->db->set('isdely','1');
	 			$this->db->where('id',$id); 			
	 			return $this->db->update('lib_borrow');
 	      	}      	
 	      	//已经被续借
 	      	else
 	      	{ 	      		
 	      		return false;
 	      	}
 	      }
 	      //-------------------------
 	      /**
 	       * 修改密码
 	       */
 	      function changepassword($id)
 	      {
 	      	$this->db->set('password',$this->password);
 	      	$this->db->where('id',$this->session->userdata('id'));
 	      	$this->db->update('lib_reader'); 	      	
 	      }
 	      //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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
	        		
	        		if($this->is_ordered($row['barcode'],$this->session->userdata('id')))
	        			$row['is_ordered'] = '1';
	        		else
	        			$row['is_ordered'] = '0';
	        		
	        		$rows[$row['bookID']] = $row;	        		        		
	        	}	        	
	        	return $rows;  
        	} 
			return $rows;
 	   }
 	   
 	   //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 	   /**
 	    * 检查某人是不是预借过某一本书
 	    */
 	    function is_ordered($barcode,$id)
 	    {
 	    	$query = $this->db->get_where('lib_order_borrow',array('bookID' => $barcode,'reader' => $id ) );			
			//print_r($query);
			$num = $query->result_array();
			//print_r($num);
			$row = array();
			foreach($num as $row)
			{
				//print_r($row);
		        if (!$row['iscancel'])
		        {
		            return true;
		        }		       
			} 
			return false;			
 	    }   
 	   
 	   //--------------------------------------------------------------------------------------------------------------------------------------------------------
 	   /**
 	    * 预借
 	    */
 	    function order_book($barcode,$reader)
 	    {
 	    	$datetime = date("Y-m-d H:i:s");
 	    	$this->db->set('reader',$reader);
 	    	$this->db->set('bookID',$barcode);
 	    	$this->db->set('borrowtime',$datetime);
 	    	return $this->db->insert('lib_order_borrow');
 	    }
 	    
 	    //-------------------------------------------------------------------------------------------------------------------------------------------------------------
 	    /**
 	     * cancle order
 	     */
 	     function cancel_order($barcode,$reader)
 	     {
 	     	$datetime = date("Y-m-d H:i:s");
 	    	$this->db->where(array('reader'=> $reader,'bookID'=>$barcode));
 	    	$this->db->set('canceltime',$datetime);
 	    	$this->db->set('iscancel','1');
 	    	return $this->db->update('lib_order_borrow');
 	     }
 	   
 	   //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 	   /**
 	    * 全部预借
 	    */
 	    function list_order($id)
 	    {
 	    	$this->db->where('iscancel','0');
 	    	$this->db->where('reader',$id);
 	    	$query = $this->db->get('lib_order_borrow');
 	    	$orders = $query->result_array();
 	    	//print_r($orders);
 	    	$barcode = 'barcode';
 	    	$books = array();
 	    	foreach($orders as $row)
 	    	{
 	    		//print_r($row);
 	    		$book = $this->get_book_info($barcode,$row['bookID'],0);
 	    		$book['orderid'] = $row['id'];
 	    		$book['borrowtime'] = $row['borrowtime'];
 	    		//print_r($book);
 	    		$books[$book['bookID']] = $book; 	    		
 	    	}
 	    	return $books;
 	    }
 	    
 	    //----------------------------------------------------------------------------------------------------------------------------------------------------
 	    /**
 	     * 查找评论
 	     */
 	     function find_comment($bookID)
 	     {
 	     	$this->db->where('bookID',$bookID);
 	     	$query = $this->db->get('lib_book_comment');
 	     	$com = $query->result_array();
 	     	$comments = array();
 	     	foreach($com as  $row)
 	     	{
 	     		//print_r($row);
 	     		$reader = $this->find_reader($row['reader']);
 	     		//print_r($reader);
 	     		$row['reader_info'] = $reader;
 	     		$comments[$row['id']] = $row;
 	     	} 
 	     	//return $query->result_array();
 	     	//print_r($comments);
 	     	return $comments;
 	     }
 	     
 	     //--------------------------------------------------------------------------------------------------------------------------------------------------------------
 	     /**
 	      * find reader
 	      */
 	      function find_reader($id)
 	      {
 	      	$this->db->where('id',$id);
 	      	$query = $this->db->get('lib_reader');
 	      	$re = $query->result_array();
 	      	$row = array();
 	      	foreach($re as $row)
 	      	{}
 	      	return $row;
 	      }
 	    
 	    //---------------------------------------------------------------------------------------------------------------------
 	    /**
 	     * 填写评论
 	     */
 	     function comment($bookID)
 	     {
 	     	$datetime = date('Y-m-d H:i:s');
 	     	$this->db->set('bookID',$bookID);
 	     	$this->db->set('reader',$this->session->userdata('id'));
 	     	$this->db->set('comment',$this->comments);
 	     	$this->db->set('time',$datetime);
 	     	return $this->db->insert('lib_book_comment');
 	     }
 	     
 	     
 }
?>
