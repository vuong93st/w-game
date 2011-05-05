<?php
/**

 * 
 * @version $Revision: 1267 $
 */
 
ob_start();
set_time_limit(0);
 
define('CURSCRIPT', 'api');
require("libraries/common.inc.php");
require("share.inc.php");

require_once ('libraries/Tera-WURFL/TeraWurfl.php');

try {	
	// Instantiate the Tera-WURFL object
	$wurflObj = new TeraWurfl();
	// Get the capabilities from the object
	$wurflObj->GetDeviceCapabilitiesFromAgent(); //optionally pass the UA and HTTP_ACCEPT here
	// Print the capabilities array
	$handset = $wurflObj->capabilities;

} catch (Exception $e) {
    //Log error	;
	$handset['id'] ='Detect error!';
	$handset['fall_back'] ='Detect error!';
	$handset['product_info']['mobile_browser'] ='Detect error!';
	$handset['product_info']['model_name'] ='Detect error!';
}

if (isset($_GET['ref'])) {
	
	$ref = trim($_GET['ref']);
	
	//$ref = '2170f4eb169fede7841d76cb13f10aae';	
		
	$content = '';
	$cp_id = '';
			
	if(empty($ref))
	{
		//Khong co giao dich
		$content = "Yeu cau khong hop le - khong co giao dich, lien he voi tong dai de duoc ho tro";
		echo $content;
	}
	else
	{
		//Su ly request
	
		if($core_config['cp_request_download']){				
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
															
					if(!empty($cp_id)){
						//Neu Ma CP ton tai mot CP nao do thi goi ham lay url					
						//Include function file
						require("plugin/cp/" . $cp_id . "/config.php");
						require("plugin/cp/" . $cp_id . "/fn.php");				
						$arr_result =  geturl($cp_id,$arr_mgame);		
					}
					//Nho ket qua su ly
					$sql_u = "UPDATE {$tb_prefix}customers SET info='".$arr_result['info']."',status=" . $arr_result['code'] . ", cp_game_url='" . $arr_result['url'] . "' WHERE req_key='". $ref . "'" ;								
					$result_update = $pdb->Execute($sql_u);
				}
			}
		}
		
		// Ket thuc su ly request den cp game
		
		
		$sql = "SELECT cp_game_url FROM {$tb_prefix}customers WHERE status ='1' and req_key='".$ref ."'";
				
		$url = $pdb->GetOne($sql);						
		
		if(empty($url) || trim($url) == '' || trim($url) =='-1' || trim($url) == '-2' || trim($url) == '-3' || trim($url) == '-4' || trim($url) == '-5' || trim($url) == '-6' || trim($url) == '-7' || trim($url) == '-8' || trim($url) == '-9' || trim($url) == '-10')
		{
			//Khong co giao dich
			$content = "Yeu cau khong hop le - khong co giao dich, lien he voi tong dai de duoc ho tro";
			echo $content;
		}
		else
		{
			//Tra lai duong link cp cho khach hang
			$content = $url;
			header('Location: ' . $url);
			//echo 'url: ' . $url;
		}
	}	
	//Log
	if(!empty($ref))
	{	
		
		try {
			//Insert to database
			$sql = "INSERT INTO {$tb_prefix}downloads (req_key,content,device_id,device_fall_back,device_mobile_browser,device_model_name,device_brand_name) VALUE ('" .$ref . "','" . $content . "','" . $handset['id'] . "','" . $handset['fall_back'] . "','" . $handset['product_info']['mobile_browser'] . "','" . $handset['product_info']['model_name']. "','" . $handset['product_info']['brand_name'] . "')";	
											
			$pdb->Execute($sql);

		} catch (Exception $e) {
			//Log erro when insert database			

		}
	
	}
	
}else{
	echo '<title>*|* Download Game *|* </title><b>Tai Game:</b><br>-----------------------<br><br><br><b>Loi...! Yeu cau cua ban khong xac thu, lien he voi tong dai de duoc ho tro!<b>';
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