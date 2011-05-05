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
uses("Download");
require(APP_ROOT.'./libraries/page.class.php');
require("session_cp.inc.php");
include(CACHE_PATH. "cache_typeoption.php");

$page = new Pages();


$download = new Downloads();
$conditions = null;
$tpl_file = "download.detail";
$joins = array();

$today = getdate(); 


//$fromdate = date("Y-m-d",strtotime("-24 hours"));
//$todate = date("Y-m-d");

$fromdate = date("Y-m-d");
$todate = date('Y-m-d',mktime(0,0,0,date('m'), date('d')+1, date('Y')));

setvar("fromdate",$fromdate);
setvar("todate",$todate);


$condition= "create_on BETWEEN ";
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
	//	template($tpl_file);
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
				$conditions[]= "mf.msisdn like '%".trim($_GET['q'])."%'";
			}elseif($_GET['search_type'] == 'Mã Game'){
				$conditions[]= "mf.game_id like '%".trim($_GET['q'])."%'";			
			}
			
		}
		if (!empty($_GET['cp_id'])) {
			$conditions[]= "mf.cp_id like '%".trim($_GET['cp_id'])."%'";
		}
		if (!empty($_GET['user_name'])) {
			$conditions[]= "mf.user_name like '%".trim($_GET['user_name'])."%'";
		}
		if (!empty($_GET['date1'])) {							
			if (!empty($_GET['date1']) && !empty($_GET['date2'])) {							
				
				$fromdate = $_GET['date1'];
				$todate = $_GET['date2'];
				
				setvar("fromdate",$fromdate);
				setvar("todate",$todate);
				
				$condition= "Download.create_on BETWEEN ";
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

$amount = $download->findCount(null, $conditions,"id", null);

$page->setPagenav($amount);


$joins[] = "INNER JOIN {$tb_prefix}customers mf ON Download.req_key=mf.req_key";
$fields = "Download.Id,mf.msisdn,mf.req_id,mf.cp_id,mf.cp_game_id,Download.req_key,Download.content,Download.device_id,Download.device_fall_back,Download.device_mobile_browser,Download.device_model_name,Download.device_brand_name,Download.create_on";

$result = $download->findAll($fields, $joins, $conditions, "Download.id DESC", $page->firstcount, $page->displaypg);
//echo 'test';
//print_r($result);
//exit;
setvar("TotalRequest",$amount);
setvar("Items", $result);
setvar("ByPages", $page->getPagenav());

template($tpl_file);
?>