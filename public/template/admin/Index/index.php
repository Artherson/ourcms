{extend name="Public/base"/}
{block name="body"}
<table class="table" style="margin:10px">
	<tr>
		<td>PHP版本</td>
		<td>{:PHP_VERSION}</td>
		<td>操作系统版本</td>
		<td>{:PHP_OS}</td>
	</tr>
	<tr>
		<td>CMS版本</td>
		<td>{:version()}</td>
		<td>ThinkPHP框架版本</td>
		<td>{:THINK_VERSION}</td>
	</tr>
	<tr>
		<td>MySQL版本号</td>
		<td>{:getDbVersion()}</td>
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

{/block}
