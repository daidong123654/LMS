<?php
/*
 * Created on 2012-11-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 $datetime = date("Y-m-d H:i:s");
// print_r($books);
 $i = 1;
 if(empty($books))
 {
?>
 	
 	 <h4 class="text-error">您没有在借的图书</h4>
 	
<?php
 } 	
else
{
?>
<script language="Javascript">
function xujie(id,obj)
{
	if (confirm('确定续借？'))
	{   
		window.location.href= '<?php echo site_url('reader/xujie')?>'+'/'+id;
		//return '<?php echo site_url('reader/xujie')?>'+'/'+id;
    }
}
</script>
<h4 class="text-info">用户<?echo $this->session->userdata('name')?>的在借图书</h4>
<table class="table table-hover">
	<tr class="success">
    <th>编号</th>
    <th>图书名称</th>
    <th>图书类型</th>
    <th>借书时间</th>
    <th>该归还时间</th>
    <th>续借?</th>
 	</tr>
<?	foreach($books as $row)
{
	?>
	<?if ($i%2==0)
	{?>
	<tr class="success">
	<?}else{?>
	<tr class="error">	
	<?}?>	
    <td><? echo $i?></td>
    <td> <?echo $row['bookname']?></td>
    <td><?echo $row['booktypename']?></td>
    <td><?echo $row['borrowtime']?></td>
    <td><?echo $row['returntime']?></td>
    <?if(!$row['isdely'] && $datetime < $row['returntime']){?>
    <td><button class="btn btn-success" type="button" onclick="xujie('<?php echo $row['id']?>',this)">续  借</button></td>       
 	<?}elseif($row['isdely'] && $datetime < $row['returntime']){?>
 	 <td><a href="#warning1" data-toggle="modal"><button class="btn" type="button" >不能续借了</button></a></td>       	
 	<?}elseif($datetime >$row['returntime']){?>	
 	 <td><a href="#warning2" data-toggle="modal"><button class="btn btn-danger" type="button" >已超时
 	 <?
 	 $rt = strtotime($row['returntime']);
 	 $da = strtotime($datetime);
 	 $overdays = ($da-$rt)/(3600*24);
 	 echo (int)$overdays; 
 	 ?>天</button></a></td>	
 	<?}?>
 	</tr>	
	<?
	$i++;
}
?>
</table>
		<!-- Modal 还书提醒?-->
		<div id="warning2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">这本书该还了！</h3>
		  </div>
		  <div class="modal-body">
			<p>好借好还，再借不难。</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">知道了</button>			
		  </div>
		</div>
		
		<!-- Modal 不能续借提醒?-->
		<div id="warning1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">已经续借过了</h3>
		  </div>
		  <div class="modal-body">
			<p>这本书已经续借过了，每本书只能续借一次</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">知道了</button>			
		  </div>
		</div>
<?
}
?>