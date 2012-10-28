<?php
/*
 * Created on 2012-10-26
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class systems extends CI_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->library("session");
 	 	if(!$this->session->userdata('logged_in'))
 	 	{
 	 		redirect('login');//登陆界面的地址（相对）
 	 		exit();
 	 	}
 	}
 	 	
 	 //-----------------------------------------------------------------
 	 /**
 	 * index
 	 */
 	function index()
 	{
 	 	 //echo "aaaa";
 	 	 $this->load->model('systems_model');
 	 	 $data['editing'] = $this->systems_model->load(); 	 	 
 	 	 $this->load->view('system/info_list',$data); 	 	 
 	 	 
 	} 	
 	
 	
 	//-------------------------------------
 	/**
 	 * editing
 	 */
 	 function edit()
 	 {
 	 	//检出权限
	 	if(!admin_priv('lib_info_edit'))
	 	{
	 	   return show_message2('你没有编辑新闻的权限！','news');
	 	}
	 	$params = $this->uri->uri_to_assoc();
	 	if(!empty($params['id']) && $params['id'] > 0)
	 	{
	 		$id = $params['id'];
	 		$this->load->model('systems_model');
	 		$data['editing'] = $this->systems_model->load();
	 		if(!$data['editing'])
	 		{
	 			return show_message2('无效ID','systems');
	 		}
	 		$data['header_text'] = "编辑图书馆信息";	 		 
	 	}
	 	else
	 	{
	 		return show_message2('无效ID','systems');
	 	}
	 	
	 	// 创建 编辑器 
		$this->fckeditor->BasePath = base_url().'fck/';
	    $this->fckeditor->InstanceName = 'Intruction';   
		$this->fckeditor->Height = '500';
        $this->fckeditor->ToolbarSet = 'Normal';
	    $this->fckeditor->Value = $data['editing']['Intruction'];
		$data['fckeditor']=$this->fckeditor->CreateHtml(); 
	 	 	
	 	$this->load->view('system/edit',$data);
 	 }
 	 
 	 //-----------------------
 	 /**
 	  * save
 	  */
 	  function save()
 	  {
 	  		//图书馆信息
 			 $LibraryName = $this->input->post('LibraryName');
 			 $LibraryCurator = $this->input->post('LibraryCurator');
 			 $Telephone = $this->input->post('Telephone');
 			 $Email = $this->input->post('Email');
 			 $Address = $this->input->post('Address');
 			 $Url = $this->input->post('Url');
 			 $BuildingDate = $this->input->post('BuildingDate');
 			 $Intruction = $this->input->post('Intruction');
 			 
 			 //表单验证
 	  		$this->load->library('form_validation'); 	  		
 	  		//set ryles
 	  		$this->set_save_form_rules();
 			if($this->form_validation->run() == TRUE)
 	  		{
 	  			$id = $this->input->post('id');
 	  			//提交数据到模型
 	  			$this->load->model('systems_model');
 	  			$this->systems_model->LibraryName = $LibraryName;
 	  			$this->systems_model->LibraryCurator = $LibraryCurator;
 	  			$this->systems_model->Telephone = $Telephone;
 	  			$this->systems_model->Email = $Email;
 	  			$this->systems_model->Url = $Url;
 	  			$this->systems_model->Address = $Address;
 	  			$this->systems_model->BuildingDate = $BuildingDate;
 	  			$this->systems_model->Intruction = $Intruction; 
 	  			
 	  			$this->systems_model->update($id);
 	  			return show_message2('信息已更新！','systems'); 	 		
	 	  		
 	  		}
 	  		//验证失败
 	  		else
 	  		{
 	  			$this->load->model('systems_model');
 	 	 		$data['editing'] = $this->systems_model->load();
 	 	 		$data['header_text'] = "编辑图书馆信息";	
 	 	 		
 	 	 		// 创建 编辑器 
				$this->fckeditor->BasePath = base_url().'fck/';
	  		 	$this->fckeditor->InstanceName = 'Intruction';   
				$this->fckeditor->Height = '500';
      		 	$this->fckeditor->ToolbarSet = 'Normal';
	  		  	$this->fckeditor->Value = $data['editing']['Intruction'];
				$data['fckeditor']=$this->fckeditor->CreateHtml(); 
 	 	 		
 	  			$this->load->view('systems/edit',$data);
 	  		} 
 			 
 	  	
 	  }
 	
 	//--------------------------------------------
 	  /**
 	   * 表单验证规则
 	   * 
 	   */
 	   function set_save_form_rules()
 	   { 	   
 	   		$rules['LibraryName'] = 'required';
 	   		$rules['LibraryCurator'] = 'required';
 	   		$rules['Telephone'] = 'required';
 	   		$rules['Email'] = 'required';
 	   		$rules['Address'] = 'required';
 	   		$rules['Url'] = 'required';
 	   		$rules['BuildingDate'] = 'required';
 	   		$rules['Intruction'] = 'required';	   		
 	   		 	   		
 	   		$this->form_validation->set_rules($rules);		
 	   } 	 
 	//----------------------------------------------
 	/**
 	 * work (设置办理一张卡收费信息)
 	 */
 	 function work()
 	 {
 	 	echo "a";
 	 }
 	
 }
?>
