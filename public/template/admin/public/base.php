<!DOCTYPE html>
<html lang="zh-CN">
	{block name="header"}
	<meta charset="utf-8">
	<title>OURCMS-TP5开发测试用CMS</title>	
	<link rel="stylesheet" type="text/css" href="../public/static/3nd/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="../public/static/3nd/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../public/static/3nd/bootstrap/css/bootstrap-theme.min.css"/>
	{/block}
	
	<body>
		{block name="head"}
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">OURCMS</a>
				</div>
			
				<div class="collapse navbar-collapse navbar-inverse">
					<ul class="nav navbar-nav">
						<li><a href="#">后台管理</a></li>
						<li><a href="#">前台管理</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">修改信息</a></li>
				            <li><a href="#">注销</a></li>
				          </ul>
	       			 	</li>
					</ul>
				</div>
			</div>
		</nav>	
		{/block}
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								<a class="according-toggle">设置</a>
							</div>
							<div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">网站信息</a></li>
										<li><a href="#">邮件配置</a></li>
										<li><a href="#">友情链接</a></li>
										<li><a href="#">URL美化</a></li>
										<li><a href="#">数据库备份</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								<a class="according-toggle">
									<span>用户管理</span>
									</a>
							</div>
							<div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">管理组</a></li>
										<li><a href="#">用户管理</a></li>
										<li><a href="#">权限管理</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								<a class="according-toggle">
									<span>插件管理</span>
									</a>
							</div>
							<div id="collapse3" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">钩子管理</a></li>
										<li><a href="#">所有插件</a></li>
										<li><a href="#">插件管理</a></li>
									</ul>
								</div>
							</div>
						</div>
												<div class="panel panel-default">
							<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								<a class="according-toggle">
									<span>前台管理</span>
									</a>
							</div>
							<div id="collapse4" class="panel-collapse collapse" style="height: 0px;">
								<div class="panel-body">
									<ul class="nav nav-pills nav-stacked">
										<li><a href="#">文章管理</a></li>
										<li><a href="#">分类管理</a></li>
										<li><a href="#">页面管理</a></li>
										<li><a href="#">标签管理</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10">
				{block name="body"}
				{/block}
				</div>
		</div>
	</div>
		{block name="script"}
		<script src="../public/static/3nd/jquery-3.2.1.min.js"></script>
		<script src="../public/static/3nd/bootstrap/js/bootstrap.min.js"></script>
		{/block}
		{block name="footer"}
		<div class="footer">
			<p style="text-align: center;color: red;">@OURCMS 2017</p>
		</div>
		{/block}
	</body>
</html>