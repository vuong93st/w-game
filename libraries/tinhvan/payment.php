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
	
	//print_r($_REQUEST);
	$paymentMethodList = split("\.", trim($_REQUEST['m']));
	//print_r($paymentMethodList);
	$paymentMethod = trim($paymentMethodList[0]);
					
	$postValue = array();
	$postValue['o'] = "requestTransaction";
	$postValue['itemid'] = 'MC15000';
	$postValue['itemdesc'] = 'NAP';
	$postValue['price'] = 1000;
	//$postValue['method'] = 'Mua_ngay';
	$postValue['partnerId'] = $partnerId;		
	$signal = encodeSignal($postValue['itemid'].$postValue['itemdesc'].$postValue['price'].$postValue['method'].'|'.$key);
	
	$postValue['signal'] = $signal;
	$postValue['param'] = "";
	
	//echo "SEND POST: <br>\n";
	print_r($postValue);
	$return = $nhHttp->post("http://payment.xalo.vn/api", $postValue);		
	echo "Return: <br>\n";
	print_r($return);
	die();

		/*
		token|redirectURL
		hoặc các mã lỗi có dạng như sau:
		-1| Lỗi nguyên nhân do hệ thống payment
		-2| Lỗi xác thực thông tin không hợp lệ
		*/
		#$responseStr = trim($return[0]);
		#$responseArr = split("\|", $responseStr);
		#if (!in_array($responseArr[0], array("-1", "-2"))){
		#	header("HTTP/1.1 200 OK");
		#	header("Location: ".trim($responseArr[1]));			
		#}
		
	

function encodeSignal($str){
	$signal = base64_encode(md5($str, true));
	$signal = str_replace(array("=", "+", "/"), array("_", "-", "."), $signal);	
	return $signal;
}

?>
