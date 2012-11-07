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
 	 	echo "login index";
 	 	$data = array(); 	 	
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
 	  	 	$users = $user;
 	  	 	$users['logged'] = TRUE; 
 	  	 	$this->session->set_userdata($users);
 	  	 	$this->login_model->set_login_time($this->session->userdata('id')); 
 	  	 	
 	  	 	redirect('home');
 	  	 	//$this->load->view('reader/home');
 	  	 }
 	  	 //fail
 	  	 else
 	  	 {
 	  	 	echo "用户名或者密码错误！";
 	   		//$this->load->view('admin/admin_login');
 	   		redirect('home');
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
 }
?>
