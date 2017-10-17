<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:45:"../public/template/admin/rbac\changerule.html";i:1507998544;s:34:"../public/template/admin/base.html";i:1505581967;s:41:"../public/template/admin/Public\head.html";i:1506700089;s:43:"../public/template/admin/Public\header.html";i:1505574579;s:40:"../public/template/admin/Public\nav.html";i:1505581782;s:41:"../public/template/admin/Public\left.html";i:1507346914;s:43:"../public/template/admin/Public\footer.html";i:1506700052;}*/ ?>
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
  			<legend>添加菜单</legend>
		</fieldset>
		<form class="layui-form" action="<?php echo url('admin/Rbac/changeRuleSubmit',['id'=>$data['rule_id']]); ?>" method="post">
			<div class="layui-form-item">
				<label class="layui-form-label">上级菜单</label>
				<div class="layui-input-block">
					<select name="parent_id">
						<option value="0">作为一级菜单</option>
						<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $vo['rule_id']; ?>" 
								<?php if($vo['rule_id'] == $data['rule_id']): ?>
									selected = "selected"
								<?php endif; ?> 
								><?php echo $vo['rule_info']; ?>:<?php echo $vo['rule_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">菜单名称</label>
				<div class="layui-input-block">
					<input name="rule_info" type="text" required lay-required='required' autocomplete="off" class="layui-input" value="<?php echo $data['rule_info']; ?>">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">应用名称</label>
				<div class="layui-input-block">
					<input name="rule_app" type="text" required lay-required='required' autocomplete="off" class="layui-input" value="<?php echo $data['rule_app']; ?>">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">控制器名称</label>
				<div class="layui-input-block">
					<input name="rule_controller" type="text" required lay-required='required' autocomplete="off" class="layui-input" value="<?php echo $data['rule_controller']; ?>">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">方法名称</label>
				<div class="layui-input-block">
					<input name="rule_action" type="text" required lay-required='required' autocomplete="off" class="layui-input" value="<?php echo $data['rule_action']; ?>">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">参数名称</label>
				<div class="layui-input-block">
					<input name="rule_params" type="text" class="layui-input" value="<?php echo $data['rule_params']; ?>">
					<div class="layui-form-mid layui-word-aux">例如：id=1&amp;p=3</div>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">状态</label>
				<div class="layui-input-block">
					<select name='rule_status'>
						<option value="1" <?php if($data['rule_status'] == 1): ?>selected="selected"<?php endif; ?> >显示</option>
						<option value="0" <?php if($data['rule_status'] == 0): ?>selected="selected"<?php endif; ?> >隐藏</option>
					</select>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">类型</label>
				<div class="layui-input-block">
					<select name="is_url">
						<option value="0" <?php if($data['is_url'] == 0): ?>selected="selected"<?php endif; ?> >可以打开的页面</option>
						<option value="1" <?php if($data['is_url'] == 1): ?>selected="selected"<?php endif; ?> >不可打开的页面</option>
						<option value="2" <?php if($data['is_url'] == 2): ?>selected="selected"<?php endif; ?> >只作为菜单</option>
					</select>
				</div>
			</div>
			<div class="layui-form-item">
			    <div class="layui-input-block">
			      <button class="layui-btn" lay-submit lay-filter="formDemo">提交</button>
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
