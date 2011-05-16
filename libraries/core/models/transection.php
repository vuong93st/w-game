<?php
class Transections extends PbModel {
 	var $name = "Transection";

 	function Transections()
 	{
 		parent::__construct();
 	}
 	
 	function getTransectionByToken($token){ 		
 		
 		$sql = "select * from tb_transections where transection_token='" . $token . "'"; 		 		
 		$result = $this->dbstuff->GetRow($sql); 		
 		return $result;
 	}
 	
function formatResultWap($result)
	{
		global $rewrite_able;
		require(CACHE_PATH. 'cache_membergroup.php');
		
		if (!empty($result)) {
			$count = count($result);
			for($i=0; $i<$count; $i++){
				$result[$i]['transection_time'] = @date("Y-m-d h:m:s", $result[$i]['transection_time']);
				$result[$i]['content'] = strip_tags($result[$i]['content']);
				$result[$i]['image'] = "../" . pb_get_attachmenturl($result[$i]['picture']);
				if($result[$i]['status'] == 1){
					$result[$i]['status_des'] = "Đã mua thành công";
				}else {
					$result[$i]['status_des'] = "Chưa mua thành công";
				}
			}
			return $result;
		}else{
			return null;
		}
	}
}
?>