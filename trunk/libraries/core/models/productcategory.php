<?php
class Productcategories extends PbModel {
 	
 	var $name = "Productcategory";

 	function Productcategories()
 	{
 		parent::__construct();
 	}
	
 	function disSubOptions1($parent_id, $level)
 	{
 		$data = $this->findAll("*", null, "parent_id='".$parent_id."'", "id ASC");
 		if (!empty($data)) {
 			$this->hasChildren=true;
 			foreach ($data as $key=>$val) {
 				$this->typeOptions.='<option value="'.$val['id'].'">';
 				$this->typeOptions.=str_repeat('&nbsp;&nbsp;', $level) . $val['name'];
 				$this->typeOptions.='</option >' . "\n";
 				$this->disSubOptions($val['id'], $level+1);
 			}
 		}else{
 			$this->hasChildren=false;
 		}
 	}
	
	function disSubOptions($parent_id, $level,$current)
 	{
		$data = $this->findAll("*", null, "parent_id='".$parent_id."'", "id ASC");
 		if (!empty($data)) {
 			$this->hasChildren=true;
 			foreach ($data as $key=>$val) {
 				if($current == $val['id'] ){
					$this->typeOptions.='<option value="'.$val['id'].'" selected = "selected" >';
				}else{
					$this->typeOptions.='<option value="'.$val['id'].'">';
				}
 				$this->typeOptions.=str_repeat('&nbsp;&nbsp;', $level) . $val['name'];
 				$this->typeOptions.='</option>' . "\n";
 				$this->disSubOptions($val['id'], $level+1,$current);
 			}
 		}else{
 			$this->hasChildren=false;
 		}
 	}
 	
 	function getTypeOptions($current)
 	{
 		$this->typeOptions = '';
 		$this->disSubOptions(0, 0,$current);
 		return $this->typeOptions;
 	}
}
?>