<?php
/*
 * Created on 2012-9-8
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reader extends CI_Controller
{
	public function __construct()
	{ 
		parent::__construct();	
		if(!$this->session->userdata('logged'))
 		{
 			redirect('login');
 			exit();
 		}	
	}
	//------------------------------------------------------------------------------------------------------------------------------------
	function index()
	{
		//echo "index","<br/>";
		$header['header'] = '个人主页';
		$this->load->view("reader/home_header",$header);
		$this->load->view("reader/info_list");
		$this->load->view("reader/home_footer");
	}
	
	//--------------------------------------------------------------------------------------------------------------------------------------
	/**
	 * setting
	 */
	 function setting()
	 {
	 	$header['header'] = '设置信息';
	 	$this->load->view("reader/home_header",$header);
	 	$this->load->view("reader/set_info");
	 	$this->load->view("reader/home_footer");
	 }
	 
	 //---------------------------------------------------------------------------------------------------------------------------------------------
	 /**
	  * history
	  */
	  function history()
	  {
	  	$this->load->model('reader_model');
	  	$rows = $this->reader_model->find_history_borrow_books($this->session->userdata("id"));
	  	
	  	//$rows = $this->reader_model->find_history_borrow_books(7);
	  	$header['header'] = '借阅历史';
	  	$data['books'] = $rows;
	  	$this->load->view("reader/home_header",$header);
	 	$this->load->view("reader/history",$data);
	 	$this->load->view("reader/home_footer");
	  }
	  //-----------------------------------------------------------------------------------------------------------------
	  /**
	   * inborrow
	   */
	   function inborrow()
	   {
	   		$this->load->model('reader_model');
		  	$rows = $this->reader_model->find_inborrow_books($this->session->userdata("id"));
		  	
		  	//$rows = $this->reader_model->find_inborrow_books(53);
		  	
		  	//$this->reader_model->xujie(6);
		  	
		  	$header['header'] = '在借图书';
		  	$data['books'] = $rows;
		  	$this->load->view("reader/home_header",$header);
		 	$this->load->view("reader/inborrow",$data);
		 	$this->load->view("reader/home_footer");
	   }
	   //------------------------------------------------------------------------------------------------------------------------------------
	   function xujie($id)
	   {
	   		$this->load->model('reader_model');
	   		if($this->reader_model->xujie($id))
	   		{	
	   			echo "<h3>续借成功,两秒之后返回。。。</h3>";
	   			echo "<h3><a href=".site_url('reader/inborrow').">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;
	   			//echo "<script> alert('续借成功');window.location.href= '".site_url('reader/inborrow')."'</script>";	 			
				echo "<meta http-equiv=\"refresh\" content=\"2,url=".site_url('reader/inborrow')."\">";	   			
	   			return true;
	   		}
	   		else
	   		{
	   			//echo "续借失败,该图书已经被续借过了";
	   			echo "<h3>续借失败,该图书已经被续借过了。。。</h3>";
	   			echo "<h3><a href=".site_url('reader/inborrow').">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;	   				 			
				echo "<meta http-equiv=\"refresh\" content=\"2,url=".site_url('reader/inborrow')."\">";	   	
	   			return false;
	   		} 
	   }
	   
	   //-------------------------------------------------------------------------------------------------------------------------------
	   /**
	    * load changepass view
	    */
	    function changepass()
	    {
	    	$header['header'] = '修改密码';
	    	$this->load->view("reader/home_header",$header);
		 	$this->load->view("reader/change_pass");
		 	$this->load->view("reader/home_footer");
	    }
	    
	    //------------------------------------------------------------------------------------------------------------------------------------------
	    /**
	     * 查找图书
	     */
	     function find_book()
	     {
	     	$keyword = $this->input->post('keyword');
	     	//echo $keyword;
	     	$this->load->model('reader_model');
	     	$books = $this->reader_model->find_book($keyword);
	     	//print_r($books);
	     	$data['keyword'] = $keyword;
	     	$data['books'] = $books;
	     	$header['header'] = '图书列表';
	     	$this->load->view("reader/home_header",$header);
		 	$this->load->view("reader/book_list",$data);
		 	$this->load->view("reader/home_footer");
	     }
	     
	     //------------------------------------------------------------------------------------------------------------------------------------
	     /**
	      * 预借
	      */
	      function order_book($barcode)
	      {
	      		//echo $barcode;
	      	 	$this->load->model('reader_model');
	      	 	if(!$this->reader_model->is_ordered($barcode,$this->session->userdata('id')))
	      	 	{
	      	 		if($this->reader_model->order_book($barcode,$this->session->userdata('id')))
			   		{	
			   			echo "<h3>预借成功,两秒之后返回。。。</h3>";
			   			echo "<h3><a href=".site_url('reader/list_order').">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;
						echo "<meta http-equiv=\"refresh\" content=\"2,url=".site_url('reader/list_order')."\">";	   			
			   			return true;
			   		}
			   		else
			   		{		   			
			   			echo "<h3>预借失败,该图书已经被预借过了。。。</h3>";
			   			echo "<h3><a href=".site_url('reader/inborrow').">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;	   				 			
						echo "<meta http-equiv=\"refresh\" content=\"2,url=".site_url('reader/list_order')."\">";	   	
			   			return false;
			   		} 
	      	 	}
	      	 	else
	      	 	{
	      	 		echo "<h3>预借失败,该图书已经被预借过了。。。</h3>";
			   		echo "<h3><a href=".site_url('reader/inborrow').">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;	   				 			
					echo "<meta http-equiv=\"refresh\" content=\"2,url=".site_url('reader/list_order')."\">";	   	
			   		return false;
	      	 	}
		   		
	      }
	      
	      //------------------------------------------------------------------------------------------------------------------------------------
	     /**
	      * 取消预借
	      */
	      function cancel_order($barcode)
	      {
	      		echo $barcode;
	      	 	$this->load->model('reader_model');
	      	 	
	      	 	if($this->reader_model->cancel_order($barcode,$this->session->userdata('id')))
			   	{	
			   		echo "<h3>取消成功,两秒之后返回。。。</h3>";
			   		echo "<h3><a href=".site_url('reader/list_order').">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;
			   		//echo "<script> alert('续借成功');window.location.href= '".site_url('reader/inborrow')."'</script>";	 			
					echo "<meta http-equiv=\"refresh\" content=\"2,url=".site_url('reader/list_order')."\">";	   			
			   		return true;
			   	}
	      }
	      
	      //------------------------------------------------------------------------------------------------------------------------------------------------
	      /**
	       * 显示预借列表
	       */
	       function list_order()
	       {
	       		$header['header'] = '预借信息';
	       		$this->load->model('reader_model');
	       		$books = $this->reader_model->list_order($this->session->userdata('id') );
	       		//print_r($books);
	       		$data['books'] = $books;
	       		$this->load->view("reader/home_header",$header);
			 	$this->load->view("reader/order_list",$data);
			 	$this->load->view("reader/home_footer");
	       }
	       
	       //--------------------------------------------------------------------------------------------------------------------------------------------------
	       /**
	        *在线阅读，获得图书信息
	        */
	        function read_online($bookID)
	        {
	        	$this->load->model('reader_model');
	        	$type = 'bookID';
	        	$book = $this->reader_model->get_book_info($type,$bookID,1);
	        	$data['book'] = $book;
	        	$header['header'] = '在线阅读';
	        	$this->load->view("reader/home_header",$header);
			 	$this->load->view("reader/read_online",$data);
			 	$this->load->view("reader/home_footer");
	        	//print_r($book);
	        }
	        
	        //---------------------------------------------------------------------------------------------------------------------------------------------------------
	        /**
	         * 查看评论
	         */
	         function find_comment($bookID)
	         {
	         	//echo "查看评论";
	         	//echo $bookID;
	         	$type = 'bookID';
	         	$this->load->model('reader_model');
	         	$book = $this->reader_model->get_book_info($type,$bookID,0);
	         	//print_r($book);
	         	$data['book'] = $book;
	         	$data['comments'] = $this->reader_model->find_comment($bookID);
	         	$header['header'] = '评论列表'; 
	         	$this->load->view("reader/home_header",$header);
	         	$this->load->view('reader/comment',$data);
	         	$this->load->view("reader/home_footer");
	         }
	         
	         //------------------------------------------------------------------------------------------------------------------------------------------------------
	         /**
	          * 填写评论
	          */
	          function comment($bookID)
	          {
	          	$submit = $this->input->post('submit');
	          	$comment = $this->input->post('comment');
	          	//echo $submit;
	          	//没有提交数据只是单纯查看评论
	          	if($submit =='')
	          	{
	          		$this->find_comment($bookID);
	          	}
	          	else
	          	{
	          		//echo $submit;
	          		//echo $comment;
	          		//表单验证
			 	 	$this->load->library('form_validation');
			 	 	
			 	 	//设置表单验证数据规则
			 	 	$this->set_save_form_rules();
			 	 	
			 	 	if($this->form_validation->run() == TRUE)
 	 				{	
 	 					$this->load->model('reader_model');
 	 					$this->reader_model->comments = $comment;
 	 					if($this->reader_model->comment($bookID))
 	 					{
 	 						$url = site_url('reader/comment').'/'.$bookID;			 	 			
				   			echo "<script> alert('评论成功!返回查看评论。')</script>";
				   			echo "<script> window.location.href= '$url'</script>";
				   			echo "<h3><a href=".$url.">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;				   			
 	 					}	
 	 					else
 	 					{
 	 						$url = site_url('reader/comment').'/'.$bookID;			 	 			
				   			echo "<script> alert('评论失败!返回重新填写。')</script>";
				   			echo "<script> window.location.href= '$url'</script>";	
				   			echo "<h3><a href=".$url.">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;		
 	 					} 	 					 	 					
 	 				}
 	 				else
 	 				{
 	 					$url = site_url('reader/comment').'/'.$bookID;			 	 			
				   		echo "<script> alert('评论失败!评论内容不能为空。')</script>";
				   		echo "<script> window.location.href= '$url'</script>";	
				   		echo "<h3><a href=".$url.">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;
 	 				}	          		
	          	}	          	
	          }
	          
	   //----------------------------------------------------------------------------------------------------------------------------------------------
 	  /**
 	   * 验证规则
 	   * 
 	   */
 	   function set_save_form_rules()
 	   { 	   		
 	   		$this->form_validation->set_rules('comment', 'comment', 'required');			
 	   }       
	  //------------------------------------------------------------------------------------------------------------------------------------------------
	/**
	 * 留言
	 */
	 function find_all_message()
	 {
	 	$this->load->model('reader_model');
	 	$message = $this->reader_model->find_all_message();
	 	//print_r($message);
	 	$data['message'] = $message;
	 	$header['header'] = '留言列表';
	    $this->load->view("reader/home_header",$header);
		$this->load->view("message",$data);
		$this->load->view("reader/home_footer");
	 	
	 }
	//------------------------------------------------------------------------------------------------------------------------------------------------
	 /**
	  * 签写留言 
	  */
	  function message()
	  {
	  	//echo '1';
	  	$submit = $this->input->post('submit');
	  	$message = $this->input->post('message');
	  	$username = $this->input->post('username');
	  	$ip=$_SERVER["REMOTE_ADDR"]; 
	  	echo $message;
	  	echo $username;	  	
	  
	  	if($submit =='')
	    {
	          $this->find_all_message();
	    }
	    else
	    {
	    	$this->load->library('form_validation');			 	 	
			//设置表单验证数据规则
			$this->set_message_form_rules();			 	 	
			if($this->form_validation->run() == TRUE)
 	 		{
 	 			$this->load->model('reader_model');
 	 			$this->reader_model->message = $message;
 	 			$this->reader_model->username = $username;
 	 			$this->reader_model->ip = $ip;
 	 			
 	 			if($this->reader_model->say_something())
 	 			{
 	 				$url = site_url('reader/message');			 	 			
					echo "<script> alert('留言成功!返回查看留言。')</script>";
					echo "<script> window.location.href= '$url'</script>";
					echo "<h3><a href=".$url.">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;				   			
 	 			}	
 	 			else
 	 			{
 	 				$url = site_url('reader/message');			 	 			
					echo "<script> alert('留言失败!返回重新填写。')</script>";
					echo "<script> window.location.href= '$url'</script>";	
					echo "<h3><a href=".$url.">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;		
 	 			} 	 			
 	 		}
 	 		else
 	 		{
 	 			$url = site_url('reader/message');			 	 			
				echo "<script> alert('留言失败!填写不完整。')</script>";
				echo "<script> window.location.href= '$url'</script>";	
				echo "<h3><a href=".$url.">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;		
 	 		} 	
	    }
	  }
	  
	   //----------------------------------------------------------------------------------------------------------------------------------------------
 	  /**
 	   * 验证规则
 	   * 
 	   */
 	   function set_message_form_rules()
 	   { 	   		
 	   		$this->form_validation->set_rules('message', 'message', 'required');
 	   		$this->form_validation->set_rules('username', 'username', 'required');			
 	   }   
	
}	
	
	

?>
