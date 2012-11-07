<?php
/*
 * Created on 2012-10-31
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Base URL
 *
 * Returns the "base_url" item from your config file
 *
 * @access	public
 * @return	string
 */


/**
 * 获取前台地址
 *
 *
 */	
if ( ! function_exists('front_url'))
{
	function front_url()
	{
		$CI =& get_instance();
		return $CI->config->slash_item('front_url');
	}
}
?>
