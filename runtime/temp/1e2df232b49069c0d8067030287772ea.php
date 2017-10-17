<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"../public/template/admin/index\index.php";i:1508227986;s:40:"../public/template/admin/Public\base.php";i:1508164512;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
	
	<meta charset="utf-8">
	<title>OURCMS-TP5开发测试用CMS</title>	
	<link rel="stylesheet" type="text/css" href="../public/static/3nd/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="../public/static/3nd/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../public/static/3nd/bootstrap/css/bootstrap-theme.min.css"/>
	
	
	<body>
		
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
				
<table class="table" style="margin:10px">
	<tr>
		<td>PHP版本</td>
		<td><?php echo PHP_VERSION; ?></td>
		<td>操作系统版本</td>
		<td><?php echo PHP_OS; ?></td>
	</tr>
	<tr>
		<td>CMS版本</td>
		<td><?php echo version(); ?></td>
		<td>ThinkPHP框架版本</td>
		<td><?php echo THINK_VERSION; ?></td>
	</tr>
	<tr>
		<td>MySQL版本号</td>
		<td><?php echo getDbVersion(); ?></td>
		<td>GD版本</td>
		<td>
			<?php
				$tmp = function_exists('gd_info')?gd_info():[];
				if(is_null($tmp)){
					echo "不支持";
				}
				echo $tmp['GD Version'];
				?>
		</td>
	</tr>
	<tr>
		<td>ZIP支持</td>
		<td>
			<?php
				$tmp = function_exists('zip_open');
				if(!$tmp){
					echo "不支持";
				}
				echo "支持";
				?>
		</td>
		<td>CURL支持</td>
		<td>
			<?php
				if(!function_exists('curl_init')){
					echo "不支持";
				}else{
				echo "支持";	
				}
				?>
		</td>
	</tr>
	<tr>
		<td>XML支持</td>
		<td>
			<?php
				if(!function_exists('xml_parse')){
					echo "不支持";
				}else{
					echo "支持";
				}
				
			?>
		</td>
		<td>gzopen支持</td>
		<td>
			<?php
			if(!function_exists('gzopen')){
				echo "不支持";
			}else{
				echo "支持";
			}
			
			?>
		</td>
	</tr>
	<tr>
		<td>PDO支持</td>
		<td>
			<?php
			if(!class_exists('PDO')){
				echo "不支持";
			}else{
				echo "支持";
			}?>
		</td>
		<td>fileinfo支持</td>
		<td><?php
			if(!class_exists('Fileinfo')){
				echo "不支持";
			}else{
				echo "支持";
			}
		?></td>
	</tr>
</table>
<?php
echo <<<EOF
这是一个悲惨的故事，我看着都在流泪。
如果你恨我，请原谅我的无知和年轻~！<br/>
那又如何？
EOF
?>

				</div>
		</div>
	</div>
		
		<script src="../public/static/3nd/jquery-3.2.1.min.js"></script>
		<script src="../public/static/3nd/bootstrap/js/bootstrap.min.js"></script>
		
		
		<div class="footer">
			<p style="text-align: center;color: red;">@OURCMS 2017</p>
		</div>
		
	</body>
</html>