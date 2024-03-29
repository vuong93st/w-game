<?php
class PromotionCustomer extends PbController {
	var $name = "PromotionCustomer";
	
	function rewrite($id = null, $title = null)
	{
		global $rewrite_able, $rewrite_compatible;
		if ($rewrite_able) {
			if($rewrite_compatible && !empty($title)){
				return "announce/".rawurlencode($title)."/";
			}else{
				return "announce/detail/".$id.".html";
			}
		}else{
			if($rewrite_compatible && !empty($title)){
				return "announce.php?title=".rawurlencode($title);
			}else{
				return "announce.php?id=".$id;
			}
		}
	}
	function test()
	{
		return "test";
	}
}
?>