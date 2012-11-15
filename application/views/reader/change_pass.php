<?php
/*
 * Created on 2012-11-15
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<h4 class="text-info">修改用户<?echo $this->session->userdata('name')?>的密码</h4>
<form class="form-horizontal" action="<?php echo base_url()?>index.php/reader_user/changepassword" method="post" name="updateform">
				  <div class="control-group lo_child">    
					<label class="control-label" for="inputEmail">新密码</label>
					<div class="controls">
					  <input type="password" id="inputUsername"  name="password" />
					  <br/>6-16位字符，可由英文、数字及“_”、“-”组成
					</div>
				  </div>
				  
				  
				  <div class="control-group">
					<label class="control-label" for="inputEmail">邮箱</label>
					<div class="controls">
					  <input type="password" id="inputEmail" name="cpassword"/>
					</div>
				  </div>
				  
				  <div class="control-group">
					<div class="controls">					  
					  <button type="submit" class="btn btn-success" name="register">修&nbsp;&nbsp;&nbsp;&nbsp;改</button>
					</div>
				  </div>
				  
				</form>