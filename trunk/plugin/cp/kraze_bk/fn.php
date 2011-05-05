<?

//turn off WSDP caching if not in a production environment
//$ini = ini_set("soap.wsdl_cache_enabled","0");

function kraze_hook_get_url($msisdn="",$req_id="",$game_cp_id="",$req_time = "")
{
		
    global $kraze_param;
	
	$result['url'] = '';
	$result['code'] ='';
	$result['info']='';	
	
	if(empty($msisdn) || trim($msisdn) ==''){

		$result['url'] = '';
		$result['code'] ='-100';
		$result['info']='Loi khong co tham so phone truyen vao';
		//print_r($result);
		//exit;
		return $result; 				
	}elseif(empty($req_id) || trim($req_id) ==''){
		$result['url'] = '';
		$result['code'] ='-100';
		$result['info']='Loi khong co tham so req_id truyen vao';
		//print_r($result);
		//exit;
		return $result; 				
	}elseif(empty($game_cp_id) || trim($game_cp_id) ==''){
		$result['url'] = '';
		$result['code'] ='-100';
		$result['info']='Loi khong co tham so game_id truyen vao';
		
		//print_r($result);
		//exit;		
		return $result; 				
	}
	
	try {	
			
			$request_url = $kraze_param['api_url'] . "?" .  "MSISDN=" . $msisdn . "&reqTime=" .$req_time. "&shortcode=" . $kraze_param['service_id'] . "&reqId=" .$req_id. "&GameID=" . $game_cp_id .  "&username=" . $kraze_param['user_name'] . "&password=" .$kraze_param['password'] ;
				
			try {	
				$content ='';
				// Create the stream context	
				$content = trim(content_from_curl($request_url));				
				//$content = trim(content_from_curl('thinknet.vn'));
				ob_flush();  
    			flush();
				
			} catch (Exception $e) {
				//Log error	;
				//echo  $e->getMessage();
			}			
			
					
			if(!empty($content) && $content !=='' && strpos($content,'tp://') > 0){
				$url = $content;			
				$error_code = '1';
				$info = 'Yeu cau su ly thanh cong';						
			}else{
				$url = '';			
				$error_code = '0';
				$info = 'Co loi CP say ra :' . $content;				
			}
	
	} catch (Exception $e) {
		$url = '';
		$error_code = 0;
		$info = "Co loi say ra:" . $e->getMessage();		
	}

	$result['url'] = $url;
	$result['code'] = $error_code;
	$result['info']= $info . ' - ' . $request_url;
	return $result;
}

function content_from_curl($url)
{
   $content = false;     // we will populate this with the downloaded content, if we get, else return false
   $curl = curl_init(); 
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_TIMEOUT, 20);
   curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
   $content = curl_exec($curl) ;	
   if($content === false )   {         //failure
      return 'cURL error: ' . curl_error($ch);
   }
   else {
      //success
   }
   curl_close($curl);        // close the connection
   return $content;
}

?>