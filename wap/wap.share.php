<?php
/**

 */
if (session_id() == '' ) { 
	require_once(LIB_PATH. "session_php.class.php");
	$session = new PbSessions();
}
$wap_theme_name = "";
require(APP_ROOT.'languages'.DS.$app_lang.DS.'template.room.inc.php');
require(CACHE_PATH. "cache_membergroup.php");
require(APP_ROOT.'./libraries/device.class.php');

$smarty->template_dir = "template/";
$smarty->setCompileDir("wap".DS);
$smarty->flash_layout = "flash";

$device = new Devices();
$device_id = $device->getHandsetId();

setvar("Device", $device->getHandsetFullname());

if(isset($_GET['msisdn'])){
	$_SESSION['msisdn'] = $_GET['msisdn'];	
}

if (!isset($_SESSION['msisdn'])) {
	pheader("location:".URL."wap/msisdn.php?forward=".urlencode(pb_get_host(). $_SERVER['REQUEST_URI']));
	//echo urlencode(pb_get_host().$_SERVER['REQUEST_URI'] ); exit;
}

if(!empty($_SESSION['msisdn'])){
	setvar("msisdn", "Xin chào: " . $_SESSION['msisdn']);
}else {
	setvar("msisdn", "Chưa nhận diện được số điện thoại!");
}



$today_start = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
formhash();
?>