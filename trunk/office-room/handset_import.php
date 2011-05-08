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
require("../libraries/common.inc.php");
require("room.share.php");
require(LIB_PATH .'time.class.php');
uses("handset");


$handset = new Handsets();

$sql = "select * from terawurflmerge where actual_device_root =1";

$result = $pdb->GetArray($sql);
//print_r($result);exit;

$i = 0;
foreach ($result as $key=>$val) {
	$capabilities  = unserialize($val['capabilities']);
	print_r($capabilities);continue;	
	$vals['deviceID'] = $capabilities['id'];
	$vals['user_agent'] = $capabilities['user_agent'];
	$vals['brand_name'] = $capabilities['product_info']['brand_name'];
	$vals['model_name'] = $capabilities['product_info']['model_name'];
	$vals['width'] = $capabilities['display']['resolution_width'];
	$vals['height'] = $capabilities['display']['resolution_height'];	
	$vals['j2me'] = serialize($capabilities['j2me']);	
	$vals['pointing'] = $capabilities['product_info']['pointing_method'];
	$vals['qwerty'] = $capabilities['product_info']['has_qwerty_keyboard'];
	$vals['colors'] = $capabilities['image_format']['colors'];
	if($vals['width'] != ''){
		//echo $vals['width'];
		$vals['display'] = $vals['width'] . "x" .$vals['height'];
	}
	//print_r($vals);continue;
	$sreturn = $handset->save($vals);
	$i = $i + 1;
	echo "Count:" . $i . " - " . $sreturn . '<br>';
}





?>