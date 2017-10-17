<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:41:"../public/template/admin/index\index.html";i:1506706963;s:34:"../public/template/admin/base.html";i:1505581967;s:41:"../public/template/admin/Public\head.html";i:1506700089;s:43:"../public/template/admin/Public\header.html";i:1505574579;s:40:"../public/template/admin/Public\nav.html";i:1505581782;s:41:"../public/template/admin/Public\left.html";i:1507346914;s:43:"../public/template/admin/Public\footer.html";i:1506700052;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>OURCMS管理系统-<?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="/ourcms/public/static/3nd/layui/css/layui.css" /><script type="text/javascript" src="/ourcms/public/static/3nd/layui/layui.js"></script><link rel="stylesheet" type="text/css" href="/ourcms/public/static/css/admin.css" />

	</head>
	<body>
		
		<div class="layui-layout layui-layout-admin">
	<div class="layui-header  layui-bg-cyan">
		<div class="layui-logo">OURCMS后台管理</div>
		<ul class="layui-nav layui-bg-cyan layui-layout-right" lay-filter="">
			<li class="layui-nav-item">
				<a href="">控制台</a>
			</li>
			<li class="layui-nav-item">
				<a href="">个人信息</a>
			</li>
			<li class="layui-nav-item">
				<a href=""><img src="http://t.cn/RCzsdCq" class="layui-nav-img">我</a>
				<dl class="layui-nav-child">
					<dd><a href="">修改信息</a></dd>
					<dd><a href="">安全管理</a></dd>
					<dd><a href="">退出</a></dd>
				</dl>
			</li>
		</ul>
</div>
		<div class="layui-side layui-bg-cyan">
	<div class="layui-side-scroll">
		<ul class="layui-nav layui-nav-tree layui-bg-cyan" layui-filter='test'>
			<li class="layui-nav-item layui-nav-itemed">
				<a href="#">用户管理</a>
				<dl class="layui-nav-child">
					<dd><a href="<?php echo url('admin/User/showUser'); ?>">用户管理</a></dd>
					<dd><a href="<?php echo url('admin/Role/showRole'); ?>">角色管理</a></dd>
					<dd><a href="<?php echo url('admin/Rbac/showRule'); ?>">后台菜单管理</a></dd>
					<dd><a href="#">权限管理</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item">
				<a href="#;">关闭1</a>
				<dl class="layui-nav-child">
					<dd><a href="#">1</a></dd>
					<dd><a href="#">2</a></dd>
				</dl>
			</li>
		</ul>
	</div>	
</div>
		
	<div class="layui-body body">
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
	  		<legend>系统信息</legend>
		</fieldset>
		<table class="layui-table">
			<thead>
				<th width="30%">参数名称</th>
				<th>状态</th>
			</thead>
			<tbody>
				<tr>
					<td>OURCMS版本</td>
					<td><?php echo version(); ?></td>
				</tr>
				<tr>
					<td>PHP版本</td>
					<td><?php echo PHP_VERSION; ?></td>
				</tr>
				<tr>
					<td>服务器版本</td>
					<td><?php echo php_uname(); ?></td>
				</tr>
				<tr>
					<td>Web服务器</td>
					<td><?php echo php_sapi_name(); ?></td>
				</tr>
				<tr>
					<td>数据库版本</td>
					<td><?php echo getDbVersion(); ?></td>
				</tr>
				<tr>
					<td>核心库版本</td>
					<td>ThinkPHP <?php echo THINK_VERSION; ?></td>
				</tr>
				<tr>
					<td>安装目录</td>
					<td><?php echo realpath(dirname(__FILE__).'/../../'); ?></td>
				</tr>
			</tbody>
		</table>
	</div>

		</div>
<script>
	layui.use(['element','form','layer'], function(){
  	var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块 
  	var form = layui.form;
  	//监听导航点击
  	element.on('nav(demo)', function(elem){
    //console.log(elem)
    layer.msg(elem.text());
  });
});
</script>

	</body>
</html>
