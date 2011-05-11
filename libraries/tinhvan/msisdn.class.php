<?php
/**
 * PHPB2B :  Opensource B2B Script (http://www.phpb2b.com/)
 * Copyright (C) 2007-2010, Ualink. All Rights Reserved.
 * 
 * Licensed under The Languages Packages Licenses.
 * Support : phpb2b@hotmail.com
 * 
 * @version $Revision$
 */
class Msisdns extends PbObject
{
	
	
    var $names;
    
    function __construct()
    {
        $this->Msisdns();
    }

    function Msisdns()
    {
    	require(APP_ROOT. 'libraries'.DS.'tinhvan\http.php');
		require(APP_ROOT. 'libraries'.DS.'tinhvan\nhhttp.php');	
    }
    
    function getMsisdnInfo($callback){
	    $httpObj = new http_class();
		$nhHttp = new nhhttp($httpObj);
		
		$partnerId = 10; //Điền partnerID đc cung cấp
		$key = 'x@l0-th1nkn3t';// Điền key của Partner đc cung cấp
	
		$secFrom2010 = (time() - mktime(0, 0, 0, 1, 1, 2010));
		$minFrom2010 = floor($secFrom2010 / 60);
			
		$timeSignal = dechex($minFrom2010);
		$signal = $this->encodeSignal($partnerId.'|'.$timeSignal.'|'.$key);	
		
		//$callback = urlencode("http://wap.thinknet.vn/test/payment.php"); 
		
		$callback = urlencode($callback); 
				
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
		
		$postValue = array();
		$postValue['p'] = $partnerId;
		$postValue['timeSignal'] =$timeSignal;
		$postValue['signal'] = $signal;
		$postValue['cb'] = $callback;	
		//
		//print_r($postValue);
		//echo $result = $nhHttp->post("http://payment.xalo.vn/method", $postValue);
		header("HTTP/1.1 200 OK");
		//echo "http://payment.xalo.vn/method?p=" . $partnerId . "&t=" . $timeSignal . "&s=" .$signal . "&cb= " . $callback;
		$url = "http://payment.xalo.vn/method?p=" . $partnerId . "&t=" . $timeSignal . "&s=" .$signal . "&cb= " . $callback;
		header("Location: " . $url);
		return;
    }
   	
	function encodeSignal($str){
		$signal = base64_encode(md5($str, true));
		$signal = str_replace(array("=", "+", "/"), array("_", "-", "."), $signal);	
		return $signal;
	}

}
?>