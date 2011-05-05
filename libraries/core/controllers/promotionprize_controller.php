<?php
class PromotionPrize extends PbController {
	var $name = "PromotionPrize";
	
	function getAllPromotionPrize()
	{
		return "hello";
		
		//system,special,define
		$return = array();
		//include CACHE_PATH. "cache_membergroup.php";
		$typeid = strval($type);
		$return[0]='huynhnt';
		$return[1]='nguyen tien huynh';
		
		return $return;
	}
}
?>