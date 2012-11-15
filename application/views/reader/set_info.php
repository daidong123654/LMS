<?php
/*
 * Created on 2012-11-14
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<h4 class="text-info">设置用户<?echo $this->session->userdata('name')?>的详细信息</h4>
<form class="form-horizontal" action="<?php echo base_url()?>index.php/reader_user/update" method="post" name="updateform">
				  <div class="control-group lo_child">    
					<label class="control-label" for="inputEmail">用户名</label>
					<div class="controls">
					  <input type="text" id="inputUsername"  name="name" value="<?php echo $this->session->userdata('name')?>"/>
					  <br/>(4-20位字符，可由中英文、数字及“_”、“-”组成)
					</div>
				  </div>
				  
				  
				  <div class="control-group">
					<label class="control-label" for="inputEmail">邮箱</label>
					<div class="controls">
					  <input type="text" id="inputEmail" value="<?php echo $this->session->userdata('Email')?>" name="Email"/>
					</div>
				  </div>
				  
				  <div class="control-group ">
					<label class="control-label" for="inputEmail">证件类型<?php echo "&nbsp&nbsp"?></label>
					<div class="controls">
					  <select class="span2" name="papertype">
						<option <?php if($this->session->userdata('papertype') == '身份证') echo "selected=selected";?> value="身份证">身份证</option>
						<option <?php if($this->session->userdata('papertype') == '士兵证') echo "selected=selected";?> value="士兵证">士兵证</option>
						<option <?php if($this->session->userdata('papertype') == '学生证') echo "selected=selected";?> value="学生证">学生证</option>
					  </select>
				   </div>
				  </div>
					
				  <div class="control-group">
					<label class="control-label" for="inputPaperCode">证件号码</label>
					<div class="controls">
					  <input type="text" id="inputPaperCode" value="<?php echo $this->session->userdata('papercode')?>" name="papercode"/>
					</div>
				  </div>
				  
				  <div class="control-group ">
					<label class="control-label" for="inputEmail">性别<?php echo "&nbsp&nbsp"?></label>
					<div class="controls">
					  <select class="span2" name="sex">
						<option <?php if($this->session->userdata('sex') == '0') echo "selected=selected";?> value="0">男</option>
						<option <?php if($this->session->userdata('sex') == '1') echo "selected=selected";?> value="1">女</option>
					  </select>
				   </div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="inputPaperCode">电话</label>
					<div class="controls">
					  <input type="text" id="inputPaperCode" value="<?php echo $this->session->userdata('telephone')?>" name="telephone"/>
					</div>
				  </div>	  
				 
				 <div class="control-group">
					<label class="control-label" for="inputPaperCode">关于自己爱好</label>
					<div class="controls">
					  <textarea  name="remark"/><?php echo $this->session->userdata('remark')?></textarea>
					</div>
				  </div>
				 
				  
				  <div class="control-group">
					<div class="controls">					  
					  <button type="submit" class="btn btn-success" name="register">更&nbsp;&nbsp;&nbsp;&nbsp;新</button>
					</div>
				  </div>
				  
				</form>