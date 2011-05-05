<?php
class Customers extends PbModel {
	var $name = "Customer";
	var $info;
 	var $fields = "c.*,count(d.req_key) as totals ";
 	
	function Customers()
 	{
		parent::__construct();
 	}
	
	function &getInstance() {
		static $instance = array();
		if (!$instance) {
			$instance[0] =& new Customers();
		}
		return $instance[0];
	}
	
	function GetAllDatas($conditions = null, $filter = false)
	{
		global $page;
		if (!empty($conditions)) {
			$this->setCondition($conditions);
		}

		$sql = "SELECT ".$this->fields." FROM ".$this->table_prefix."customers c LEFT JOIN ".$this->table_prefix."downloads d ON c.req_key=d.req_key ".$this->getCondition()." GROUP BY c.req_key ORDER BY c.id DESC LIMIT ".$page->firstcount.",".$page->displaypg;
		/*
		if (!isset($_GET['page'])) {
			if ($page->total_record>$page->displaypg && $filter) {
				$sql = "SELECT ".$this->fields." FROM ".$this->table_prefix."trades t LEFT JOIN ".$this->table_prefix."members m ON m.id=t.member_id ".$this->getCondition()." GROUP BY t.member_id ORDER BY t.id DESC LIMIT ".$page->firstcount.",".$page->displaypg;
			}
		}
		*/
				
		$result = $this->dbstuff->GetArray($sql);
		return $result;
		
		return $this->formatResult($result);
	}
 }