<?php
/*
 * Created on 2012-10-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
// print_r($news);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="utf-8">
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="<?php echo base_url()?>css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" />

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
   $.post('<?php echo site_url('news/index')?>', $('#search-form').serialize(), function(data) {
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
	if (confirm('确定把该新闻放入回收站吗？')){   
	window.location.href= '<?php echo site_url('news/in_recycle/id')?>'+'/'+id;
    }
}
function out_recycle(id,obj)
{
	if (confirm('确定把该新闻放入回收站吗？')){   
	window.location.href= '<?php echo site_url('news/out_recycle/id')?>'+'/'+id;
    }
}
function delete_news(id,obj)
{
	if (confirm('确定把该新闻永久删除吗？')){   
	window.location.href= '<?php echo site_url('news/delete_news/id')?>'+'/'+id;
    }
}

function listToggle(obj, field, id)
{
	var val = (obj.src.match(/yes.gif/i)) ? 0 : 1;

	$.ajax({
    url: '<?php echo site_url('news/list_toggle')?>/field/'+field+'/id/'+id+'/val/'+val,
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
  <span class="x-tab-strip-text">新闻列表(ID:<?echo $result['id'] ?>)</span>
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
		
		<a href='<?php echo site_url('news/edit/id/'.$result['id'])?>' style="text-decoration:none" alt='编辑' title='编辑'>编辑
		<img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?
		if($result['isdelete'] == '1')
		{
		?>
			<a href='#' id="in_recycle" style="text-decoration:none"  title='永久删除' onclick="delete_news('<?php echo $result['id']?>',this)">
			<img src="<?php echo base_url()?>images/icon.jpg" border="0" width="16" height="16" alt='永久删除'>永久删除&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</a>
			
			&nbsp;&nbsp;
			 <a href='#' id="in_recycle" style="text-decoration:none"  title='还原' onclick="out_recycle('<?php echo $result['id']?>',this)">
			 <img src="<?php echo base_url()?>images/icon_trash_conew1.gif" border="0" width="16" height="16" alt='还原'>还原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?
		}
		else
		{
		?>
		<a href='#' id="in_recycle" style="text-decoration:none"  title='放入回收站' onclick="in_recycle('<?php echo $result['id']?>',this)">
			<img src="<?php echo base_url()?>images/icon_trash.gif" border="0" width="16" height="16" alt='放入回收站'>放入回收站
		</a>
		<?
		}
		?>
		
		</div></td></tbody></table></div>

	  </div>
	  <!-- /工具栏 -->
	  <?//print_r($result);?>
	  <h1 style="text-align:center"><?php echo $result['title']?></h1>
	  <p>
	  <strong>时间:<?echo $result['CreateDate']?>&nbsp;&nbsp;&nbsp;&nbsp;
			  发布者：<?php echo  $result['author'];?>
	  </strong>
	  <?php echo $result['text'];?>
	  </p>
	
  </div></div></div></div></div></div></div>
  <!-- /菜单体 --> 
</div>
</body>
</html>