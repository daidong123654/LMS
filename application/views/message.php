<?php
/*
 * Created on 2012-11-16
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//print_r($message);
 $i=0;
 $j = 0;
foreach($message as $row)
{
	$i++;
}
if(!empty($message))
{
	?>
	<h4 class="text-error">和谐图书馆的所有留言</h4>
	<?
	 //print_r($message);
	 foreach($message as $row)
	 {
	 	$j++;	 	
	 	?>	 	
	 	<table class="table table-hover">
	 	<?
	 	if($j%2 ==0)
	 	{
	 	?>
			<tr class="error">
		<?
	 	}else
	 	{
		?>
		<tr class="warning">
		<?
	 	}
		?>
		
			<td>第<?echo $j?>条</td>
		    <td>用户：<?echo $row['username']?></td>    
		    <td>时间：<?echo $row['AskTime']?></td>
		    <td><a href='#message<?echo $row['id']?>' data-toggle='modal'><button class="btn" type="button">查看回复</button></a></td>
		   </tr>
		 </table>
		 留言内容	:	 
		 <?
		 echo $row['content'];
		 ?>
		 
		 
		 <div id="message<?echo $row['id']?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><?echo $row['content']?></h3>
			<table class="table table-striped">
			  <tr class="success">
			    <td>回复者：<?if($row['reply'] !='') echo $row['reply_admin']?></td>
			    <td>时间:<?if($row['reply'] !='') echo $row['reply_time']?></td>
			  </tr>
			</table>
		  </div>
		  <div class="modal-body">
			<p>
			<?
			if($row['reply'] =='')
				echo "该留言，暂时没有回复";
			else
				echo $row['reply'];
			?>
			</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">知道了</button>			
		  </div>
		</div>
		
		 <hr/>
		 <?
	 }
}	
else
{
?>	
	 <h4 class="text-error">暂无留言，欢迎留言。</h4>
<?
}
if($this->session->userdata('logged'))
{
?>
<form class="form-horizontal" action="<?site_url('reader/message')?>" method="post" name="comment">
	<div class="control-group">
		<label class="control-label" for="inputPaperCode">昵称/用户名：</label>
		<div class="controls">
			<input class="span3"  name="username" ></textarea>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputPaperCode">填写留言</label>
		<div class="controls">
			<textarea class="span6"  name="message" style="height:150px"/></textarea>
		</div>
	</div>
	
	<input name="submit" value='1' type="hidden"/>			 
				  
	 <div class="control-group">
		<div class="controls">					  
			<button type="submit" class="btn btn-success" name="register">留&nbsp;&nbsp;&nbsp;&nbsp;言 </button>
		</div>
	</div>
</form>
<?
}
else
{
?>
<h4 class="text-error">留言请登录。</h4>
<?
}
?>

		