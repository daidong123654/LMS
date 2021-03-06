<?php
//print_r($lib_info);cd9f45
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>和谐图书馆注册页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?echo base_url()?>/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>  
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/common.css"/>
	<script type="text/javascript" src="<?php echo base_url()?>js/effects-20090707.js"></script>
<script type="text/javascript">
$(
	function()
	{			
		$.formValidator.initConfig(
			{
				autotip: true,
				validatorgroup: "2"
			});
		$("#inputUsername")
			.formValidator(
				{
					validatorgroup: "2",
					tipid: "inputUsername",
					onshow: "4-20位字符，可由中英文、数字及“_”、“-”组成",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 4,
					max: 20,
					onerror: "用户名长度只能在4-20位字符之间"
				})
			.regexValidator(
				{
					regexp: "username",
					datatype: "enum",
					onerror: "用户名只能由中英文、数字及“_”、“-”组成"
				});
		//if ($("#hflRegisterNickname").val() != "true")
		//{   
			$("#tbxRegisterNickname")
				.ajaxValidator(
					{
						type: "GET",
						url: '<?php echo site_url('login/check_name')?>',
						datatype: "json",
						success:
							function(result)
							{
								return result.Result;
							},
						buttons: $("#ibtRegister"),
						onwait: "正在检测用户名是否重复...",
						onerror: "该用户名已被使用"
					});
		
		
		$("#tbxRegisterPassword")
			.formValidator(
				{
					validatorgroup: "2",
					tipid: "registerPassword",
					onshow: "6-16位字符，可由英文、数字及“_”、“-”组成",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 6,
					max: 16,
					onerror: "密码长度只能在6-16位字符之间"
				})
			.regexValidator(
				{
					regexp: "password",
					datatype: "enum",
					onerror: "密码只能由英文、数字及“_”、“-”组成"
				});
		
		$("#tbxRegisterPassword").keyup(
			function()
			{
				var strength = checkPasswordStrength($(this).val());
				if (strength)
				{
					$("#pwdStrengh").show();
				}
				else
				{
					$("#pwdStrengh").hide();
				}
				$("#pwdStrengh").attr("className", strength);
			});
		
		$("#tbxRegisterRepeatPassword")
			.formValidator(
				{
					validatorgroup: "2",
					tipid: "registerRepeatPassword",
					onshow: "",
					onfocus: "",
					oncorrect: ""
				})
			.compareValidator(
				{
					desid: "tbxRegisterPassword",
					operateor: "=",
					onerror: "两次输入的密码不一致"
				});
		$("#tbxRegisterEmail")
			.formValidator(
				{
					validatorgroup: "2",
					tipid: "registerEmail",
					onshow: "接收订单通知、促销活动、找回密码，填写后<font color='Red'>不能修改</font>",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 1,
					onerror: "请填写邮箱"
				})
			.regexValidator(
				{
					regexp: "email",
					datatype: "enum",
					onerror: "邮箱地址格式不正确"
				});
		$("#tbxRegisterEmail").blur(
			function()
			{
				var email = $("#tbxRegisterEmail").val();
				if (email.indexOf("@hotmail") > 0)
				{
					$("#registerEmail").css({color: "Red", display: "inline"});
					$("#registerEmail").text("@hotmail.com无法收到购物提醒邮件，建议更换");
				}
				else if (email.indexOf("@live") > 0)
				{
					$("#registerEmail").css({color: "Red", display: "inline"});
					$("#registerEmail").text("@live.com无法收到购物提醒邮件，建议更换");
				}
				else if (email.indexOf("@gmail") > 0)
				{
					$("#registerEmail").css({color: "Red", display: "inline"});
					$("#registerEmail").text("@gmail.com无法收到购物提醒邮件，建议更换");
				}
			});
		//if ($("#hflRegisterEmail").val() != "true")
		//{
			$("#tbxRegisterEmail")
				.ajaxValidator(
					{
						type: "GET",
						url: "<?php echo site_url('login/check_email')?>",
						datatype: "json",
						success:
							function(result)
							{
								return result.Result;
							},
						buttons: $("#ibtRegister"),
						onwait: "正在检测邮箱是否重复...",
						onerror: "该邮箱已被使用，请您更换其它邮箱"
					});
		
		
		$("#tbxRegisterVerifier")
			.formValidator(
				{
					validatorgroup: "2",
					tipid: "registerVerifier",
					onshow: "",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 1,
					onerror: "请填写验证码"
				});
		$("#choose")
			.formValidator(
				{
					validatorgroup: "2",
					tipid: "agreement",
					onshow: "",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 1,
					onerror: "请阅读并同意《xx商城用户协议》"
				});
		
		$(":input").focus(
			function()
			{
				var settings = $(this).attr("settings");
				if (settings != null && settings.length > 0)
				{
					var group = settings[0].validatorgroup;
					if (group == "1")
					{
						$.formValidator.resetTipState("2");
					}
					else if (group == "2")
					{
						$.formValidator.resetTipState("1");
					}
				}
			});
	});

function checkPasswordStrength(password)
{
	var result = "";
	var strength = 0;
	if (password.length >= 6)
	{
		if (/\d/i.test(password))
		{
			strength += 30;
		}
		if (/[a-z]/i.test(password))
		{
			strength += 30;
		}
		if (/[-_]/i.test(password))
		{
			strength += 30;
		}
	}
	switch (strength)
	{
		case 30:
			result = "strenghA";
			break;
		case 60:
			result = "strenghB";
			break;
		case 90:
			result = "strenghC";
			break;
	}
	
	return result;
}

function validate(group)
{
	if (group == "1")
	{
		$.formValidator.resetTipState("2");
	}
	else if (group == "2")
	{
		$.formValidator.resetTipState("1");
	}
	
	return $.formValidator.pageIsValid(group);
}

var msg = '<?php echo $error_msg; ?>';
$(document).ready(function() {
	if (msg != 0){
		switch (msg){
			case 'verifier' : $('#cvlRegister').empty().text('验证码错误').show();break;
			case 'verifier1' : $('#cvlLoginVerifier').show();break;
			case 'customer' : $('#cvlLoginUser').show();break;
			default : break;
		}
	}	
});

function change_yzm(obj)
{

    $(obj).attr('src','<?php echo site_url('login/yzm_img')?>'+'/'+Math.random());
}

function change_yzm1(obj)
{

    $(obj).attr('src','<?php echo site_url('login/yzm_img1')?>'+'/'+Math.random());
}

function change_action(group)
{
	if(group==1){
		$('#form1').attr('action','<?php echo site_url('login/ReaderLogin')?>')
	}
}

</script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">和谐图书馆</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?echo site_url();?>">首页</a></li>             
              <li><a href="#contact">新闻</a></li>              
              <li><a href="#contact">留言</a></li>              
              <li><a href="#contact">在线阅读</a></li>              
            </ul>			
            <form class="navbar-form pull-right" action="<?php echo site_url('login/ReaderLogin')?>" method="post">
              <input class="span2" type="text" placeholder="UserName" name="name">
              <input class="span2" type="password" placeholder="Password" name="password">
              <button type="submit" class="btn">登陆</button>
			  <a class="btn" href="<?php echo site_url('reader_user')?>">注册</a>
            </form>			
			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
    <div class="container">		
	<!--<h1 style="margin-top:10px;font-family:隶书"><img src="<?php echo base_url()?>/images/hit.jpg"><img src="<?php echo base_url()?>/images/title.jpg"></h1>-->
	
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
		<!--<img src="<?php echo base_url()?>/images/title.jpg">-->
		<!--<h2 style="margin-top:10px;"><?php echo $lib_info['LibraryName']?></h2>-->		
		<form class="form-search" action="#" method="post" >
		  <label>搜 索 图 书: </label>
		  <input type="text" class="input-medium search-query span3" placeholder="请输入图书信息...">
		  </label><button type="submit" class="btn">和谐一下</button>
		</form>		
		<hr/>
		
		<!--登陆？注册？-->
		 <div class="row-fluid">
		  <div class="span12">	
			 
			  <div class="lo_corner_c">
	  <h2 class="login">
	    <div class="lo_h2_left"></div>
		<div class="lo_h2_right"></div>
		<span class="float_Right"></span><em>注册新用户,请您填写信息:</em>
	  </h2>
	  <div class="onError"><span id="cvlRegister" style="color: Red; display: none;">注册信息错误</span></div>
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
					  <input type="text" id="inputEmail" placeholder="邮箱" name="Email"/>
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
			
		  </div>
		</div>
		<!--/登陆？注册？-->
		
      </div>
	 
	  
	  
	  
	  
	  
	 </div>
<?php //print_r($news_five)//echo $news_five[]?>
      <hr>

      <footer>		
        <p>CopyRight &copy; <abbr title="和谐社区图书馆">和谐图书馆</abbr> 2012</p>
		<address>地址：天朝和谐市八荣八耻大街和谐社区</address>
      </footer>

    </div> <!-- /container -->
<?//echo base_url()?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?echo base_url()?>/js/jquery.js"></script>
    <script src="<?echo base_url()?>/js/bootstrap.js"></script>
   

  </body>
</html>
