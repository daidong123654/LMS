<?php
/*
 * Created on 2012-11-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 //print_r($books);
 $i = 1;
if(empty($books))
 {
?>
 	
 	 <h4 class="text-error">您还没有借过图书</h4>
 	
<?php
 }
 	
 else
 {
?>
<h4 class="text-warning">用户<?echo $this->session->userdata('name')?>的借阅历史</h4>
<table class="table table-hover">
	<tr class="success">
    <th>编号</th>
    <th>图书名称</th>
    <th>图书类型</th>
    <th>借书时间</th>
    <th>归还时间</th>
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
 	</tr>	
	<?
	$i++;
}

?>
</table>
<?
}
?>