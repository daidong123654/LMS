<?php
/*
 * Created on 2012-11-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 //print_r($news);
 foreach($news as $row)
 {
 	echo "<br/>";
 	echo "<h3><a href='#news".$row['id']."' data-toggle='modal'>".$row['title']."</a></h3>";
?>

		
		<div id="news<?echo $row['id']?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><?echo $row['title']?></h3>
			<table class="table table-striped">
			  <tr class="success">
			    <td>发布者：<?echo $row['author']?></td>
			    <td>时间:<?echo $row['CreateDate']?></td>
			  </tr>
			</table>
		  </div>
		  <div class="modal-body">
			<p><?echo $row['text']?></p>
		  </div>
		  <div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">知道了</button>			
		  </div>
		</div>
		
<?		
 }
?>		
		