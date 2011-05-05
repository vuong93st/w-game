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

if (isset($_GET['ref'])) {
	
	$ref = trim($_GET['ref']);
	$sql = "SELECT * FROM {$tb_prefix}customers WHERE req_key='".$ref ."'";
			$help_result = $pdb->GetRow($sql);						

			if(isset($help_result))
			{
				$cp_ext = trim($help_result['cp_id']);
				
				$arr_mgame['msisdn'] = trim($help_result['msisdn']);
				$arr_mgame['req_id'] = trim($help_result['req_id']);
				$arr_mgame['cp_game_id'] = trim($help_result['cp_game_id']);
				$arr_mgame['req_time'] = trim($help_result['req_time']);								
				
				if($help_result['status'] !=1){

					//Goi CP game
					//Tim kiem tat ca cac CP
				$cp_id = array_search($cp_ext, $core_config['cplist']);
				
				
				if(!empty($cp_id))
				{
					require("plugin/cp/" . $cp_id . "/config.php");					
					require("plugin/cp/" . $cp_id . "/fn.php");				
					$arr_result =  geturl($cp_id,$arr_mgame);			

				}else{
					$arr_result['code'] = 0;
					$arr_result['info'] = 'Yeu cau Xu ly khong thanh cong!, CPID khong ton tai tren he thong';
					$arr_result['url'] = '';
				}							
					
					//Nho ket qua Xu ly
					$sql_u = "UPDATE {$tb_prefix}customers SET info='".$arr_result['info']."',status=" . $arr_result['code'] . ", cp_game_url='" . $arr_result['url'] . "' WHERE req_key='". $ref . "'" ;								
					$result_update = $pdb->Execute($sql_u);
				}
			}
}else{

	//Xu ly tat ca?
	$sql = "SELECT * FROM {$tb_prefix}customers WHERE status=0";
	
	$help_result = $pdb->GetRow($sql);	
	print_r($help_result);
}

echo 'Qua trinh xu ly thanh cong!';


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