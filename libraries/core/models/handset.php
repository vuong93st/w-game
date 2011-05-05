<?php
class Handsets extends PbModel {
 	var $name = "Handset";

 	function Handsets()
 	{
 		parent::__construct();
 	}
 	
 	function getall(){ 		
 		
 		$sql = "select * from tb_products";
 		
 		$result = $this->dbstuff->GetArray($sql);

 		print_r($result);
 	}
}
?>