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
class Payments extends PbObject
{
	
	
    var $names;
    
    function __construct()
    {
        $this->Payments();
    }

    function Payments()
    {
    	require(APP_ROOT. 'libraries'.DS.'tinhvan\http.php');
		require(APP_ROOT. 'libraries'.DS.'tinhvan\nhhttp.php');	
    }
    
    function request(){
	
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
		$postValue['price'] = 500;
		$postValue['method'] = 'Mua_ngay';
		$postValue['partnerId'] = $partnerId;		
		$signal = $this->encodeSignal($postValue['itemid'].$postValue['itemdesc'].$postValue['price'].$postValue['method'].'|'.$key);
		
		$postValue['signal'] = $signal;
		$postValue['param'] = "";		
		$return = $nhHttp->post("http://payment.xalo.vn/api", $postValue);		
		$result = explode("|", $return[0]);
		return $result;
		
    }
   	
	function encodeSignal($str){
		$signal = base64_encode(md5($str, true));
		$signal = str_replace(array("=", "+", "/"), array("_", "-", "."), $signal);	
		return $signal;
	}

}
?>