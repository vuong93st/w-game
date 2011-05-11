<?php
/**

 */
require("../libraries/common.inc.php");
//require("wap.share.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
//require(LIB_PATH. 'page.class.php');

require(APP_ROOT. 'libraries'.DS.'tinhvan\http.php');
require(APP_ROOT. 'libraries'.DS.'tinhvan\nhhttp.php');	

$httpObj = new http_class();
$nhHttp = new nhhttp($httpObj);

$partnerId = 10; //Điền partnerID đc cung cấp
$key = 'x@l0-th1nkn3t';// Điền key của Partner đc cung cấp

$secFrom2010 = (time() - mktime(0, 0, 0, 1, 1, 2010));
$minFrom2010 = floor($secFrom2010 / 60);
	
$timeSignal = dechex($minFrom2010);
$signal = encodeSignal($partnerId.'|'.$timeSignal.'|'.$key);	
$callback = $_GET['forward'];
		
$info = array();
$info['now'] = date("Y-m-d H:i:s");
$info['secFrom2010'] = $secFrom2010;
$info['minFrom2010'] = $minFrom2010;
$info['partnerId'] = $partnerId;
$info['key'] = $key;
$info['timeSignal'] = $timeSignal;
$info['signal'] = $signal;
$info['callback'] = $callback;
$info['partnerId|timeSignal|key'] = $partnerId.'|'.$timeSignal.'|'.$key;
$info['MD5_partnerId|timeSignal|key'] = md5($partnerId.'|'.$timeSignal.'|'.$key, true);
$info['BASE64_MD5_partnerId|timeSignal|key'] = base64_encode($info['MD5_partnerId|timeSignal|key']);	
$info['BASE64_MD5_partnerId|timeSignal|key'] = str_replace(array("=", "+", "/"), array("_", "-", "."), $info['BASE64_MD5_partnerId|timeSignal|key']);

//echo $callback;exit;
//$callback = urlencode("http://wap.thinknet.vn/wap/index.php");
$callback = urlencode($callback);

//header("HTTP/1.1 200 OK");
pheader("Location: http://payment.xalo.vn/method?p=$partnerId&t=$timeSignal&s=$signal&cb=$callback");
//echo "\n<br><a href='http://payment.xalo.vn/method?p=$partnerId&t=$timeSignal&s=$signal&cb=$callback'>GO PAY</a>";	
	

function encodeSignal($str){
	$signal = base64_encode(md5($str, true));
	$signal = str_replace(array("=", "+", "/"), array("_", "-", "."), $signal);	
	return $signal;
}

?>