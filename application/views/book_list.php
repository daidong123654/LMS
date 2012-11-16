<?php
/*
 * Created on 2012-11-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//print_r($books);
 $i = 1;
if(empty($books))
{
?>
 	
 	 <h4 class="text-error">很抱歉，没有找到有关《<?echo $keyword?>》的图书</h4>
 	
<?php
 } 	
else
{
?>
<h4 class="text-info">有关《<?echo $keyword?>》的图书</h4>
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
    <th>在馆数</th>   
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
    <td> <?echo $row['bookID']?></td>
    <td> <?echo $row['bookname']?></td>
     <td> <?echo $row['author']?></td>
    <td><?echo $row['booktypename']?></td>
    <td><?echo $row['publisher']?></td>
    <td>￥:<?echo $row['price']?></td> 
    <td><?
    if($row['page'] == 0)
    	echo '不详';
    else
    	echo $row['page'],'页';
    ?></td> 
    <td><?echo $row['storge']?>本</td> 	 	
 	</tr>	
	<?
	$i++;
}
?>
</table>













<?}
?>	