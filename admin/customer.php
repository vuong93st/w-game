<?php
/**
 * PHPB2B :  Opensource B2B Script (http://www.phpb2b.com/)
 * Copyright (C) 2007-2010, Ualink. All Rights Reserved.
 * 
 * Licensed under The Languages Packages Licenses.
 * Support : phpb2b@hotmail.com
 * 
 * @version $Revision: 1393 $
 */
require("../libraries/common.inc.php");
uses("Customer");
require(APP_ROOT.'./libraries/page.class.php');
require("session_cp.inc.php");
include(CACHE_PATH. "cache_typeoption.php");

$page = new Pages();


$customer = new Customers();
$conditions = null;
$tpl_file = "customer";
$joins = array();

$today = getdate(); 


//$fromdate = date("Y-m-d",strtotime("-24 hours"));
//$todate = date("Y-m-d");

$fromdate = date("Y-m-d");
$todate = date('Y-m-d',mktime(0,0,0,date('m'), date('d')+1, date('Y')));

setvar("fromdate",$fromdate);
setvar("todate",$todate);


$condition= "c.create_on BETWEEN ";
$condition.= "'" . $fromdate ."'";
$condition.= " AND ";
$condition.= "'". $todate . "'";								

$conditions[] = $condition;
				

if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if (!empty($_GET['id'])) {
		$id = intval($_GET['id']);
	}
	if ($do == "edit") {
		if ($id) {
			setvar("item", $keyword->read("*", $id));
		}
		//$tpl_file = "keyword.edit";
		//template($tpl_file);
		exit;
	}
					
	if ($do == "search") {		
		
		unset($conditions);
		
		if (!empty($_GET['display_pg']) && in_array($_GET['display_pg'], $page->page_option)) {
			$page->displaypg = $_GET['display_pg'];
		}
		if (!empty($_GET['q'])) {
			setvar('keywork',trim($_GET['q']));			
			if($_GET['search_type'] =='Số điện thoại'){
				$conditions[]= "c.msisdn like '%".trim($_GET['q'])."%'";
			}elseif($_GET['search_type'] == 'Mã Game'){
				$conditions[]= "c.game_id like '%".trim($_GET['q'])."%'";			
			}
			
		}
		if (!empty($_GET['cp_id'])) {
			$conditions[]= "c.cp_id like '%".trim($_GET['cp_id'])."%'";
		}
		if (!empty($_GET['user_name'])) {
			$conditions[]= "c.user_name like '%".trim($_GET['user_name'])."%'";
		}
		if (!empty($_GET['date1'])) {							
			if (!empty($_GET['date1']) && !empty($_GET['date2'])) {							
				
				$fromdate = $_GET['date1'];
				$todate = $_GET['date2'];
				
				setvar("fromdate",$fromdate);
				setvar("todate",$todate);
				
				$condition= "c.create_on BETWEEN ";
				$condition.= "'" . $_GET['date1'] ."'";
				$condition.= " AND ";
				$condition.= "'". $_GET['date2'] . "'";								
				$conditions[] = $condition;
			}
		}		
	}
	if ($do == "del" && !empty($id)) {
		//$keyword->del($id);
	}
}

setvar("Status", $_PB_CACHE['common_status']);

$amount = $customer->findCount(null, $conditions,"id", 'c');

$page->setPagenav($amount);


//$joins[] = "LEFT JOIN {$tb_prefix}downloads mf ON Download.req_key=mf.req_key";
$joins[] = null;
$fields = "Id,msisdn,req_id,req_key,create_on,game_id,user_name,cp_id,cp_game_id,cp_game_url";

$result = $customer->GetAllDatas($conditions,null);

setvar("TotalRequest",$amount);
setvar("Items", $result);
setvar("ByPages", $page->getPagenav());

template($tpl_file);
?>