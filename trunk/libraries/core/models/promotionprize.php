<?php
class PromotionPrizes extends PbModel {
 	var $name = "PromotionPrize";
 	function PromotionPrizes()
 	{
		parent::__construct();
 	}
	
	function getAllPromotionPrize()
	{		
		$sql = "select Id,name from ".$this->getTable(true)." order by create_on";
		$return = $this->dbstuff->GetAll($sql);
		foreach ($return as $key=>$val) {
			$m[$val['Id']] = $val['name'];
		}
		return $m;		
	}
}
?>