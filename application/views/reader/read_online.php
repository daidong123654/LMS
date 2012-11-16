<?php
/*
 * Created on 2012-11-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
///print_r($book);
?>

<table class="table table-bordered">
 <tr class="success">
    <td>书名：<?echo $book['bookname']?></td>    
    <td>作者：<?echo $book['barcode']?></td>
    <td>分类：<?echo $book['barcode']?></td>
    <td>索取号：<?echo $book['barcode']?></td>
 	<td><a href="<?echo site_url('reader/comment').'/'.$book['bookID']?>"><button class="btn btn-info" type="button" >填写/查看评论</button></a></td> 	
  </tr>
</table>
<h4 class="text-error">图书内容只供预览，严禁复制！</h4>
<?
if($book['content'] != '')
{
	echo $book['content'];	
}	
else
{
?>
	
	 <h4 class="text-error">抱歉，暂无该书详细内容</h4>
<?
}
?>
