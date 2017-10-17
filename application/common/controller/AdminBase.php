<?php
/**
 * 后台基类 判断用户权限，是否登录 等信息
 */
namespace app\common\controller;

use think\Controller;
use think\Db;

class AdminBase extends Controller
{
	public function _initiaze()
	{
		parent::_initialize();
		//首先判断是否登录
		$uid = session('admin_id');
		if(is_null($uid)){
			header("Location:".url('admin/controller/login'));
		}
		//检查用户状态
		if(!check_user($uid)){
			$this->error('用户不存在或被停用',url('admin/controller/login'));
		}
		//检查权限
		if(!check_auth($uid)){
			$this->error('无权访问该模块',url('admin/controller/login'));
		}
	}
	
	
}
?>