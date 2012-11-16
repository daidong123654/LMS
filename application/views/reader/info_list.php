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
<table class="table table-hover table-bordered ">		
	<tr class="error">   
    <td> 用户名：&nbsp;&nbsp;&nbsp;&nbsp;<?echo $this->session->userdata('name')?></td>
    </tr>
    <tr class="success">   
    <td> 邮箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?echo $this->session->userdata('Email')?></td>
    </tr>
    <tr class="warning">   
    <td> 证件类型：&nbsp;&nbsp;<?echo $this->session->userdata('papertype')?></td>
    </tr>
    <tr class="info">   
    <td> 证件号码：&nbsp;&nbsp;<?echo $this->session->userdata('papercode')?></td>
    </tr>
    <tr class="error">   
    <td> 性别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?
    if($this->session->userdata('papercode')==0)
    	echo '男';
    else
    	echo '女';
    ?>
    </td>
    </tr>   
    <tr class="warning">   
    <td> 电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?
    if($this->session->userdata('telephone')=='')
    	echo '还未填写';
    else
    	echo $this->session->userdata('telephone');
    ?>
    </td>
    </tr>   
    <tr class="info">   
    <td> 爱好：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?
   if( $this->session->userdata('remark')=='' )
   		echo '还未填写';
   	else
   		echo  $this->session->userdata('remark');
    ?>
    </td>
    </tr>       
</table>
<br/>
<a href="<?echo site_url('reader/setting')?>"><button class="btn btn-inverse" type="button">更新信息</button></a>