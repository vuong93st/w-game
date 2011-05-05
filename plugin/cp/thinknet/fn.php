<?

function thinknet_hook_get_url($arr_mgame)
{
    //global $clickatell_param;
	$url = '';
	
	if(empty($url) || $url == ''){
    	$url = "http://thinknet.vn";		
	}
	
	return $url;
}

?>