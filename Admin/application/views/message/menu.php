<?php
/*
 * Created on 2012-10-9
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="<?php echo base_url()?>css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/general.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/menu.js"></script>
</head>

<body  class=" x-border-layout-ct" style="position: relative;">

<!--<button class="btn btn-danger"><i class="icon-glass"></i></button>-->

<div id="menu" class="x-panel x-border-panel x-tree " style="width: 225px; position: absolute; visibility: visible; left:5px; z-index:1; height:100% ">

  <div id="menu-head" class="x-panel-header">
    <a href="#" class="toggleMenu"><div  class="x-tool x-tool-toggle x-tool-collapse-west" > </div></a>
    <span class="" >留言</span>
  </div>

  <div  class="x-panel-bwrap ">
	<!--TOOL-->
	

	<div id="menu-body" class="x-panel-body" style="overflow: auto; width: 223px; height:600px">
    <ul  class="x-tree-root-ct x-tree-no-lines">
	<div class="x-tree-root-node">
    <li class="x-tree-node">
	
	  <!-- 留言管理 -->
	  <div  class="x-tree-node-el  feeds-node" >
		  <img  class="x-tree-ec-icon x-tree-elbow-end-minus" src="<?php echo base_url()?>images/s.gif" title="关闭">
		  <img class="x-tree-node-icon"  src="<?php echo base_url()?>images/s.gif"/>
		  <span >留言管理</span>
	  </div>
     
	  <ul  style="" class="x-tree-node-ct">
	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf feed x-tree-selected " ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon feed-icon" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('message')?>" target="main-frame"><span >留言列表</span></a></div></li>
	  
	  <li class="x-tree-node"><div  class="x-tree-node-el x-tree-node-leaf feed x-tree-selected " ><span class="x-tree-node-indent"><img class="x-tree-icon" src="<?php echo base_url()?>images/s.gif"/></span><img  class="x-tree-node-icon feed-icon" src="<?php echo base_url()?>images/s.gif"/><a href="<?php echo site_url('message/recycle')?>" target="main-frame"><span >回收站</span></a></div></li>

	 
	       
	  </ul>	  
    </li>
	
	
    </div>
    </ul>
    </div>
  </div>

<!-- /menu -->

<div id="menu-xcollapsed" class="x-layout-collapsed x-layout-collapsed-west" style="display: none; width: 20px; position: absolute; visibility: visible; left: 5px;  z-index: 20;">
<a href="#" class="toggleMenu"><div class="x-tool x-tool-expand-west" ></div></a> 
</div>

</body>
</html>