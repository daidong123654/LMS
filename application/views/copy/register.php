<?php
//print_r($lib_info);cd9f45
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>和谐图书馆主页</title>
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
				validatorgroup: "1"
			});
		$("#tbxLoginNickname")
			.formValidator(
				{
					validatorgroup: "1",
					tipid: "loginNickname",
					onshow: "",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 1,
					onerror: "请填写用户名"
				});
		$("#tbxLoginPassword")
			.formValidator(
				{
					validatorgroup: "1",
					tipid: "loginPassword",
					onshow: "",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 1,
					onerror: "请填写密码"
				});
		$("#tbxLoginVerifier")
			.formValidator(
				{
					validatorgroup: "1",
					tipid: "loginVerifier",
					onshow: "",
					onfocus: "",
					oncorrect: ""
				})
			.inputValidator(
				{
					min: 1,
					onerror: "请填写验证码"
				});
		$.formValidator.initConfig(
			{
				autotip: true,
				validatorgroup: "2"
			});
		$("#tbxRegisterNickname")
			.formValidator(
				{
					validatorgroup: "2",
					tipid: "registerNickname",
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
			 
			  <!--注册-->
			  <div class="span8" >
				
				<div class="lo_corner_t">
					  <div class="lo_corner_tl"></div>
					  <div class="lo_corner_tr"></div>
					</div>

					<div class="lo_corner_c">
					  <h3 class="login">
						<div class="lo_h2_left"></div>
						<div class="lo_h2_right"></div>
						<span class="float_Right"></span>注册新用户？请您注册
					  </h3>
					  <div class="onError"><span id="cvlRegister" style="color: Red; display: none;">注册信息错误</span></div>
					  <div class="lo_child">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户名：&nbsp;&nbsp;&nbsp;<input name="tbxRegisterNickname" maxlength="20" id="tbxRegisterNickname" type="text">
						<div class="onShow" id="registerNickname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4-20位字符，可由中英文、数字及“_”、“-”组成</div>
						<input name="hflRegisterNickname" id="hflRegisterNickname" type="hidden">
					  </div>
					  <div class="lo_child">
						&nbsp;&nbsp;&nbsp;&nbsp;输入密码：&nbsp;&nbsp;<input name="tbxRegisterPassword" maxlength="16" id="tbxRegisterPassword" type="password"><div id="pwdStrengh" style="display: none;">密码强度：</div><div class="onShow" id="registerPassword">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6-16位字符，可由英文、数字及“_”、“-”组成</div>
						<input name="hflRegisterPassword" id="hflRegisterPassword" type="hidden">
					  </div>
					  <div class="lo_child">
						再次输入密码：<input name="tbxRegisterRepeatPassword" maxlength="16" id="tbxRegisterRepeatPassword" type="password"><div style="display: none;" id="registerRepeatPassword"></div>
					  </div>
					  <div class="lo_child" style="width: auto; padding-right: 0pt;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮&nbsp;&nbsp;箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="tbxRegisterEmail" maxlength="50" id="tbxRegisterEmail" type="text">&nbsp;免费邮箱：<a class="link_1" href="http://reg.email.163.com" target="_blank">网易</a>
						<div class="onShow" id="registerEmail">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;接收还书通知、找回密码，填写后<font color="Red">不能修改</font></div><br/>
						<input name="hflRegisterEmail" id="hflRegisterEmail" type="hidden">
					  </div>
					  					  

					  <div class="lo_child align_Center">
						<input id="choose" class="radio" checked="checked" type="checkbox">我已阅读并同意<a href="" target="_blank">《用户协议》</a><div style="display: none;" id="agreement"></div><br/>
					  </div>
					  <div class="lo_submit">
						<input name="ibtRegister" id="ibtRegister" src="<?php echo base_url()?>images/bottom_login.gif" onclick="return validate('2');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ibtRegister&quot;, &quot;&quot;, true, &quot;2&quot;, &quot;&quot;, false, false))" style="border-width: 0px;" type="image">
					  </div>
			  </div>
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
