<?php
/*
 * Created on 2012-10-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<div style="border-left:0 solid #99bbe8; border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >
	  <div class="list-div " id="listDiv" style="margin-bottom:20px;">	      
	 <table cellpadding="3" cellspacing="0" id="listTable" >		  
          <thead>
		  <tr class="x-grid3-header">
			<th class="sort-numeric " >
			<div class="x-grid3-hd-inner ">ID<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th>
			<div class="x-grid3-hd-inner">������</div></th>

			<th>
			<div class="x-grid3-hd-inner">����</div></th>			

			<th class="sort-numeric ">
			<div class="x-grid3-hd-inner">��������<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th >
			
			<th>
			<div class="x-grid3-hd-inner">�ظ�����</div></th>
			
			<th>
			<div class="x-grid3-hd-inner">�ش���</div></th>	
			
			<th class="sort-numeric ">
			<div class="x-grid3-hd-inner">�ش�����<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th >
			
			<th >
			<div class="x-grid3-hd-inner">����(�ظ�/ɾ��)</div></th >
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
			 <a href='<?php echo site_url('message/view/'.$value['id'])?>' style="text-decoration:none" alt='���' title='���'>
			 <img src="<?php echo base_url()?>images/icon_view.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='<?php echo site_url('message/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='�༭' title='�༭'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 <a href='#' id="in_recycle" style="text-decoration:none"  title='�������վ' onclick="in_recycle('<?php echo $value['id']?>',this)">
			 <img src="<?php echo base_url()?>images/icon_trash.gif" border="0" width="16" height="16" alt='�������վ'>
			 </a>
			</div></td>
		  </tr>
		  <?php
		  } 
		  ?>
		</tbody></table>
		</div>
	<!-- ��ҳ��ʾ -->
	<?php
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
	//$this->load->view('widget/pagination', $data)
	?>
	<!-- /��ҳ��ʾ -->

</div>