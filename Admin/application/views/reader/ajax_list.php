<?php
/*
 * Created on 2012-10-10
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!-- ���� -->
	  <div style="overflow:auto;border-left:0 solid #99bbe8;border-bottom:0 solid #99bbe8;" id="content" class="x-panel-body" >

	  <div class="list-div " id="listDiv" style="margin-bottom:20px;">
		<table cellpadding="3" cellspacing="0" id="listTable" >
		  <thead>
		  <tr class="x-grid3-header">
			
			<th class="" >
			<div class="x-grid3-hd-inner">ID<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>

			<th class="" >
			<div class="x-grid3-hd-inner">�û���<img class="x-grid3-sort-icon" src="<?php echo base_url()?>images/s.gif"></div></th>
		
			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">����</div></th>

			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">�ڽ�ͼ��</div></th>			

			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">ע��֤������</div></th>

			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">ע��֤������</div></th>
			
			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">ע��ʱ��</div></th>

			<th class="" style="border-right:0 solid #99bbe8;">
			<div class="x-grid3-hd-inner">����</div></th>
		  </tr>
		  </thead>
          
		  <?php  foreach ($readers as $value){ ?>
		  <tr class="x-grid3-row "  >
			<td><div class="x-grid3-cell-inner "><?php echo $value['id'] ?></div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['name'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['Email'] ?></div></td>
			<td><div class="x-grid3-cell-inner "><?php echo $value['BooksInBorrow'] ?></div></td>			
			<td ><div class="x-grid3-cell-inner "><?php echo $value['papertype'] ?>	</div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['papercode'] ?> </div></td>
			<td ><div class="x-grid3-cell-inner "><?php echo $value['CreateDate'] ?></div></td>
			<td ><div class="x-grid3-cell-inner ">			 
			 <a href='<?php echo site_url('reader/edit/id/'.$value['id'])?>' style="text-decoration:none" alt='�༭' title='�༭'>
			 <img src="<?php echo base_url()?>images/icon_edit.gif" border="0" width="16" height="16">
			 </a>&nbsp;&nbsp;
			 
			 <a href='#' onclick="delete_c('<?php echo $value['id'];?>')" style="text-decoration:none" alt='�������վ' title='�������վ'>
			 <img src="<?php echo base_url()?>images/icon.jpg" border="0" width="16" height="16">
			 </a>
			</div></td>
		  </tr>
		  <?php  } ?>
		  
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
		$this->load->view('widget/pagination', $data)
	    ?>
		<!-- /��ҳ��ʾ -->
        </div>
        <!-- /���� -->