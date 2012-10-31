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
 	}
 	
 	function index()
 	{
 		$data['date'] = $this->get_date();		
 		$this->load->view('home',$data);
 	}
 	
 	//-----------------------------------------
 	/** 
 	 * 公里转农历
 	 */
 	 function get_date()
 	 {
 	 	//echo "<header>Home Page</header>";
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
 
 }
?>
