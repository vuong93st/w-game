<?php
/**
 * PHPB2B :  Opensource B2B Script (http://www.phpb2b.com/)
 * Copyright (C) 2007-2010, Ualink. All Rights Reserved.
 * 
 * Licensed under The Languages Packages Licenses.
 * Support : phpb2b@hotmail.com
 * 
 * @version $Revision: 1393 $
 */
class Devices extends PbObject {
	var $id ='';
	var $fall_back ='';
	var $mobile_browser = '';
	var $model_name = '';
	var $brand_name = '';
	
	function Handsets() {
		
	}
	
	function getHandsetInfo()
	{		
		$result = array();
		
		if(isset($_SESSION['handsets'])){
			$result = $_SESSION['handsets'];
		}else{			
			require(LIB_PATH."Tera-WURFL/TeraWurfl.php");
			try {	

				// Instantiate the Tera-WURFL object
				$wurflObj = new TeraWurfl();
				// Get the capabilities from the object
				$wurflObj->GetDeviceCapabilitiesFromAgent(); //optionally pass the UA and HTTP_ACCEPT here
				// Print the capabilities array
				$handset = $wurflObj->capabilities;
			
			} catch (Exception $e) {
			
			}
			
			
			$result['fullname'] = $handset['product_info']['brand_name'] . ' ' . $handset['product_info']['model_name'];
			$result['id'] = $handset['id'];
			$result['user_agent'] = $handset['user_agent'];
			$result['product_info'] = $handset['product_info'];		
			
			$_SESSION['handsets']=$result;
			$result = $_SESSION['handsets'];
		}
			
		return $result;
	}
	
	function getHandsetId(){
		$info = $this->getHandsetInfo();		
		return $info['id'];
	}
	function getHandsetFullname(){
		$info = $this->getHandsetInfo();	
//		print_r($info);			
		return $info['fullname'];
	}
	
}
?>