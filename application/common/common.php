<?php
/**
 * 几个公用函数
 */
 use think\Db;
 
 /**
  * 检查用户状态
  * @param $uid 即用户表ID号
  * @return bool
  */
 function check_user($uid)
 {
 	//id为1 意味着admin 当然放过
 	if($uid == 1){
 		return true;
 	}
 	$user = Db::name('user')->where('id',$uid)->find();
	if(is_null($user)){
		return false;
	}
	//如果status为0意味着已经用户被停用
	if($user['user_status']==0){
		return false;
	}
	return true;
 }
 
 /**
  * 检查权限
  * @param $uid 用户ID
  */
  function check_auth($uid)
  {
  	//首先获取当前应用，控制器,操作并组合成相应字符串
  	if($uid == 1){
  		return true;
  	}
  	$module = request()->moudule();
	$controller = reuqest()->controller();
	$action = request()->action();
	$url = $module.'/'.$controller.'/'.$action;
	$id = db('menu')->where('url',$url)->value('id');
	if(is_null($id)){
		return false;
	}
	$role_id = db('user')->where('uid',$uid)->value('role_id');
	$json = db('role')->where('role_id',$role_id)->value('role_auth');
	$arr = json_encode($json);
	foreach($arr as $key=>$value){
		if($value == $id){
			return true;
		}
	}
	return false;
  }
?>