<?php
class Games extends PbModel {
 	var $name = "Game";

 	function Games()
 	{
 		parent::__construct();
 	}
 	
	function getInfoById($id){
 		$sql = "SELECT * FROM {$this->table_prefix}games WHERE id =" . $id ;
		$result = $this->dbstuff->GetRow($sql);				
		return $result;
 	}
	
 	function getInfoDefault($pid){
 		$sql = "SELECT * FROM {$this->table_prefix}games where product_id=" . $pid . " order by attachment_default desc" ;
		$result = $this->dbstuff->GetRow($sql);				
		return $result;
 	}
}
?>