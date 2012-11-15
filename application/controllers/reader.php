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
		$this->load->view("reader/home_header");
		$this->load->view("reader/info_list");
		$this->load->view("reader/home_footer");
	}
	
	//--------------------------------------------------------------------------------------------------------------------------------------
	/**
	 * setting
	 */
	 function setting()
	 {
	 	$this->load->view("reader/home_header");
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
	  	
	  	$data['books'] = $rows;
	  	$this->load->view("reader/home_header");
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
		  	
		  	
		  	$data['books'] = $rows;
		  	$this->load->view("reader/home_header");
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
	    	$this->load->view("reader/home_header");
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
	     	$this->load->view("reader/home_header");
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
	      
	      //-----------------------------------------------------------------------------------------------
	      /**
	       * 显示预借列表
	       */
	       function list_order()
	       {
	       		$this->load->model('reader_model');
	       		$books = $this->reader_model->list_order($this->session->userdata('id') );
	       		//print_r($books);
	       		$data['books'] = $books;
	       		$this->load->view("reader/home_header");
			 	$this->load->view("reader/order_list",$data);
			 	$this->load->view("reader/home_footer");
	       }
	       
	       //-------------------------------------------------------------------------------------------------
	       /**
	        *在线阅读，获得图书信息
	        */
	        function read_online($bookID)
	        {
	        	$this->load->model('reader_model');
	        	$type = 'bookID';
	        	$book = $this->reader_model->get_book_info($type,$bookID,1);
	        	$data['book'] = $book;
	        	$this->load->view("reader/home_header");
			 	$this->load->view("reader/read_online",$data);
			 	$this->load->view("reader/home_footer");
	        	//print_r($book);
	        }
	  
	
	
}	
	
	

?>
