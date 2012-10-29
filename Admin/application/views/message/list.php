<?php
/*
 * Created on 2012-10-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 //print_r($message);
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
   $.post('<?php echo site_url('message/index')?>', $('#search-form').serialize(), function(data) {
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

function in_recycle(id,obj)
{
	if (confirm('确定把该留言放入回收站吗？')){   
	window.location.href= '<?php echo site_url('message/in_recycle/id')?>'+'/'+id;
    }
}

function listToggle(obj, field, id)
{
	var val = (obj.src.match(/yes.gif/i)) ? 0 : 1;

	$.ajax({
    url: '<?php echo site_url('message/list_toggle')?>/field/'+field+'/id/'+id+'/val/'+val,
    type: 'POST',
    dataType: 'html',
    success: function(data){	
	  obj.src = (data > 0) ? '<?php echo base_url()?>images/yes.gif' : '<?php echo base_url()?>images/no.gif';
    }
  });
}


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
  <span class="x-tab-strip-text">留言列表</span>
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
      <div id="tool" class="x-panel-tbar x-panel-tbar-noheader "><div  class="x-toolbar " style="border-left:0 solid #99bbe8;"><table cellspacing="0"><tbody><tr>
	
	 

	  </tr></tbody></table></div>

	  </div>
	  <!-- /工具栏 -->

	  <!-- 搜索栏 -->
	  <div id="search" class="x-panel-bbar x-panel-body" style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" >
	  <div  class="x-toolbar x-small-editor" style=" padding:2px 0 5px 20px;">
	  <form id="search-form" style="overflow:;">
		  <input name="search"  type="hidden" value="1" />
		  <input id="search_page" name="page"  type="hidden" value="<?php  echo $page;  ?>" />		  	  
		   &nbsp; &nbsp; 
		  关键字 <input type="text" name="keywords" size="20" class="x-form-text x-form-field"  value="<?=$keywords?>"  />
		  &nbsp; &nbsp; &nbsp;
		  <button id="search-action" class="x-btn-text" type="button">搜索</button>
	  </form>
	  </div></div>
	  <!-- /搜索栏 -->
	  
	  <!-- 内容 -->
	  <div style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >
	    <div class="list-div " id="listDiv" style="margin-bottom:0px;overflow:auto">	      
		  <table cellpadding="3" cellspacing="0" id="listTable" >		  
          <thead>
		  <tr class="x-grid3-header">
			<th class="sort-numeric " >
			<div class="x-grid3-hd-inner ">ID<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th>
			<div class="x-grid3-hd-inner">提问者</div></th>

			<th>
			<div class="x-grid3-hd-inner">内容</div></th>			

			<th class="sort-numeric ">
			<div class="x-grid3-hd-inner">提问日期<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th >
			
			<th>
			<div class="x-grid3-hd-inner">回复内容</div></th>
			
			<th>
			<div class="x-grid3-hd-inner">回答者</div></th>	
			
			<th class="sort-numeric ">
			<div class="x-grid3-hd-inner">回答日期<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th >
			
			<th >
			<div class="x-grid3-hd-inner">操作(回复/删除)</div></th >
		  </tr>
          </thead>
		  
		  <tbody>
		  <?php  
		  foreach ($message as $value)
		  { 
		  ?>
		  <tr class="x-grid3-row " >
			<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>				
			<td><div class="x-grid3-cell-inner "><?php echo $value['username'] ?></div></td>			
			<td ><div class="x-grid3-cell-inner ">
			<?php 
			//echo $value['title'] 
			if(strlen($value['content']) > 15)
			{
				$title = strip_tags($value['content']);
				echo substr($title,0,15)."...";
			}
			else
				echo $value['content'];
			?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['AskTime'] ?></div></td>
			
			<td ><div class="x-grid3-cell-inner ">
			<?php 
			//echo $value['text'] 
			if(strlen($value['reply']) > 15)
			{
				$text = strip_tags($value['reply']);
				echo substr($text,0,15)."...";
			}
			else
				echo  $value['reply'];
			?>
			</div></td>				
			<td ><div class="x-grid3-cell-inner "><?php echo $value['reply_admin'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['reply_time'] ?></div></td>		
			
			<td ><div class="x-grid3-cell-inner ">
			 <a href='<?php echo site_url('message/reply/id/'.$value['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='#' id="in_recycle" style="text-decoration:none"  title='放入回收站' onclick="in_recycle('<?php echo $value['id']?>',this)">
			 <img src="<?php echo base_url()?>images/icon_trash.gif" border="0" width="16" height="16" alt='放入回收站'>
			 </a>
			</div></td>
		  </tr>
		  <?php
		  } 
		  ?>
		</tbody></table>
		</div>
		
		<!-- 分页显示 -->
		<?php
		//print_r($value);		
		$data['total_pages'] = $total_pages;
		$data['page_first'] = $page_first;
		$data['page_prev'] = $page_prev;
		$data['total_pages'] = $total_pages;
		$data['page'] = $page;
		$data['page_next'] = $page_next;
		$data['page_last'] = $page_last;
		$data['show_start'] = $show_start;
		$data['show_end'] = $show_end;
		$data['total_rows'] = $total_rows;
		$this->load->view('widget/pagination', $data)
	    ?>
		<!-- /分页显示 -->
		</div><!-- /内容 -->	   
  </div></div></div></div></div></div></div>
  <!-- /菜单体 --> 
</div>
</body>
</html>