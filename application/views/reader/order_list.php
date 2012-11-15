<?php
/*
 * Created on 2012-11-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 //print_r($books);
 $i=1;
 if(empty($books))
 {
?>
 	
 	 <h4 class="text-error">您没有预借图书</h4>
 	
<?php
 }
 	
 else
 {
?>

<script language="Javascript">
function cancelyujie(id,obj)
{
	if (confirm('确定取消预借？'))
	{   
		window.location.href= '<?php echo site_url('reader/cancel_order')?>'+'/'+id;
    }
}
</script>
<h4 class="text-info">用户<?echo $this->session->userdata('name')?>预借的图书</h4>
<table class="table table-hover">
	<tr class="success">
    <th>标号</th>
    <th>索取号</th>
    <th>图书名称</th>
    <th>作者/翻译者</th>
    <th>图书类型</th>
    <th>出版社</th>
    <th>单价</th>
     <th>页数</th>
    <th>预借时间</th>
    <th>预借？</th>    
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
    <td> <?echo $row['barcode']?></td>
    <td> <?echo $row['bookname']?></td>
     <td> <?echo $row['author']?></td>
    <td><?echo $row['type']?></td>
    <td><?echo $row['publisher']?></td>
    <td>￥:<?echo $row['price']?></td> 
    <td><?
    if($row['page'] == 0)
    	echo '不详';
    else
    	echo $row['page'],'页';
    ?></td> 
    <td><?echo $row['borrowtime']?></td>
 	<td><button class="btn btn-warning" type="button" onclick="cancelyujie('<?php echo $row['barcode']?>',this)">取消预借</button></td> 
 	</tr>	
	<?
	$i++;
}
?>
</table>
<?
 }
?>