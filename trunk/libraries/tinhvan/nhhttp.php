<?
/**
 * Sử dụng
 * function/httpclient/http.php
 */

class nhhttp{
	var $error = '';
	var $user = '';
	var $password = '';
	var $logged_user = '';
	var $http;
	var $response_buffer_length = 1000;
	var $user_agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)';				

	function nhhttp($httpObj){
		$this->http = $httpObj;
		$this->http->follow_redirect = 1;
		$this->http->debug = 0;
		$this->http->debug_response_body = 0;
		$this->http->html_debug = 1;
		$this->http->user_agent = $this->user_agent;
	}
	
	function get($url, $header = null){		
		$this->http->GetRequestArguments($url, $arguments);		
		$arguments['RequestMethod']='GET';
//		$arguments["Headers"]["User-Agent"] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.15) Gecko/2009101601 Firefox/3.0.15";
//		$arguments["Headers"]["Accept"] = "*/*";
//		$arguments["Headers"]["Accept-Language"] = "en-us,en;q=0.5";
//		$arguments["Headers"]["Accept-Charset"] = "ISO-8859-1,utf-8;q=0.7,*;q=0.7";
//		$arguments["Headers"]["Keep-Alive"] = "300";
//		$arguments["Headers"]["Connection"] = "keep-alive";
//		$arguments["Headers"]["Cache-Control"] = "max-age=0";
		
		if (is_array($header))
		foreach ($header as $key => $value) {
			$arguments["Headers"][$key] = $value;
		}
		
		if(!$this->GetRequest($arguments, $response)) {
			return null;
		}
		return preg_split("/[\n]+/",$response);
	}
	

	function downYoutube($url){						
		$this->http->GetRequestArguments($url, $arguments);		
		$arguments["Headers"]["User-Agent"] = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)";
		$arguments["Headers"]["Accept"] = "*/*";
		$arguments["Headers"]["Accept-Language"] = "en-us,en;q=0.5";
		$arguments["Headers"]["Accept-Encoding"] = "gzip,deflate";
		$arguments["Headers"]["Accept-Charset"] = "ISO-8859-1,utf-8;q=0.7,*;q=0.7";
		$arguments["Headers"]["Keep-Alive"] = "300";
		$arguments["Headers"]["Connection"] = "keep-alive";
		$arguments["Headers"]["If-Modified-Since"] = "Wed, 01 Apr 2009 05:48:46 GMT";
		$arguments["Headers"]["If-None-Match"] = '"78c0de8-3bb-46677de720b80"';
		$arguments["Headers"]["Cache-Control"] = "max-age=0";

		$arguments['RequestMethod']='GET';
		if(!$this->GetRequest($arguments, $response)) {
			return null;
		}
		return $response;
	}
	
	function post($url, $paramArray, $header = null){		
		$this->http->GetRequestArguments($url, $arguments);
		$arguments['RequestMethod'] = 'POST';
		$arguments['PostValues'] = $paramArray;									
		
//		$arguments["Headers"]["User-Agent"] = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.15) Gecko/2009101601 Firefox/3.0.15";
//		$arguments["Headers"]["Accept"] = "*/*";
//		$arguments["Headers"]["Accept-Language"] = "en-us,en;q=0.5";
//		$arguments["Headers"]["Accept-Charset"] = "ISO-8859-1,utf-8;q=0.7,*;q=0.7";
//		$arguments["Headers"]["Keep-Alive"] = "300";
//		$arguments["Headers"]["Connection"] = "keep-alive";
//		$arguments["Headers"]["Cache-Control"] = "max-age=0";		
		
		if (is_array($header))	
		foreach ($header as $key => $value) {
			$arguments["Headers"][$key] = $value;
		}
		
		if(!$this->GetRequest($arguments, $response)) {			
			return null;
		}		
		return preg_split("/[\n]+/",$response);
	}

	function OpenRequest($arguments, &$headers){
		if(strlen($this->error=$this->http->Open($arguments))) return(0);
		if(strlen($this->error=$this->http->SendRequest($arguments))
		|| strlen($this->error=$this->http->ReadReplyHeaders($headers))){
			$this->http->Close();
			return(0);
		}
		if($this->http->response_status!=200){
			$this->error = 'the HTTP request returned the status '.$this->http->response_status;
			$this->http->Close();
			return(0);
		}
		return(1);
	}

	function GetRequestResponse(&$response){
		for($response = ''; ; ){
			if(strlen($this->error=$this->http->ReadReplyBody($body, $this->response_buffer_length))){
				$this->http->Close();
				return(0);
			}
			if(strlen($body)==0) break;
			$response .= $body;
		}
		$this->http->Close();
		return(1);
	}

	function GetRequest($arguments, &$response, &$headers = null){
		if(!$this->OpenRequest($arguments, $headers)) return(0);
		return($this->GetRequestResponse($response));
	}
}
?>