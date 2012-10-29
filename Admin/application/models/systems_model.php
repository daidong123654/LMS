<?php
/*
 * Created on 2012-10-26
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class systems_model extends CI_model
 {
 	//图书馆信息
 	var $LibraryName;
 	var $LibraryCurator;
 	var $Telephone;
 	var $Email;
 	var $Address;
 	var $Url;
 	var $BuildingDate;
 	var $Intruction;
 	
 	//设置信息
 	var $TipsMoney;
 	var $validity;
 	
 	function __construct()
 	{
 		parent::__construct(); 		
 	}
 	
 	//------------------------------------------------------------------------------------
 	/**
 	 * load
 	 * 
 	 * 
 	 */
 	 function load()
 	 {	
 	 	$this->db->from('lib_library');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();       
 	 }
 	 
 	 //------------------------
 	/**
 	 * create
 	 * 
 	 */
 	 function create()
 	 {
 	 	$this->db->set('LibraryName',$this->LibraryName);
 	 	$this->db->set('LibraryCurator',$this->LibraryCurator);
 	 	$this->db->set('Telephone',$this->Telephone);
 	 	$this->db->set('Email',$this->Email);
 	 	$this->db->set('Address',$this->Address);
 	 	$this->db->set('Url',$this->Url);
 	 	$this->db->set('BuildingDate',$this->BuildingDate);
 	 	$this->db->set('Intruction',$this->Intruction);
 	 	
 	 	$this->db->insert('lib_library'); 	 	
 	 }
 	 
 	  //------------------------
 	/**
 	 * UPDATE
 	 * 
 	 */
 	 function update($id)
 	 {
 	 	$this->db->set('LibraryName',$this->LibraryName);
 	 	$this->db->set('LibraryCurator',$this->LibraryCurator);
 	 	$this->db->set('Telephone',$this->Telephone);
 	 	$this->db->set('Email',$this->Email);
 	 	$this->db->set('Address',$this->Address);
 	 	$this->db->set('Url',$this->Url);
 	 	$this->db->set('BuildingDate',$this->BuildingDate);
 	 	$this->db->set('Intruction',$this->Intruction);
 	 	
 	 	$this->db->where('ID',$id);
 	 	$this->db->update('lib_library'); 	 	
 	 }
 	 
 	 //--------------------------------TIPS SETTING------------------------------------------
 	 
 	 //------------------------------------------------------------------------------------
 	/**
 	 * load TIPS
 	 * 
 	 * 
 	 */
 	 function load_tips()
 	 {	
 	 	$this->db->from('lib_setting');
        $this->db->order_by("id", "desc");
        $this->db->limit('1');
        $query =  $this->db->get();
        return $query->row_array();       
 	 }
 	 
 	 //------------------------
 	/**
 	 * create
 	 * 
 	 */
 	 function create_tips()
 	 {
 	 	$this->db->set('TipsMoney',$this->TipsMoney);
 	 	$this->db->set('validity',$this->validity); 	
 	 	$this->db->set('penaltyMoney',$this->penaltyMoney); 
 	 	
 	 	$this->db->insert('lib_setting'); 	 	
 	 }
 	 
 	//------------------------
 	/**
 	 * uPDATE  TIPS
 	 * 
 	 */
 	 function update_tips($id)
 	 {
 	 	$this->db->set('TipsMoney',$this->TipsMoney);
 	 	$this->db->set('validity',$this->validity); 
 	 	$this->db->set('penaltyMoney',$this->penaltyMoney); 
 	 		
 	 	$this->db->where('id',$id);
 	 	$this->db->update('lib_setting'); 	
 	 }
 	
 }
 
?>
