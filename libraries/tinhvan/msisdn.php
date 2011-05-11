<?
/**
 * Bắt đầu quá trình bằng việc đặt link để người dùng click thanh toán dạng:
 * 	<a href="payment.php?genUrl=1">THANH TOÁN</a>
 * 
 */
session_start();	
ini_set('display_errors', "On");	 
error_reporting(0);
include("http.php");
include("nhhttp.php");

	$httpObj = new http_class();
	$nhHttp = new nhhttp($httpObj);
	
	$partnerId = 10; //Điền partnerID đc cung cấp
	$key = 'x@l0-th1nkn3t';// Điền key của Partner đc cung cấp

	$secFrom2010 = (time() - mktime(0, 0, 0, 1, 1, 2010));
	$minFrom2010 = floor($secFrom2010 / 60);
		
	$timeSignal = dechex($minFrom2010);
	$signal = encodeSignal($partnerId.'|'.$timeSignal.'|'.$key);	
	//$callback = urlencode("http://wap.thinknet.vn/test/payment.php"); 
	$m = $_GET['m'];
	
	$callback = urlencode("http://localhost/demo/payment.php"); 
			
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
	
	print_r($info);

	#header("HTTP/1.1 200 OK");
	#header("Location: http://payment.xalo.vn/method?p=$partnerId&t=$timeSignal&s=$signal&cb=$callback");
	echo "\n<br><a href='http://payment.xalo.vn/method?p=$partnerId&t=$timeSignal&s=$signal&cb=$callback'>GO PAY</a>";	
	

function encodeSignal($str){
	$signal = base64_encode(md5($str, true));
	$signal = str_replace(array("=", "+", "/"), array("_", "-", "."), $signal);	
	return $signal;
}

?>
