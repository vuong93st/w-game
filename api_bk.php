<?php
/**

 * 
 * @version $Revision: 1267 $
 */
define('CURSCRIPT', 'api');
require("libraries/common.inc.php");
require("share.inc.php");


try {	

} catch (Exception $e) {
	//Log error	;
}

if (isset($_GET['MSISDN'])) {
	
	$do = trim($_GET['do']);
	
	$arr_mgame['msisdn'] = $_GET['MSISDN'];
	$arr_mgame['req_id'] = $_GET['reqId'];
	$arr_mgame['cp_game_id'] = '';
	$arr_mgame['game_id'] = $_GET['GameID'];
	
	$arr_mgame['cp_id'] = '';	
	$arr_mgame['req_time'] = $_GET['reqTime'];
	$arr_mgame['short_code'] = $_GET['shortcode'];		
	$arr_mgame['user_name'] = $_GET['username'];
	$arr_mgame['password'] = $_GET['password'];
	
	
	$cp_ext = '';	
	$url = '';
	$url_out = '';
	
	$req_key = md5($arr_mgame['user_name'] .$arr_mgame['req_id'].$arr_mgame['msisdn']);
	
	//
	$status=0;
	$info = '';	
	
	//echo $req_key;
	//exit;
	
		
	//Kiem tra quyen goi api
	if(($arr_mgame['user_name'] == $core_config['username'] && $arr_mgame['password'] == $core_config['password']) || ($arr_mgame['user_name'] == $core_config['admin_username'] && $arr_mgame['password'] == $core_config['admin_password'])){
		
		//Kiem tra xem game ID co ton tai va co dung theo chuan khong (CPID-GameID)	
		if(isset($arr_mgame['game_id']) && strrpos($arr_mgame['game_id'],'-') > 0) {				
			$cp_ext = trim(substr($arr_mgame['game_id'],0,strrpos($arr_mgame['game_id'],'-')));
			$gameid = trim(substr($arr_mgame['game_id'],strrpos($arr_mgame['game_id'],'-') + 1, strlen($arr_mgame['game_id']) - strrpos($arr_mgame['game_id'],'-')));
		}
	
		$arr_mgame['cp_id'] = $cp_ext;
		$arr_mgame['cp_game_id'] = $gameid;
		
		try {	
				//insert into database
			$sql = "INSERT INTO {$tb_prefix}requests (msisdn,req_time,short_code,req_id,game_id,user_name,password,cp_id,cp_game_id) VALUE ('".$arr_mgame['msisdn'] . "','" . $arr_mgame['req_time']. "','" . 		$arr_mgame['short_code'] . "','" . $arr_mgame['req_id']. "','" . $arr_mgame['game_id']. "','" . $arr_mgame['user_name'] . "','" . $arr_mgame['password'] . "','" . $arr_mgame['cp_id'] ."','" . $arr_mgame['cp_game_id']  ."')";			
			
			$pdb->Execute($sql);
		} catch (Exception $e) {
			//Log error	;
		}

								
		//Su ly request
		
		//Kiem tra xem request da ton tai chua
		$sql = "SELECT id,cp_game_url FROM {$tb_prefix}customers WHERE req_key='".$req_key . "'";	
					
		
		$help_result = $pdb->GetRow($sql);
									
		if(isset($help_result) && empty($help_result))
		{		
				if(!empty($cp_ext)){
					
					//Tim kiem tat ca cac CP
					foreach($core_config['cplist'] as $key => $value)
					{
						//Neu Ma CP ton tai mot CP nao do thi goi ham lay url
						if($cp_ext == $core_config['cplist'][$key]){
							//echo 'geturl_' . $cp_ext.'($a,$b);';
			
							//Include function file
							require("plugin/cp/" . $cp_ext . "/config.php");
							require("plugin/cp/" . $cp_ext . "/fn.php");				
							$arr_result =  geturl($cp_ext,$arr_mgame);					
							break;				
						}			
					}
				}
				else{
					$arr_result = null;
					//Log cp game khong ton tai
				}
				
				if(isset($arr_result)){				
					$url = $arr_result['url'];
					$status = $arr_result['code'];
					$info = $arr_result['info'];
				}else
				{
					$url = '';
					$status = '-100';
					$info = 'Khong ton tai CP hoac ma game khong ton tai';
				}
								
				try {	
						//insert url to out tabble
						$sql = "INSERT INTO {$tb_prefix}customers (msisdn,req_time,req_id,game_id,cp_id,cp_game_id,cp_game_url,user_name,req_key,info,status) VALUE ('".$arr_mgame['msisdn'] . "','" . 	$arr_mgame['req_time']. "','" . $arr_mgame['req_id']. "','" . $arr_mgame['game_id']. "','" . $arr_mgame['cp_id'] ."','" . $arr_mgame['cp_game_id'] . "','" . $url ."','" . $arr_mgame['user_name'] . "', '" . $req_key . "', '" . $info . "', '" . $status . "')";			
				
						$pdb->Execute($sql);
						
				} catch (Exception $e) {
					//Log error insert database	;
					
				}
		}else{
			$url = $help_result['cp_game_url'];
		}
		
		// Return url
		echo $base_url . 'download.php?ref='.$req_key;				
	}
}


function geturl($cp_ext = '',$arr_mgame=array())
{		
	$url = x_hook($cp_ext, 'get_url',$arr_mgame);		
	return $url;
}

function x_hook($c_plugin, $c_function, $c_param=array())
{
		
	$c_fn = $c_plugin.'_hook_'.$c_function;
	if (function_exists($c_fn))
	{
		return call_user_func_array($c_fn,$c_param);
	}else
	{
		//Log khong ton tai ham cua cp
		return null;
	}
}
?>