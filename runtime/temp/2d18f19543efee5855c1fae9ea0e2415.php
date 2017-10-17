<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:42:"../public/template/rbac/user\showuser.html";i:1506621335;s:33:"../public/template/rbac/base.html";i:1505581967;s:40:"../public/template/rbac/Public\head.html";i:1506621598;s:42:"../public/template/rbac/Public\header.html";i:1505574579;s:39:"../public/template/rbac/Public\nav.html";i:1505581782;s:40:"../public/template/rbac/Public\left.html";i:1506620718;s:42:"../public/template/rbac/Public\footer.html";i:1505581739;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>OURCMS管理系统-<?php echo $title; ?></title>
		<link rel="stylesheet" href="__PUBLIC__ . /static/3nd/layui/css/layui.css" media="all"/>
<script src="../static/3nd/layui/layui.js"></script>
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
					<dd><a href="<?php echo url('rbac/User/showUser'); ?>">用户管理</a></dd>
					<dd><a href="#">角色管理</a></dd>
					<dd><a href="#">后台菜单管理</a></dd>
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
		
	<legend><a name="default">用户管理</a></legend>
	<div>
		<button class="layui-btn">
  			<i class="layui-icon">&#xe608;</i> 添加
		</button>
	</div>
	<table class="layui-table">
		<thead>
			<tr>
				<th>序号</th>
				<th>用户名</th>
				<th>Email</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>

		</div>
<script>
	layui.use('element', function(){
  	var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块 
  	//监听导航点击
  	element.on('nav(demo)', function(elem){
    //console.log(elem)
    layer.msg(elem.text());
  });
});
</script>

	</body>
</html>
