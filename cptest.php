<?php
/**

 * 
 * @version $Revision: 1267 $
 */

define('CURSCRIPT', 'api');
require("libraries/common.inc.php");
require("share.inc.php");


//Include function file


$cp_ext = 'kraze';

$arr_mgame['msisdn'] = '849351162682';
$arr_mgame['req_id'] = '12121112';
$arr_mgame['cp_game_id'] = 'KV969';
$arr_mgame['req_time'] = '20110105101402';



//require("plugin/cp/" . $cp_ext . "/config.php");
//require("plugin/cp/" . $cp_ext . "/fn.php");			


//$url =  geturl($cp_ext,$arr_mgame);		

echo 'tét';
$url=content_from_curl('http://m.thinknet.vn/demo.php');
echo $url;
//print_r($url);
exit;

function content_from_curl($url)
{
   $content = false;     // we will populate this with the downloaded content, if we get, else return false
   $curl = curl_init(); 
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_TIMEOUT, 20);
   curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
   //$content = curl_exec($curl) ;	
   if( ( $content = curl_exec($curl) ) === false )   {         //failure
      return 'cURL error: ' . curl_error($ch);
   }
   else {
      //success
   }
   curl_close($curl);        // close the connection
   return $content;
}

function geturl($cp_ext = '',$arr_mgame=array())
{		
	$url = x_hook($cp_ext, 'get_url',$arr_mgame);		
	return $url;
}

function x_hook($c_plugin, $c_function, $c_param=array())
{
		
	$c_fn = $c_plugin.'_hook_'.$c_function;
	if (function_exists($c_fn))
	{
		return call_user_func_array($c_fn,$c_param);
	}else
	{
		//Log khong ton tai ham cua cp
		return null;
	}
}


?>