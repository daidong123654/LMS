<?php
/*
 * Created on 2012-10-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class message extends CI_Controller
  {
  	function __construct()
  	{
  		parent::__construct();
  		if(!$this->session->userdata('logged_in'))
 	 	{
 	 		redirect('login');
 	 		exit();
 	 	}
  	}
  	
  	//----------------------------------
  	/**
  	 * index
  	 */
  	 function index()
  	 {
  	 	
  	 }
  }
?>
