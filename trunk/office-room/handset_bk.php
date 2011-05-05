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

/*

$sql = "select * from terawurflmerge where actual_device_root =1";

$result = $pdb->GetArray($sql);

foreach ($result as $key=>$val) {
	$capabilities  = unserialize($val['capabilities']);
		
	$vals['deviceID'] = $capabilities['id'];
	$vals['user_agent'] = $capabilities['user_agent'];
	$vals['brand_name'] = $capabilities['product_info']['brand_name'];
	$vals['model_name'] = $capabilities['product_info']['model_name'];
	$vals['width'] = $capabilities['display']['resolution_width'];
	$vals['height'] = $capabilities['display']['resolution_height'];

	//$sreturn = $handset->save($vals);
	//echo $sreturn . '<br>';
}
*/




?>