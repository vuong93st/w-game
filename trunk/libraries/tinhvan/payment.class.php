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
class Payments extends PbModel
{
	
	
    var $names;
     
    function Payments()
    {
    	parent::__construct();
    	require(APP_ROOT. 'libraries'.DS.'tinhvan\http.php');
		require(APP_ROOT. 'libraries'.DS.'tinhvan\nhhttp.php');	
    }
    
    function getPaymentStatus($token){
    	$httpObj = new http_class();
		$nhHttp = new nhhttp($httpObj);
		
		$partnerId = 10; //Điền partnerID đc cung cấp
		$key = 'x@l0-th1nkn3t';// Điền key của Partner đc cung cấp
		$signal = $this->encodeSignal($token.'|'.$key);
		
		$postValue = array();
		$postValue['o'] = "getTransactionStatus";
		$postValue['token'] = $token;
		$postValue['partnerId'] = $partnerId;
		$postValue['signal'] = $signal;
		
		$return = $nhHttp->post("http://payment.xalo.vn/api", $postValue);		
		
		if (is_array($return)){
			$return = $return[0];
			$status = explode("|", $return);
			if(is_array($status)){
				$status = $status[0];				
			}else{
				$status = "999";
			} 				
		}
		//Save Log
		if(!empty($status)){
			$sql = "update {$this->table_prefix}transections set status=" . $status . ",transection_return ='" .$return . "'  where transection_token='" . $token . "'";			
			$this->dbstuff->Execute($sql);	
		}		
		return $status;						
    }
    
    //function 
    
    function request($info){
	
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
		$postValue['itemid'] = $info['product_id'];
		$postValue['itemdesc'] = $info['name'];
		$postValue['price'] = $info['price'];
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