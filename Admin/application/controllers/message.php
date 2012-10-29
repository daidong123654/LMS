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
  	 	$page = $this->input->post('page');
 		$page = (int)$page;
 		//echo $page;
 		//分页显示url
 		$segments = $this->uri->uri_to_assoc();
 		$search_uri = '';
 		
 		//计算查询条件
       $keywords = $this->input->post('keywords');
 		
 		//分页查询数据
 		if($page)
 		{
            $page_offset = $page-1;
		}
		else if (!empty($segments['page']))
		{
            $page_offset = (int)$segments['page'];		
        } 
        else 
        {
            $page_offset = 0;
        }
		if ($page_offset<0)
		{
            $page_offset=0;
		}
 		
 		//分页url
 		$base_url = site_url('message/index/page').'/';
 		
 		//每页显示数据条数
 		$per_page = 5;
 		
 		//数据总数
 		$this->load->model('message_model');
 		$data['total_rows'] = $this->message_model->total_message($keywords,'1');
 		
 		//total pages
 		$data['total_pages'] = ceil($data['total_rows'] / $per_page);
 		
 		//当前页(input)
 		$data['page'] = $page_offset + 1;
 		$data['page'] = ($data['page']>$data['total_pages'] && $data['total_pages']>0) ? $data['total_pages'] : $data['page'];
 		
 		//first last prev next page
 		$data['page_first'] = $base_url.'0'.$search_uri;
		$data['page_last'] = $base_url.($data['total_pages']-1).$search_uri;
		$data['page_prev'] = ($data['page']>1) ? $base_url.($data['page']-2).$search_uri : $data['page_first'];
	    $data['page_next'] = ($data['page']<$data['total_pages']) ? $base_url.($data['page']).$search_uri : $data['page_last'];
 		
 		//当前页码
 		$data['cur_page'] = $base_url.($data['page'] - 1).$search_uri;
 		
 		//当前页起始数据号
 		$data['show_start'] = ($data['page'] - 1)*$per_page+1;
 		
 		//当前页结束数据号
 		$data['show_end'] = ($page_offset < $data['total_pages'] - 1) ? ($data['show_start'] + $per_page-1) : $data['total_rows'];
 		
 		//读者结果集
 		$data['message'] = $this->message_model->find_message($keywords,$per_page,($data['page'] - 1)*$per_page,'1');
 		$data['keywords'] = $keywords;
 		//print_r($data['messages']);
 		
 		// ajax
		if (!empty($segments['ajax']))
		{
			$this->load->view('message/ajax_list',$data);
		// 非 ajax
		}
		else
		{
            $this->load->view('message/list',$data);
		}
  	 }
  	 
  	 //---------------------------------------------
  	 /**
  	  * add
  	  */
  	  function add()
  	  {  	  		
	 		echo "no this method";
  	  }
  	  
  	  //------------------
  	  /**
  	   * reply
  	   */
  	   function reply()
  	   {
  	   		//检出权限
	 	 	if(!admin_priv('lib_news_edit'))
	 	 	{
	 	 		return show_message2('你没有回复留言的权限！','message');
	 	 	}
  	   		$params = $this->uri->uri_to_assoc();
  	   		
  	   		if(!empty($params['id']) && $params['id'] > 0)
	 	 	{
	 	 		$id = $params['id'];
	 	 		$this->load->model('message_model');
	 	 		$data['editing'] = $this->message_model->load($id);
	 	 		if(!$data['editing'])
	 	 		{
	 	 			return show_message2('无效ID'.$id,'reader');
	 	 		}
	 	 		$data['header_text'] = '回复（ID:'.$data['editing']['id'].')';
	 	 	}
	 	 	else
	 	 	{
	 	 		return show_message2('无效ID','message');
	 	 	}
	 	 	
	 	 	// 创建 编辑器 
			 $this->fckeditor->BasePath = base_url().'fck/';
		     $this->fckeditor->InstanceName = 'reply';   
		     $this->fckeditor->Height = '300';
			 $this->fckeditor->ToolbarSet = 'Normal';
			 $this->fckeditor->Value = $data['editing']['reply'];
		     $data['fckeditor']=$this->fckeditor->CreateHtml(); 
	 	 	
	 	 	 $this->load->view('message/reply',$data);
  	   }
  	   
  	   //--------------------------------------
	   /**
	    * save
	    */
	    function save_reply()
	    {
	    	$re_edit = $this->input->post('re_edit');
	    	//id
 	  		$id = $this->input->post('id');
 	  		
 	  		$reply = $this->input->post('reply');
 	  		$reply_admin = $this->session->userdata('name');
 	  		
 	  		//表单验证
 	  		$this->load->library('form_validation');
 	  		
 	  		//set ryles
 	  		$this->set_save_form_rules();
 	  		
 	  		if($this->form_validation->run() == TRUE)
 	  		{
 	  			//提交数据到模型
 	  			$this->load->model('message_model');
 	  			$this->message_model->reply = $reply;
 	  			$this->message_model->reply_admin = $reply_admin; 	  			
 	  			
 	  			$this->message_model->reply($id);
 	  			if($re_edit)
	 	 		{
	 	 			show_message2('"回复（ID'.$id.')"已保存！','message/reply/id/'.$id);
	 	 		}
	 	 		else
	 	 		{
	 	 			show_message2('回复'.$id.'已更新！','message');
	 	 		} 
 	  		}
 	  		//验证失败
 	  		else
 	  		{
 	  			$data['editing'] = array('reply'=>$reply,'reply_admin'=>$reply_admin,'id'=>$id);
 	  			
 	  			// 创建 编辑器 
			   $this->fckeditor->BasePath = base_url().'fck/';
		       $this->fckeditor->InstanceName = 'reply';   
		       $this->fckeditor->Height = '500';
			   $this->fckeditor->ToolbarSet = 'Normal';
			   $this->fckeditor->Value = $data['editing']['reply'];
		       $data['fckeditor']=$this->fckeditor->CreateHtml(); 
 	  			
 	  			$this->load->view('reply/reply',$data);
 	  		}
	    }
	    
	    //----------------------------------
  	/**
  	 * recycle index
  	 */
  	 function recycle()
  	 {
  	 	$page = $this->input->post('page');
 		$page = (int)$page;
 		//echo $page;
 		//分页显示url
 		$segments = $this->uri->uri_to_assoc();
 		$search_uri = '';
 		
 		//计算查询条件
       $keywords = $this->input->post('keywords');
 		
 		//分页查询数据
 		if($page)
 		{
            $page_offset = $page-1;
		}
		else if (!empty($segments['page']))
		{
            $page_offset = (int)$segments['page'];		
        } 
        else 
        {
            $page_offset = 0;
        }
		if ($page_offset<0)
		{
            $page_offset=0;
		}
 		
 		//分页url
 		$base_url = site_url('message/recycle/page').'/';
 		
 		//每页显示数据条数
 		$per_page = 5;
 		
 		//数据总数
 		$this->load->model('message_model');
 		$data['total_rows'] = $this->message_model->total_message($keywords,'0');
 		
 		//total pages
 		$data['total_pages'] = ceil($data['total_rows'] / $per_page);
 		
 		//当前页(input)
 		$data['page'] = $page_offset + 1;
 		$data['page'] = ($data['page']>$data['total_pages'] && $data['total_pages']>0) ? $data['total_pages'] : $data['page'];
 		
 		//first last prev next page
 		$data['page_first'] = $base_url.'0'.$search_uri;
		$data['page_last'] = $base_url.($data['total_pages']-1).$search_uri;
		$data['page_prev'] = ($data['page']>1) ? $base_url.($data['page']-2).$search_uri : $data['page_first'];
	    $data['page_next'] = ($data['page']<$data['total_pages']) ? $base_url.($data['page']).$search_uri : $data['page_last'];
 		
 		//当前页码
 		$data['cur_page'] = $base_url.($data['page'] - 1).$search_uri;
 		
 		//当前页起始数据号
 		$data['show_start'] = ($data['page'] - 1)*$per_page+1;
 		
 		//当前页结束数据号
 		$data['show_end'] = ($page_offset < $data['total_pages'] - 1) ? ($data['show_start'] + $per_page-1) : $data['total_rows'];
 		
 		//读者结果集
 		$data['message'] = $this->message_model->find_message($keywords,$per_page,($data['page'] - 1)*$per_page,'0');
 		$data['keywords'] = $keywords;
 		//print_r($data['messages']);
 		
 		// ajax
		if (!empty($segments['ajax']))
		{
			$this->load->view('message/ajax_list',$data);
		// 非 ajax
		}
		else
		{
            $this->load->view('message/recycle_list',$data);
		}
  	 }
  	 
  	 //--------------------------------------------
 	  /**
 	   * 表单验证规则
 	   * 
 	   */
 	   function set_save_form_rules()
 	   { 	   
 	   		$rules['reply'] = 'required'; 	   		 	   		
 	   		$this->form_validation->set_rules($rules);		
 	   } 	 
  	 
  	 //--------------------------------
  	 /**
  	  * in_recycle()
  	  */
  	  function in_recycle($id)
  	  {
  	  	if(!admin_priv('lib_news_del'))
 	    	{
 	    		return show_message2('你没有删除留言的权限！','message');
 	    	}
 	    	
 	    	$params = $this->uri->uri_to_assoc();
 	    	if(isset($params['id']) && ($id = $params['id']) > 0)
 	    	{
 	    		$this->load->model('message_model');
 	    		if($this->message_model->in_recycle($id))
 	    		{
 	    			show_message2('"留言(ID:'.$id.')" 已被放回回收站!', 'news');
 	    		}
 	    		else
 	    		{
 	    			return show_message2('"无效'.$id.' !', 'news');
 	    		}
 	    	}
  	  }
  	  
  	   //--------------------------------
  	 /**
  	  * in_recycle()
  	  */
  	  function delete($id)
  	  {
  	  	if(!admin_priv('lib_news_del'))
 	    	{
 	    		return show_message2('你没有删除留言的权限！','message');
 	    	}
 	    	
 	    	$params = $this->uri->uri_to_assoc();
 	    	if(isset($params['id']) && ($id = $params['id']) > 0)
 	    	{
 	    		$this->load->model('message_model');
 	    		if($this->message_model->delete($id))
 	    		{
 	    			show_message2('"留言(ID:'.$id.')" 已被永久删除!', 'news');
 	    		}
 	    		else
 	    		{
 	    			return show_message2('"无效'.$id.' !', 'news');
 	    		}
 	    	}
  	  }
  	  
  	  //--------------------------
 	   /**
 	    * out recycle
 	    */
 	    function out_recycle($id)
 	    {
 	    	if(!admin_priv('lib_news_add'))
 	    	{
 	    		return show_message2('你没有恢复留言的权限！','news');
 	    	}
 	    	
 	    	$params = $this->uri->uri_to_assoc();
 	    	if(isset($params['id']) && ($id = $params['id']) > 0)
 	    	{
 	    		$this->load->model('message_model');
 	    		if($this->message_model->out_recycle($id))
 	    		{
 	    			show_message2('"留言(ID:'.$id.')" 已被还原!', 'news');
 	    		}
 	    		else
 	    		{
 	    			return show_message2('"无效'.$id.' !', 'news');
 	    		}
 	    	}
 	    }
 	    
 	    
  }
?>
















