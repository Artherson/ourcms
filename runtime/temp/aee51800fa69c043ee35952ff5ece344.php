<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:42:"../public/template/admin/user\adduser.html";i:1507343906;s:34:"../public/template/admin/base.html";i:1505581967;s:41:"../public/template/admin/Public\head.html";i:1506700089;s:43:"../public/template/admin/Public\header.html";i:1505574579;s:40:"../public/template/admin/Public\nav.html";i:1505581782;s:41:"../public/template/admin/Public\left.html";i:1507346914;s:43:"../public/template/admin/Public\footer.html";i:1506700052;}*/ ?>
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
  			<legend>用户添加</legend>
		</fieldset>
		<form class="layui-form" action="<?php echo url('admin/User/add'); ?>" method="post">
			<div class="layui-form-item">
				<label class="layui-form-label">用户名</label>
				<div class="layui-input-block">
					<input type="text" name="user_name" required lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">密码</label>
				<div class="layui-input-block">
					<input type="password" name="user_pwd" required lay-verify="requested" placeholder="请输入密码" autocomplete="off" class="layui-input"/>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">Email</label>
				<div class="layui-input-block">
					<input type="text" name="user_email" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item" pane="">
				<label class="layui-form-label">是否启用</label>
				<div class="layui-input-block">
					<input type="radio" name="user_status" value="1" title="启用" checked="">
					<input type="radio" name="user_status" value="0" title="停用">
				</div>
			</div>
			<div class="layui-form-item" pane="">
				<div class="layui-input-block">
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<input type="checkbox" name='role_selected[<?php echo $vo['role_id']; ?>]' value="<?php echo $vo['role_id']; ?>" title="<?php echo $vo['role_name']; ?>"/>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				
			</div>
			<div class="layui-form-item">
				<div class="layui-input-block">
					<button class="layui-btn" lay-submit>提交</button>
					<button type="reset" class="layui-btn layui-btn-primary">重置</button>
				</div>
			</div>
		</form>
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
