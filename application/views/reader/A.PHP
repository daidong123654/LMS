<!--注册-->
			  <div class="span8" >
				<span class="float_Right"></span><em>注册新用户,请您填写信息:</em>
				 <div class="onError"><span id="cvlRegister" style="color: Red; display: none;">注册信息错误</span></div>
				<form class="form-horizontal" action="<?php echo base_url()?>index.php/reader_user/register" method="post" name="readerregisterform">
				  <div class="control-group lo_child">    
					<label class="control-label" for="inputEmail">用户名</label>
					<div class="controls">
					  <input type="text" id="inputUsername" placeholder="用户名" name="name" onblur='checkname()'/>
					  <br/>(4-20位字符，可由中英文、数字及“_”、“-”组成)
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="inputPassword">密码</label>
					<div class="controls">
					  <input type="password" id="inputPassword" placeholder="密码" name="password" />
					  <br/>6-16位字符，可由英文、数字及“_”、“-”组成
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="inputPassword">再次输入密码</label>
					<div class="controls">
					  <input type="password" id="ConfigPassword" placeholder="再次输入密码" name="ConfigPassword" onblur="check"/>					 
					</div>
				  </div> 
				  
				  <div class="control-group">
					<label class="control-label" for="inputEmail">邮箱</label>
					<div class="controls">
					  <input type="text" id="inputEmail" placeholder="邮箱" name="email"/>
					</div>
				  </div>
				  
				  <div class="control-group ">
					<label class="control-label" for="inputEmail">证件类型<?php echo "&nbsp&nbsp"?></label>
					<div class="controls">
					  <select class="span4" name="papertype">
						<option selected="selected" value="身份证">身份证</option>
						<option value="士兵证">士兵证</option>
						<option value="学生证">学生证</option>
					  </select>
				   </div>
				  </div>
					
				  <div class="control-group">
					<label class="control-label" for="inputPaperCode">证件号码</label>
					<div class="controls">
					  <input type="text" id="inputPaperCode" placeholder="证件号码" name="papercode"/>
					</div>
				  </div>
				  
				  <div class="control-group">
					<div class="controls">					  
					  <button type="submit" class="btn btn-success" name="register">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
					</div>
				  </div>
				  
				</form>
			</div>
			<!--注册-->