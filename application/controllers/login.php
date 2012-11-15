<?php
/*
 * Created on 2012-11-7
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Login extends CI_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 	//-----------------------------------
 	/**
 	 * index
 	 */
 	 function index()
 	 {
 	 	//echo "login index";
 	 	$data = array();
 	 	redirect('home'); 
 	 		 	
 	 }
 	 
 	 //---------------------------
 	 /**
 	  * login
 	  * 
 	  */
 	  function ReaderLogin()
 	  {
 	  	$name = $this->input->post('name');
 	  	$password = $this->input->post('password'); 	  	

 	  	//将数据提交到数据模型
 	  	$this->load->model('login_model');
 	  	$this->login_model->name = $name;
 	  	$this->login_model->password = $password;
 	  	$this->login_model->signin();
 	  	 if($user = $this->login_model->signin())
 	  	 {
 	  	 	echo "<script> alert('登录成功！。')</script>";
 	  	 	$users = $user;
 	  	 	$users['logged'] = TRUE; 
 	  	 	$this->session->set_userdata($users);
 	  	 	$this->login_model->set_login_time($this->session->userdata('id')); 
 	  	 	$url = site_url('home');
 	  	 	echo "<script> window.location.href= '$url'</script>";  	  	 	
 	  	 	//redirect('home');
 	  	 	//$this->load->view('reader/home');
 	  	 }
 	  	 //fail
 	  	 else
 	  	 { 	 
 	  	 	$url = site_url('home'); 	 	
 	  	 	echo "<script> alert('用户名或者密码错误！。')</script>";
 	   		//$this->load->view('admin/admin_login');
 	   		echo "<script> window.location.href= '$url'</script>";
 	   		return 0;
 	   		//redirect('home');
 	   		//$this->load->view('reader/wrong');
 	  	 } 	  		  	
 	  }
 	  
 	  //---------------------------
 	  /**
 	   * log out
 	   */
 	   function logout()
 	   {
 	   		$this->session->sess_destroy();
			redirect('home');
 	   }
 	   
 	   // --------------------------------------------------------------------

    /**
	 * 验证名字是否已存在 ajax
	 *
	 *
	 */		
	function check_name()
	{
		$qs = query_string_to_array();
	    $name = $qs['tbxRegisterNickname'];
		$this->load->model('reader_config_model');
		$msg = array('Result' => true);
		if ($name){
		    if ($this->reader_config_model->check_name($name)){
				$msg = array('Result' => false);
			}				
		}
        
		echo json_encode($msg);
	}

    // --------------------------------------------------------------------

    /**
	 * 验证邮箱是否已存在 ajax
	 *
	 *
	 */	
	function check_email()
	{
        $qs = query_string_to_array();
	    $email = $qs['tbxRegisterEmail'];
		$this->load->model('reader_config_model');
		$msg = array('Result' => true);
		if ($email){
		    if ($this->reader_config_model->check_email($email)){
				$msg = array('Result' => false);
			}				
		}        
		echo json_encode($msg);
	}
	
	// --------------------------------------------------------------------

    /**
	 * 登陆
	 *
	 *
	 */	
	function check_customer()
	{
		$this->_check_yzm1();

        $name = $this->input->post('tbxLoginNickname');
		$password = $this->input->post('tbxLoginPassword');	
		
		$this->load->model('reader_config_model');            
        $this->reader_config_model->name = $name;
		$this->reader_config_model->password = $password;
		$_customer = $this->reader_config_model->check_customer();
		if ($_customer){
			$customer = array(
				   'user_name'  => $_customer['name'],
				   'user_id'  => $_customer['id'],
				   'user_in' => TRUE,
				   'user_last_login' => $_customer['last_login_at']
			   );
			$this->session->set_userdata($customer);
            
			$this->reader_config_model->update_last_login($_customer['id']);

			redirect('home');
		}else{
            redirect('login/index/customer');
		}
	}
	
	
	
	
	
	// --------------------------------------------------------------------

    /**
	 * 注册生成验证码
	 *
	 *
	 */	
	function yzm_img()
	{
		$this->load->helper('captcha');
		code();
	}
    
	// --------------------------------------------------------------------

    /**
	 * 登陆生成验证码
	 *
	 *
	 */	
	function yzm_img1()
	{
		$this->load->helper('captcha1');
		code();
	}
    
	// --------------------------------------------------------------------
    /**
	 * 检查注册验证码是否准确
	 *
	 *
	 */	
	function _check_yzm()
	{
		session_start();
        $Verifier = $this->input->post('tbxRegisterVerifier');
        if ($_SESSION['verify'] == $Verifier){
			//
		}else{
			redirect('login/index/verifier');
		}
		return;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 检查登陆验证码是否准确
	 *
	 *
	 */	
	function _check_yzm1()
	{
		session_start();
        $Verifier = $this->input->post('tbxLoginVerifier');
        if (!empty($_SESSION['verify1']) && $_SESSION['verify1'] == $Verifier){
			//
		}else{
			redirect('login/index/verifier1');
		}
		return;
	}
	
 }
?>
