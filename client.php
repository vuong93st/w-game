<?php
/**

 * 
 * @version $Revision: 1267 $
 */
 
ob_start();
set_time_limit(0);
 
define('CURSCRIPT', 'api');
require("libraries/common.inc.php");
require("libraries/msisdn.class.php");
require("share.inc.php");

require_once ('libraries/Tera-WURFL/TeraWurfl.php');


try {	
	// Instantiate the Tera-WURFL object
	$wurflObj = new TeraWurfl();
	// Get the capabilities from the object
	$wurflObj->GetDeviceCapabilitiesFromAgent(); //optionally pass the UA and HTTP_ACCEPT here
	// Print the capabilities array
	$handset = $wurflObj->capabilities;
	
	//===========================================

	$detect_mobile_device = new DetectMobileDevice();
	
	if($detect_mobile_device->traced_mobile != '')
	{
		//================ redirect to mobile page
		//echo "mobile:" . $detect_mobile_device->msisdn;
		$handset['msisdn'] = $detect_mobile_device->msisdn;
	} else {
	// ==========redirect to normal page
		///echo "Computer";
		$handset['msisdn'] ='';
	}

//===========================================


} catch (Exception $e) {
    //Log error	;
	$handset['msisdn'] ='';
	$handset['id'] ='Detect error!';
	$handset['fall_back'] ='Detect error!';
	$handset['product_info']['mobile_browser'] ='Detect error!';
	$handset['product_info']['model_name'] ='Detect error!';
}

if (isset($_GET['ref'])) {
	
	$ref = trim($_GET['ref']);
	$msisdn= $handset['msisdn'];
		try {
			//Insert to database
			$sql = "INSERT INTO {$tb_prefix}clients (ref,msisdn,device_id,device_fall_back,device_mobile_browser,device_model_name,device_brand_name) VALUE ('" .$ref . "','" . $msisdn . "','" . $handset['id'] . "','" . $handset['fall_back'] . "','" . $handset['product_info']['mobile_browser'] . "','" . $handset['product_info']['model_name']. "','" . $handset['product_info']['brand_name'] . "')";	
											
			$pdb->Execute($sql);

		} catch (Exception $e) {
			//Log erro when insert database			

		}
		
		header('Location: ' . $core_config['client_redirect']);
}

?>