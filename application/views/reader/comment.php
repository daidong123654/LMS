<?php
/*
 * Created on 2012-11-16
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 //print_r($book);
 $i=0;
 $j = 0;
foreach($comments as $row)
{
	$i++;
}

?>
<table class="table table-bordered">
 <tr class="success">
    <td>书名：<?echo $book['bookname']?></td>    
    <td>作者：<?echo $book['barcode']?></td>
    <td>分类：<?echo $book['barcode']?></td>
    <td>索取号：<?echo $book['barcode']?></td>
 	<td><a href="<?echo site_url('reader/read_online').'/'.$book['bookID']?>"><button class="btn btn-info" type="button" >在线阅读 </button></a></td> 	
  </tr>
</table>
<?
if(!empty($comments))
{
	?>
	<h4 class="text-error"><?echo $i?>条图书《<?echo $book['bookname']?>》的评论</h4>
	<?
	 //print_r($comments);
	 foreach($comments as $row)
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
		    <td>用户：<?echo $row['reader_info']['name']?></td>    
		    <td>评论时间：<?echo $row['time']?></td>
		   </tr>
		 </table>		 
		 <?
		 print_r($row['comment']);
		 ?>
		 <hr/>
		 <?
	 }
}	
else
{
?>	
	 <h4 class="text-error">抱歉，暂无图书《<?echo $book['bookname']?>》的评论</h4>
<?
}
?>


<form class="form-horizontal" action="<?site_url('reader/comment')?>" method="post" name="comment">
	<div class="control-group">
		<label class="control-label" for="inputPaperCode">填写评论信息</label>
		<div class="controls">
			<textarea class="span6"  name="comment" style="height:150px"/><?php echo $this->session->userdata('remark')?></textarea>
		</div>
	</div>
	
	<input name="submit" value='1' type="hidden"/>			 
				  
	 <div class="control-group">
		<div class="controls">					  
			<button type="submit" class="btn btn-success" name="register">评&nbsp;&nbsp;&nbsp;&nbsp;论</button>
		</div>
	</div>
</form>
