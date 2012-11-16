<?php
//print_r($lib_info);cd9f45
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?echo $lib_info['LibraryName']?>主页</title>
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
    <link href="<?echo base_url()?>/css/bootstrap-responsive.css" rel="stylesheet">

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
          <a class="brand" href="#"><?echo $lib_info['LibraryName']?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?echo site_url();?>">首页</a></li>
              <?
				if($logged =='1')
				{
				?>
                  <li><a href="<?echo site_url('reader')?>">个人主页</a></li>
                  <li><a href="<?echo site_url('reader/setting')?>">更新信息</a></li>
                  <li><a href="<?echo site_url('reader/inborrow')?>">在借图书</a></li>
                  <li><a href="<?echo site_url('reader/history')?>">借阅历史</a></li>
				<?
				}
				?>
              <li><a href="<?php echo site_url('home/news')?>">新闻</a></li>                  
              <li><a href="<?php echo site_url('home/find_all_message')?>">留言</a></li>  
            </ul>
		
			<?if($this->session->userdata('logged')=='0')//$logged_in =='0')	
			{	
			//print_r($this->session->userdata);
			?>
             <form class="navbar-form pull-right" action="<?php echo site_url('login/ReaderLogin')?>" method="post">
              <input class="span2" type="text" placeholder="UserName" name="name">
              <input class="span2" type="password" placeholder="Password" name="password">
              <button type="submit" class="btn">登陆</button>
			  <a class="btn" href="<?php echo site_url('reader_user')?>">注册</a>
            </form>			
			<?
			}
			else
			{
			?>			
              <ul class="nav  pull-right">              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">当前登录用户:<?echo $this->session->userdata['name']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">个人主页</a></li>
                  <li><a href="#">设置</a></li>
                  <li class="divider"></li>
				  <li><a href="<?php echo site_url('reader/changepass')?>">修改密码</a></li>
                  <li class="divider"></li>
                  <!--<li class="nav-header">账户</li>-->
                  <li><!--<a href="<?echo site_url('login/logout')?>">退出</a>-->
				  <a href="#exit" data-toggle="modal">退出</a></li>
                </ul>
              </li>
            </ul>
			<?
			}
			?>
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
		
		<form class="form-search" action="<?php echo site_url('home/find_book')?>" method="post" >
		  <label>搜 索 图 书: </label>
		  <input type="text" class="input-medium search-query span3" placeholder="请输入图书信息...">
		  </label><button type="submit" class="btn">和谐一下</button>
		</form>		
		<hr/>
      <!-- Example row of columns -->
      <div class="row">
	  
        <div id="myCarousel" class="carousel slide span6" style="width:65%;height:580px">
		  <!-- Carousel items -->
		  <div class="carousel-inner">
			
			<div class="active item"><img src="<?echo base_url()?>/images/01.jpg">
				<div class="carousel-caption">
                  <a href="#"><h4>1<?php echo $news_five['0']['title']?></h4></a>
                </div>
			</div>
			
			<div class="item"><img src="<?echo base_url()?>/images/02.jpg">				
				<div class="carousel-caption">
					<h4>2<?php echo $news_five['1']['title']?></h4>                  
				</div>				
			</div>
			
			<div class="item"><img src="<?echo base_url()?>/images/03.jpg">
				<div class="carousel-caption">
					<h4>3<?php echo $news_five['2']['title']?></h4>                  
				</div>	
			</div>
			
			<div class="item"><img src="<?echo base_url()?>/images/01.jpg">
				<div class="carousel-caption">
					<h4>4<?php echo $news_five['3']['title']?></h4>                  
				</div>	
			</div>
			
			<div class="item"><img src="<?echo base_url()?>/images/02.jpg">
				<div class="carousel-caption">
					<h4>5<?php echo $news_five['4']['title']?></h4>                  
				</div>	
			</div>			
		  </div>		  
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>		
		
		
		
		
		<!--工作信息-->
		<div class="span3" >
			<?php //print_r($lib_info)?>
			<strong><?php echo $lib_info['LibraryName']?><br/>					
			<ul class="unstyled">
			<li>开馆时间</li>			
			  <ul>
				<li>周一至周五 9：00--21：00</li>
				<li>周六至周日 9：00--17：00</li>
			  </ul><br/>
			 <li>联系电话：<abbr title="Phone"></abbr><?php echo $lib_info['Telephone']?></li><br/>			  
			 	  
			 <li>邮箱：<a href="mailto:<?php echo $lib_info['Email']?>"><?php echo $lib_info['Email']?> </a></li><br/>

			 <li>有关负责人：<abbr title="Phone"></abbr><?php echo $lib_info['LibraryCurator']?></li>		
			</ul>
			</strong>
		</div>
 
 
 
 
 
 
 
		<!-- Modal 退出?-->
		<div id="exit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">退出登陆？</h3>
		  </div>
		  <div class="modal-body">
			<p>确定要退出当前登录？</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
			<a href="<?echo site_url('login/logout')?>"><button class="btn btn-primary">确定</button></a>
		  </div>
		</div>
	<!--	
		<script>
			$('.carousel').carousel('cycle');
			$('#myModal').modal({
				backdrop:true,
				keyboard:true,
				show:true
			});
			$('#myModals').modal({
				backdrop:true,
				keyboard:true,
				show:true
			});
			$('#myModalesc').modal({
				backdrop:true,
				keyboard:true,
				show:true
			});
			$('#myModalesc').fade({
				backdrop:true,
				keyboard:true,
				show:true
			});
		</script>
		-->
      </div>
	  
	 </div>
<?php //print_r($news_five)//echo $news_five[]?>
      <hr>

      <footer>		
        <p>CopyRight &copy; <abbr title="和谐社区图书馆"><?php echo $lib_info['LibraryName']?></abbr> 2012</p>
		<address>地址：<?php echo $lib_info['Address']?></address>
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
