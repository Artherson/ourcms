<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Db;
/**
 * 对密码进行加密
 */
 function pwd($str)
 {
 	$string = '_salt_our_cms_998877';
	$string = md5($string);
	$str = md5($str);
	return md5($str.$string);
 }

 /**
  * 获取版本号
  */
function version()
{
	return '0.01 alpha';
} 

/**
 * 获取数据库版本
 */
function getDbVersion()
{
	$version = Db::query('select VERSION() as ver');
	return $version[0]['ver'];
}

/**
 * 获取Admin
 */

function isAdmin($id)
{
	if($id==1)
	{
		return true;
	}
	return false;
}
