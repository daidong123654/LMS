<!--ע��-->
			  <div class="span8" >
				<span class="float_Right"></span><em>ע�����û�,������д��Ϣ:</em>
				 <div class="onError"><span id="cvlRegister" style="color: Red; display: none;">ע����Ϣ����</span></div>
				<form class="form-horizontal" action="<?php echo base_url()?>index.php/reader_user/register" method="post" name="readerregisterform">
				  <div class="control-group lo_child">    
					<label class="control-label" for="inputEmail">�û���</label>
					<div class="controls">
					  <input type="text" id="inputUsername" placeholder="�û���" name="name" onblur='checkname()'/>
					  <br/>(4-20λ�ַ���������Ӣ�ġ����ּ���_������-�����)
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="inputPassword">����</label>
					<div class="controls">
					  <input type="password" id="inputPassword" placeholder="����" name="password" />
					  <br/>6-16λ�ַ�������Ӣ�ġ����ּ���_������-�����
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="inputPassword">�ٴ���������</label>
					<div class="controls">
					  <input type="password" id="ConfigPassword" placeholder="�ٴ���������" name="ConfigPassword" onblur="check"/>					 
					</div>
				  </div> 
				  
				  <div class="control-group">
					<label class="control-label" for="inputEmail">����</label>
					<div class="controls">
					  <input type="text" id="inputEmail" placeholder="����" name="email"/>
					</div>
				  </div>
				  
				  <div class="control-group ">
					<label class="control-label" for="inputEmail">֤������<?php echo "&nbsp&nbsp"?></label>
					<div class="controls">
					  <select class="span4" name="papertype">
						<option selected="selected" value="����֤">����֤</option>
						<option value="ʿ��֤">ʿ��֤</option>
						<option value="ѧ��֤">ѧ��֤</option>
					  </select>
				   </div>
				  </div>
					
				  <div class="control-group">
					<label class="control-label" for="inputPaperCode">֤������</label>
					<div class="controls">
					  <input type="text" id="inputPaperCode" placeholder="֤������" name="papercode"/>
					</div>
				  </div>
				  
				  <div class="control-group">
					<div class="controls">					  
					  <button type="submit" class="btn btn-success" name="register">��&nbsp;&nbsp;&nbsp;&nbsp;��</button>
					</div>
				  </div>
				  
				</form>
			</div>
			<!--ע��-->