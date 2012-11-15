<h4 class="text-info" >用户<?echo $this->session->userdata('name')?>的基本信息</h4>
<?php
/*
 * Created on 2012-11-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 
 print_r($this->session->userdata);
 foreach($this->session->userdata as $row)
 {<tr class="success">	
 	print_r($row);
 	echo "<br/>";
 }*/
?>
<table class="table table-hover">		
	<tr class="error">   
    <td> 用户名：</td>
    <td><?echo $this->session->userdata('name')?></td>
    </tr>
    <tr class="success">   
    <td> 邮箱：</td>
    <td><?echo $this->session->userdata('Email')?></td>
    </tr>
    <tr class="warning">   
    <td> 证件类型：</td>
    <td><?echo $this->session->userdata('papertype')?></td>
    </tr>
    <tr class="info">   
    <td> 证件号码：</td>
    <td><?echo $this->session->userdata('papercode')?></td>
    </tr>    
</table>
<a href="<?echo site_url('reader/setting')?>"><button class="btn btn-inverse" type="button">更新信息</button></a>