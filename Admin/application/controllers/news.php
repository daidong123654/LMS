<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class news extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
 	 	{
 	 		redirect('login');//登陆界面的地址（相对）
 	 		exit();
 	 	}
	}
	
	//-------------------------------------
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
 		$base_url = site_url('news/index/page').'/';
 		
 		//每页显示数据条数
 		$per_page = 5;
 		
 		//数据总数
 		$this->load->model('news_model');
 		$data['total_rows'] = $this->news_model->total_news($keywords,'0');
 		
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
 		$data['news'] = $this->news_model->find_news($keywords,$per_page,($data['page'] - 1)*$per_page,'0');
 		$data['keywords'] = $keywords;
 		//print_r($data['newss']);
 		
 		// ajax
		if (!empty($segments['ajax']))
		{
			$this->load->view('news/ajax_list',$data);
		// 非 ajax
		}
		else
		{
            $this->load->view('news/list',$data);
		}
	 }
	 
	 //---------------------------------------
	 /**
	  * add
	  */
	  function create()
	  {
		  	if(!admin_priv('lib_news_add'))
	 		{
	 			return show_message2('你没有增加新闻的权限!','news');
	 		}
	 		else
	 		{
	 			$this->edit();
	 		}
	  }
	  
	  //------------------------------------------------------------------
	  /**
	   * edit
	   */
	   function edit()
	   {
		   	//检出权限
	 	 	if(!admin_priv('lib_news_edit'))
	 	 	{
	 	 		return show_message2('你没有编辑新闻的权限！','news');
	 	 	}
	 	 	$params = $this->uri->uri_to_assoc();
	 	 	if(!empty($params['id']) && $params['id'] > 0)
	 	 	{
	 	 		$id = $params['id'];
	 	 		$this->load->model('news_model');
	 	 		$data['editing'] = $this->news_model->load($id);
	 	 		if(!$data['editing'])
	 	 		{
	 	 			return show_message2('无效ID'.$id,'reader');
	 	 		}
	 	 		$data['header_text'] = '编辑新闻（ID:'.$data['editing']['id'].')';
	 	 	}
	 	 	else
	 	 	{
	 	 		$data['editing'] = array(
	 	 			'id' => null,
	 	 			'title' => null,
	 	 			'text'  =>null,
	 	 			'author' =>null
	 	 		);
	 	 		$data['header_text'] = "添加新闻";
	 	 	}
	 	 	
	 	 	// 创建 编辑器 
			 $this->fckeditor->BasePath = base_url().'fck/';
		     $this->fckeditor->InstanceName = 'text';   
		     $this->fckeditor->Height = '500';
			 $this->fckeditor->ToolbarSet = 'Normal';
			 $this->fckeditor->Value = $data['editing']['text'];
		     $data['fckeditor']=$this->fckeditor->CreateHtml(); 
	 	 	
	 	 	 $this->load->view('news/edit',$data);
	   }
	   
	   //--------------------------------------
	   /**
	    * save
	    */
	    function save()
	    {
	    	$re_edit = $this->input->post('re_edit');
	    	//id
 	  		$id = $this->input->post('id');
 	  		
 	  		$title = $this->input->post('title');
 	  		$author = $this->input->post('author');
 	  		$text = $this->input->post('text');
 	  		
 	  		//表单验证
 	  		$this->load->library('form_validation');
 	  		
 	  		//set ryles
 	  		$this->set_save_form_rules();
 	  		
 	  		if($this->form_validation->run() == TRUE)
 	  		{
 	  			//提交数据到模型
 	  			$this->load->model('news_model');
 	  			$this->news_model->title = $title;
 	  			$this->news_model->author = $author;
 	  			$this->news_model->text = $text;
 	  			
 	  			//update
 	  			if($id)
 	  			{
 	  				$this->news_model->update($id);
 	  				if($re_edit)
	 	 			{
	 	 				show_message2('"新闻（ID'.$id.')"已保存！','news/edit/id/'.$id);
	 	 			}
	 	 			else
	 	 			{
	 	 				show_message2('新闻'.$id.'已更新！','news');
	 	 			}
	 	  		}
	 	  		//create
	 	  		else
	 	  		{
	 	  			$this->news_model->create();
	 	  			$newly_one = $this->news_model->get_newly_one();
	 	  			//print_r($newly_one);
	 	  			if($re_edit)
	 	 			{	 	 				
	 	 				show_message2('"新闻(ID:'.$newly_one['0']['id'].')" 已保存!', 'news/edit/id/'.$newly_one['0']['id']);
	 	 			}
	 	 			else
	 	 			{
	 	 				show_message2('"新闻(ID:'.$newly_one['0']['id'].')" 已保存!','news');
	 	 			}
	 	  		}
	 	  		
 	  		}
 	  		//验证失败
 	  		else
 	  		{
 	  			$data['editing'] = array('title'=>$title,'text'=>$text,'author'=>$author,'id'=>$id);
 	  			
 	  			// 创建 编辑器 
			   $this->fckeditor->BasePath = base_url().'fck/';
		       $this->fckeditor->InstanceName = 'text';   
		       $this->fckeditor->Height = '500';
			   $this->fckeditor->ToolbarSet = 'Normal';
			   $this->fckeditor->Value = $data['editing']['text'];
		       $data['fckeditor']=$this->fckeditor->CreateHtml(); 
 	  			
 	  			$this->load->view('news/edit',$data);
 	  		}
	    }
	    
	    //--------------------------------------------
 	  /**
 	   * 表单验证规则
 	   * 
 	   */
 	   function set_save_form_rules()
 	   { 	   
 	   		$rules['title'] = 'required';
 	   		$rules['author'] = 'required';
 	   		$rules['text'] = 'required';
 	   		 	   		
 	   		$this->form_validation->set_rules($rules);		
 	   } 	 
 	   
 	   //--------------------------
 	   /**
 	    * in recycle
 	    */
 	    function in_recycle($id)
 	    {
 	    	if(!admin_priv('lib_news_del'))
 	    	{
 	    		return show_message2('你没有删除新闻的权限！','news');
 	    	}
 	    	
 	    	$params = $this->uri->uri_to_assoc();
 	    	if(isset($params['id']) && ($id = $params['id']) > 0)
 	    	{
 	    		$this->load->model('news_model');
 	    		if($this->news_model->in_recycle($id))
 	    		{
 	    			show_message2('"新闻(ID:'.$id.')" 已被放回回收站!', 'news');
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
 	    		return show_message2('你没有增加新闻的权限！','news');
 	    	}
 	    	
 	    	$params = $this->uri->uri_to_assoc();
 	    	if(isset($params['id']) && ($id = $params['id']) > 0)
 	    	{
 	    		$this->load->model('news_model');
 	    		if($this->news_model->out_recycle($id))
 	    		{
 	    			show_message2('"新闻(ID:'.$id.')" 已被还原!', 'news');
 	    		}
 	    		else
 	    		{
 	    			return show_message2('"无效'.$id.' !', 'news');
 	    		}
 	    	}
 	    }
 	   
 	   
 	   //-------------------------------------
	/**
	 * index
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
 		$base_url = site_url('news/recycle/page').'/';
 		
 		//每页显示数据条数
 		$per_page = 5;
 		
 		//数据总数
 		$this->load->model('news_model');
 		$data['total_rows'] = $this->news_model->total_news($keywords,'1');
 		
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
 		$data['news'] = $this->news_model->find_news($keywords,$per_page,($data['page'] - 1)*$per_page,'1');
 		$data['keywords'] = $keywords;
 		//print_r($data['newss']);
 		
 		// ajax
		if (!empty($segments['ajax']))
		{
			$this->load->view('news/ajax_list',$data);
		// 非 ajax
		}
		else
		{
            $this->load->view('news/recycle_list',$data);
		}
	 }
	 
	 //--------------------------------------------------
	 /**
	  * view
	  */  
	  function view($id)
	  {
	  	$this->load->model('news_model');
	  	$data['result'] = $this->news_model->load($id);
	  	//print_r($result);
	  	$this->load->view('news/view',$data);
	  }
	 
}
?>














