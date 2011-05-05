<?php
class Promotions extends PbModel {
 	var $name = "Promotion";
 	function Promotions()
 	{
		parent::__construct();
 	}
	
	function getPromotionOptions()
	{				
		$sql = "select Id,name from ".$this->getTable(true)." where status=1 order by create_on";
		$return = $this->dbstuff->GetAll($sql);
		foreach ($return as $key=>$val) {
			$m[$val['Id']] = $val['name'];
		}
		return $m;		
	}
}
?>