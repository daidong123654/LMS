<?php
/*
 * Created on 2012-11-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class reader_config_model extends CI_Model
 {
 	var $name;
    
	var $email;

	var $password;

	var $dob;
    
    var $is_sendemail;

	var $password_auto;
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	// --------------------------------------------------------------------

      // --------------------------------------------------------------------

    /**
	 * 查询该用户名是否存在
	 *
	 *
	 */	
	function check_name($name)
	{
		$query = $this->db->get_where('lib_reader',array('name' => $name));
		$num = $query->num_rows();
        if ($num){
            return true;
        }
        return false;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 查询该邮箱是否存在
	 *
	 *
	 */	
	function check_email($email)
	{
		$query = $this->db->get_where('lib_reader',array('Email' => $email));
        if ($row = $query->row_array()){
            return true;
        }
        return false;
	}
	
	// --------------------------------------------------------------------

    /**
	 * 查询该邮箱是否存在
	 *
	 *
	 */	
	function check_paper($papertype,$papercode)
	{
		$temp = array("papertype" => $papertype,"papercode" => $papercode);
		$this->db->where($temp);
		$query = $this->db->get("lib_reader");
		//print_r($query);
		$num = $query->num_rows();
        if ($num){
            return true;
        }
        return false;
	}

   // --------------------------------------------------------------------

    /**
	 * 查询该用户，返回用户信息
	 *
	 *
	 */	
	function check_customer()
	{
        $query = $this->db->get_where('lib_reader',array('name' => $this->name,'password' => md5($this->password)));
        if ($row = $query->row_array()){			
            return $row;
        }
        return array();
	}

	// --------------------------------------------------------------------

    /**
	 * load by id
	 *
	 *
	 */	
    function load($id)
    {
        if (!$id){
            return array();
        }

        $query = $this->db->get_where('lib_reader',array('id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }	
    

    // --------------------------------------------------------------------

    /**
	 * 查询密码是否正确
	 *
	 *
	 */	
    function check_pwd($password)
	{
		$query = $this->db->get_where('lib_reader',array('password' => md5($password)));
        if ($row = $query->row_array()){
            return true;
        }
        return false;
	}
    
	// --------------------------------------------------------------------

    /**
	 * 更新密码
	 *
	 *
	 */	
	function update_pwd($id,$pwd)
    {
		$this->db->set('password', md5($pwd));	
        $this->db->where('id', $id);
        return $this->db->update('lib_reader');
    }
    
	// --------------------------------------------------------------------

    /**
	 * 更新最后登录时间
	 *
	 *
	 */	
    function update_last_login($customer_id)
	{
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('LastLoginTime', $datetime);	
        $this->db->where('id', $customer_id);
        return $this->db->update('lib_reader');
	}
 }
?>
