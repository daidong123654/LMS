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
              <li><a href="#about">个人主页</a></li>
              <li><a href="#contact">新闻</a></li>              
              <li><a href="#contact">留言</a></li>              
              <li><a href="#contact">在线阅读</a></li>              
            </ul>
		
			<?if($logged =='0')
			{?>
            <form class="navbar-form pull-right" action="<?php echo site_url('login/ReaderLogin')?>" method="post">
              <input class="span2" type="text" placeholder="Email" name="name">
              <input class="span2" type="password" placeholder="Password" name="password">
              <button type="submit" class="btn">Sign in</button>
            </form>
			<?
			}
			else
			{
			?>			
              <ul class="nav  pull-right">              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged as :<?echo $this->session->userdata['name']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">个人主页</a></li>
                  <li><a href="#">设置</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="<?echo site_url('login/logout')?>">退出</a></li>
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
	<h1 style="margin-top:10px;font-family:隶书"><img src="<?php echo base_url()?>/images/hit.jpg"><img src="<?php echo base_url()?>/images/title.jpg"></h1>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
		<!--<img src="<?php echo base_url()?>/images/title.jpg">-->
		<!--<h2 style="margin-top:10px;"><?php echo $lib_info['LibraryName']?></h2>-->
		
		<form class="well form-search" action="#" method="post" style="margin-top:2px;">
		  <label>搜索图书:</label>
		  <input type="text" class="input-medium search-query span3" placeholder="请输入图书信息...">
		  </label><button type="submit" class="btn">搜索</button>
		</form>		
		<hr/>
      <!-- Example row of columns -->
      <div class="row">
	  
        <div id="myCarousel" class="carousel" style="width:600px;height:580px">
		  <!-- Carousel items -->
		  <div class="carousel-inner">
		  
			<div class="active item"><img src="<?echo base_url()?>/images/01.jpg">
				<div class="carousel-caption">
                  <h4>1<?php echo $news_five['0']['title']?></h4>                  
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
			
			<div class="item"><img src="<?echo base_url()?>/images/03.jpg">
				<div class="carousel-caption">
					<h4>4<?php echo $news_five['3']['title']?></h4>                  
				</div>	
			</div>
			
			<div class="item"><img src="<?echo base_url()?>/images/03.jpg">
				<div class="carousel-caption">
					<h4>5<?php echo $news_five['4']['title']?></h4>                  
				</div>	
			</div>
			
		  </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		<script>
			$('.carousel').carousel({
			  interval: 2000
			})
		</script>
      </div>
	  
	 </div>
<?php //print_r($news_five)//echo $news_five[]?>
      <hr>

      <footer>
        <p>&copy; Company 2012</p>
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
