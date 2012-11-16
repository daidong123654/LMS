<?php
/*读者账户管理类，（创建账户）
 * Created on 2012-11-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class Reader_user extends CI_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 	//--------------------------------------------------
 	/**index
 	 * 
 	 */
 	 function index()
 	 {
 	 	//echo 'index';
 	 	$this->load->view('reader/register');
 	 }
 	 
 	 function register()
 	 {
 	 	//post data
 	  	$name = $this->input->post('name');
 	  	$Email = $this->input->post('Email');
 	  	$password = $this->input->post('password');
 	  	$papertype = $this->input->post('papertype');
 	  	$papercode = $this->input->post('papercode');  	 	  	
 	  	//表单验证
 	 	$this->load->library('form_validation');
 	 	
 	 	//设置表单验证数据规则
 	 	$this->set_save_form_rules();
 	 	//如果表单验证通过就继续
 	 	if($this->form_validation->run() == TRUE)
 	 	{
 	 		//将数据提交到模型
 	 		$this->load->model('reader_model');
 	 		
 	 		$this->reader_model->name = $name;
 	 		$this->reader_model->password = $password;
 	 		$this->reader_model->papertype = $papertype;
 	 		$this->reader_model->papercode = $papercode;
 	 		$this->reader_model->Email = $Email;
 	 		
 	 		$this->load->model('reader_config_model');
 	 		if($this->reader_config_model->check_name($name))
 	 		{
 	 			$wrongmsg = "用户名已经注册！";
 	 			//echo '1';
 	 			$this->load->view("reader/register",$wrongmsg);
 	 			return 0;
 	 		}
 	 		if($this->reader_config_model->check_email($Email))
 	 		{
 	 			$wrongmsg = "邮箱已经注册！";
 	 			//echo '2';
 	 			$this->load->view("reader/register",$wrongmsg);
 	 			return 0;
 	 		}
 	 		if($this->reader_config_model->check_paper($papertype,$papercode))
 	 		{
 	 			$wrongmsg = "证件已经被注册！";
 	 			//echo '3';
 	 			$this->load->view("reader/register",$wrongmsg);
 	 			return 0; 	 			
 	 		}
 	 		
 	 		$this->load->model('reader_model');
 	 		if($this->reader_model->create()) 	 		
 	 		{
 	 			echo "注册成功!1";
 	 			//echo "<br/>",$name,"<br/>";
 	 			//echo $password,"<br/>";
 	 			//echo $papertype,"<br/>";
 	 			//echo $Email,"<br/>";
 	 			//echo $papercode,"<br/>";
 	 			$msg = "注册成功!";
 	 			$this->load->view('reader/home',$msg); 	 			
 	 		}
 	 		else
 	 		{
 	 			echo "注册失败！";
 	 		}
 	 	}
 	 	else
 	 	{
 	 		echo "信息填写不完整类型错误";
 	 	}
 	 }
	
	 //--------------------------------------------
 	  /**
 	   * 注册表单验证规则
 	   * 
 	   */
 	   function set_save_form_rules()
 	   {
 	   		//$rules['name'] = 'required|max_lenth[100]';
 	   		//$rules['Email'] = 'valid_email|required';
 	   		//$rules['password'] = 'greater_than[6]|required';
 	   		//$rules['papertype'] = 'required';
 	   		//$rules['papercode'] = 'required';
 	   		$this->form_validation->set_rules('name', 'Username', 'required|max_lenth[100]');
			$this->form_validation->set_rules('password', 'Password', 'min_length[6]|required');
			$this->form_validation->set_rules('papertype', 'papertype', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('papercode', 'Email', 'required');
 	   		//$this->form_validation->set_rules($rules);		
 	   } 
 	   
 	   //--------------------------------------------
 	  /**
 	   * 更新表单验证规则
 	   * 
 	   */
 	   function set_update_form_rules()
 	   { 	   		
 	   		$this->form_validation->set_rules('name', 'Username', 'required|max_lenth[100]');
			//$this->form_validation->set_rules('password', 'Password', 'min_length[6]|required');
			$this->form_validation->set_rules('papertype', 'papertype', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('papercode', 'Email', 'required');
 	   		//$this->form_validation->set_rules($rules);		
 	   } 
 	   
 	 function update()
 	 {
 	 	//post data
 	  	$name = $this->input->post('name');
 	  	$Email = $this->input->post('Email');
 	  	//$password = $this->input->post('password');
 	  	$papertype = $this->input->post('papertype');
 	  	$papercode = $this->input->post('papercode');
 	  	$telephone = $this->input->post('telephone');
 	  	$remark = $this->input->post('remark');
 	  	$sex = $this->input->post('sex');
 	  	//表单验证
 	 	$this->load->library('form_validation');
 	 	
 	 	//echo "<br/>name:",$name;
 	 	//echo "<br/>Email:",$Email;
 	 	//echo "<br/>papertype:",$papertype;
 	 	//echo "<br/>papercode:",$papercode;
 	 	
 	 	//设置表单验证数据规则
 	 	$this->set_update_form_rules();
 	 	//如果表单验证通过就继续
 	 	if($this->form_validation->run() == TRUE)
 	 	{
 	 		//将数据提交到模型
 	 		$this->load->model('reader_model');
 	 		
 	 		$this->reader_model->name = $name;
 	 		//$this->reader_model->password = $password;
 	 		$this->reader_model->papertype = $papertype;
 	 		$this->reader_model->papercode = $papercode;
 	 		$this->reader_model->Email = $Email;
 	 		$this->reader_model->telephone = $telephone; 
 	 		$this->reader_model->remark = $remark;  
 	 		$this->reader_model->sex = $sex;
 	 		
 	 		
 	 		$this->load->model('reader_model');
 	 		if($this->reader_model->update($this->session->userdata('id'))) 	 		
 	 		{ 	 	
 	 			$url = site_url('login/logout');
 	 			//header("Location: $url");		 			
 	 			
 	 			//echo "<h3>更新成功!重新登录。。。。</h3>";
	   			//echo "<h3><a href=".site_url('home').">如果浏览器没有自动返回，请点击此处返回</a></h3>" ;
	   			echo "<script> alert('更新成功!返回主页重新登录。')</script>";
	   			echo "<script> window.location.href= '$url'</script>";
	   			
	   			//echo "<meta http-equiv=\"refresh\" content=\"20,url=".site_url('home')."\">";	
				//redirect('home');
 	 		}
 	 		else
 	 		{
 	 			echo "更新失败！";
 	 		}
 	 	}
 	 	else
 	 	{
 	 		echo "更新失败，信息填写不完整类型错误。";
 	 	}
 	 }
 	 
 	 //------------------------------------------------------
 	 /**
 	  * change pass
 	  */	  
 	  function changepassword()
 	  {
 	  	$url = site_url('reader');
 	  	$urllogin = site_url('login/logout');
 	  	 $password = $this->input->post('password');
 	  	 echo $password;
 	  	 $this->load->library('form_validation');
 	  	 $this->set_password_form_rules();
 	  	if($this->form_validation->run() == TRUE)
 	 	{
 	 		$this->load->model('reader_model');
 	 		$this->model->password = $password;	
 	 		if($this->reader_model->changepassword($this->session->userdata('id')))
 	 		{
 	 			echo "<script> alert('更新成功!返回主页重新登录。')</script>";
	   			echo "<script> window.location.href= '$urllogin'</script>";
 	 		}
 	 		else
 	 		{
 	 			echo "<script> alert('更新失败!输入有误。')</script>";
 	 			echo "<script> window.location.href= '$url'</script>";
 	 		}
 	 	}
 	  	else
 	 	{
 	 		echo "<script> alert('密码不符合规则,最少为六位。')</script>";
 	 		echo "<script> window.location.href= '$url'</script>";
 	 	} 
 	  }
 	  
 	   //--------------------------------------------
 	  /**
 	   * 更新表单验证规则
 	   * 
 	   */
 	   function set_password_form_rules()
 	   {	
			$this->form_validation->set_rules('password', 'Password', 'min_length[6]|required');			
 	   		//$this->form_validation->set_rules($rules);		
 	   } 
 	 	 
 	 
 }
?>
