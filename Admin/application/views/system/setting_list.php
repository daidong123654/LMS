<?php
/*
 * Created on 2012-10-26
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="utf-8">
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="<?php echo base_url()?>css/general.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url()?>css/main.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="JavaScript"> var base_url = '<?php echo base_url()?>'; </script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/admin.js"></script>

<script language="JavaScript"> 
//列表窗口缩放效果
$(document).ready(function() {
  listBody();
});
$(window).resize(function(){
  listBody();
});

$(document).ready(function() {
  $('#search-action').click(function(){
   $.post('<?php echo site_url('systems/work')?>', $('#search-form').serialize(), function(data) {
	  $('.x-grid3-row').remove();
	  $('#page').remove();
	  $('.x-grid3-row',data).appendTo($('#listTable tbody'));	  
	  $('#page',data).appendTo($('#content'));

	  pageStyle();
	  pageClick()
	  $('#listTable').alternateRowColors().eventRowColors();
    });
  });
});
function listEdit(obj, field, id)
{
  var tag = obj.firstChild.tagName;

  if (typeof(tag) != "undefined" && tag.toLowerCase() == "input")
  {
    return;
  }

  /* 保存原始的内容 */
  var org = $(obj).html();
  var val = $(obj).text();

  /* 创建一个输入框 */
  var txt = $('<input/>');
  (val == 'N/A') ? txt.val('') : txt.val(val);
  txt.css('width',$(obj).outerWidth()+50+'px');

  /* 隐藏对象中的内容，并将输入框加入到对象中 */
  $(obj).html('');
  $(obj).append(txt);
  txt.focus();  
}
 
</script>

</head>

<body  class=" x-border-layout-ct" style="position: relative;" >
<div id="msg"></div>
<div id="main-tabs" class="x-tab-panel x-border-panel" style="left: 5px; top: 0px;">

  <div  id="crt-menu" class="x-tab-panel-header x-unselectable">
  <div  id="crt-menu1" class="x-tab-strip-wrap">
  <ul id="crt-menu2" class="x-tab-strip x-tab-strip-top">
  <li class="x-tab-strip-active" >
  <a class="x-tab-right" href="#" onClick="return false;">
  <em class="x-tab-left">
  <span style="width: 130px;" class="x-tab-strip-inner">
  <span class="x-tab-strip-text">信息列表</span>
  </span>
  </em>
  </a>
  </li>
  <li  class="x-tab-edge"></li>
  <div  class="x-clear"></div>
  </ul>
  </div>
  </div>
  
  <!-- 菜单体 -->
  <div class="x-tab-panel-bwrap border-bottom x-panel-body" >
  <div id="menu-body1" class="x-tab-panel-body x-tab-panel-body-top" >
  <div id="menu-body2" class="x-panel x-panel-noborder" >
  <div  class="x-panel-bwrap">
  <div id="menu-body" class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-border-layout-ct" style="">
  <div id="menu-body3" class="x-panel x-border-panel x-grid-panel" style="left: 0px; top: 0px;">
  <div style="position: relative;"  class="x-panel-bwrap">

      <!-- 工具栏 -->
      <div id="tool" class="x-panel-tbar x-panel-tbar-noheader "><div  class="x-toolbar " style="border-left:0 solid #99bbe8;"><table cellspacing="0"><tbody><td ><div class="x-grid3-cell-inner ">
		
		<a href='<?php echo site_url('systems/edit_tips/id/'.$editing['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>编辑
		<img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
		</div></td></tbody></table></div>

	  </div>
	  <!-- /工具栏 -->
	  <?php  //print_r($editing);?>
	  
	  <div  class="x-panel x-form-label-left " >
	  <div  class="x-panel-bwrap form-padding"> 	 
	  <input name="id" id="id" type="hidden" value="<?php echo $editing['id']?>" />
      
	  <div id="basic-div" class="tab-div" style="display:block">	  
		 
		  
		  <div class="x-form-item" >
		  <label  style="width: 75px;color:dimgray;" class="x-form-item-label">办证费:</label>
		  <div class="x-form-element"  style="padding-left: 80px;">
		  <p style="width: 222px;" class="x-form-text x-form-field  x-form-required" size="20"   ><?php echo $editing['TipsMoney']?></p>
		  </div>
		  <div class="x-form-clear-left"></div>
	      </div>
		  
		  <div class="x-form-item" >
		  <label  style="width: 75px;color:dimgray;" class="x-form-item-label">可借天数:</label>
		  <div class="x-form-element"  style="padding-left: 80px;">
		  <p style="width: 222px;" class="x-form-text x-form-field  x-form-required" size="20"   ><?php echo $editing['validity']?></p>
		  </div>
		  <div class="x-form-clear-left"></div>
	      </div>
		  
		  <div class="x-form-item" >
		  <label  style="width: 75px;color:dimgray;" class="x-form-item-label">损坏罚款倍数:</label>
		  <div class="x-form-element"  style="padding-left: 80px;">
		  <p style="width: 222px;" class="x-form-text x-form-field  x-form-required" size="20"   ><?php echo $editing['penaltyMoney']?></p>
		  </div>
		  <div class="x-form-clear-left"></div>
	      </div>

		
		  
      </div>	
      </div>
      </div>
  </div>
    <!-- /表单 -->
	  
	  
		
		</div><!-- /内容 -->	   
  </div></div></div></div></div></div></div>
  <!-- /菜单体 --> 
</div>
</body>
</html>
