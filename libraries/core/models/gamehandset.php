<?php
class Gamehandsets extends PbModel {
 	var $name = "Gamehandset";

 	function Gamehandsets()
 	{
 		parent::__construct();
 	}
 	
 	function getInfo($product_id = 0,$device_id = ''){
 		$sql = "SELECT * FROM {$this->table_prefix}gamehandsets WHERE product_id =" . $product_id . " and device_id='" .$device_id . "'";
		$result = $this->dbstuff->GetRow($sql);	
		return $result;
 	}
 }
?>