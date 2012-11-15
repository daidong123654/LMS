<?php
/*
 * Created on 2012-10-31
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class Home extends CI_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('home_model');
 	}
 	
 	function index()
 	{
 		$data['date'] = $this->get_date();
 		$data['lib_info'] = $this->get_name();
 		$data['news_five'] = $this->get_last_five_news();
 		$data['logged'] = 0;
 		if($this->session->userdata('logged'))
 		{
 			$data['logged']=1;
 		} 		
 		//print_r($data);
 		$this->load->view('home',$data);
 		
 	}
 	//----------------------------------------------------
 	/**
 	 *加载图书馆信息
 	 */
 	function get_name()
 	{  		
 		$result = $this->home_model->get_lib_name(); 	
 		return $result;	
  	}
 	
 	//------------------------------------------------------------
 	/**
 	 * 加载最新五条新闻
 	 */
 	 function get_last_five_news()
 	 {
 	 	$news = $this->home_model->get_last_five_news();
 	 	return $news;
 	 }
 	 
 	
 	//-----------------------------------------
 	/** 
 	 * 公里转农历
 	 */
 	 function get_date()
 	 { 	 	
 		$this->load->library('days');
 	 	$year = date('Y');
 	 	$month = date('m');
 	 	$day = date('d'); 
 	 	$days = $this->days->lunarcalendar($month,$year);
 	 	$today1 = date("Y年m月d日");	
 	 	$today = date("Y-m-d");		
		//公历转农历
		$nl = $this->days->S2L($today);	
		$west_date = $today1;
		$chinese_date = "农历:".$days['year']."年$nl";
		$date=array(
						'west_date' => $west_date,
						'chinese_date'=>$chinese_date
						);	
		return $date;		
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
		 	$this->load->view("book_list",$data);
		 	$this->load->view("reader/home_footer");
	     }
 
 }
?>
