<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
   	<meta charset="utf-8" />
    <title>未来们台管理系统</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />    
    
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" />
    
    <link href="/Public/Admin/css/font-awesome.css" rel="stylesheet" />
    
    <link href="/Public/Admin/css/adminia.css" rel="stylesheet" /> 
    <link href="/Public/Admin/css/adminia-responsive.css" rel="stylesheet" /> 
    
    <link href="/Public/Admin/css/pages/dashboard.css" rel="stylesheet" /> 
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/Public/html5.js"></script>
    <![endif]-->
	
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <script src="/Public/Admin/js/jquery-1.7.2.min.js"></script>
  <script src="/Public/Admin/js/bootstrap.js"></script>
  <script src="/Public/layer/layer.js"></script>

  <script src="/Public/Admin/js/hrfd.js"></script>
  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 				
			</a>
			
			<a class="brand" href="<?php echo U('Index/index');?>">未来门后台管理系统</a>
			
			 <!-- /nav-collapse -->
			
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->	

<div id="content">
	
	<div class="container">
		
		<div class="row">
			
			<div class="span3">
				
				<div class="account-container">
				
					<div class="account-details">
					
						<span class="account-name">管理员</span>
						
						<span class="account-role">Admin</span>
						
						
					
					</div> <!-- /account-details -->
				
				</div> <!-- /account-container -->
				
				<hr />
				
				<ul id="main-nav" class="nav nav-tabs nav-stacked">
					
					<li class="active">
						<a href="<?php echo U('Img/imglist');?>">
							<i class="icon-home"></i>
							图片轮播
						</a>
					</li>
					<!-- 
					<li>
						<a href="<?php echo U('Company/company');?>">
							<i class="icon-pushpin"></i>
							公司简介
						</a>
					</li>
					 -->
					<li>
						<a href="<?php echo U('News/newslist');?>">
							<i class="icon-th-large"></i>
							新闻管理
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Nav/navlist');?>">
							<i class="icon-signal"></i>
							导航管理(包括公司简介)
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Pic/picList');?>">
							<i class="icon-user"></i>
							合作企业							
						</a>
					</li>
					
					<li>
						<a href="./login.html">
							<i class="icon-book"></i>
							视频管理
						</a>
					</li>

					<li>
						<a href="<?php echo U('Pic/moidfyBigPage');?>">
							<i class="icon-picture"></i>
							前台大图修改
						</a>
					</li>

					<li>
						<a href="<?php echo U('Password/modifyPage');?>">
							<i class="icon-lock"></i>
							密码修改
						</a>
					</li>
					
				</ul>	
				
				<hr />
				
				
				
				<br />
		
			</div> <!-- /span3 -->
			
			
			
			<div class="span9">
				
				<h1 class="page-title">
					<i class="icon-home"></i>
					首页				
				</h1>
				
				
				
				
			</div> <!-- /span9 -->
			
			
		</div> <!-- /row -->
		
	</div> <!-- /container -->
	
</div> <!-- /content -->
					
	
<div id="footer">
	
	<div class="container">				
		<hr />
		<p>&copy; 2012 Go Ideate.</p>
	</div> <!-- /container -->
	
</div> <!-- /footer -->


    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/Public/Admin/js/jquery-1.7.2.min.js"></script>
<script src="/Public/Admin/js/excanvas.min.js"></script>
<script src="/Public/Admin/js/jquery.flot.js"></script>
<script src="/Public/Admin/js/jquery.flot.pie.js"></script>
<script src="/Public/Admin/js/jquery.flot.orderBars.js"></script>
<script src="/Public/Admin/js/jquery.flot.resize.js"></script>


<script src="/Public/Admin/js/bootstrap.js"></script>
<script src="/Public/Admin/js/charts/bar.js"></script>

  </body>
</html>