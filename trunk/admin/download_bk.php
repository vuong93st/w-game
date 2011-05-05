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

$download = new Downloads();
$conditions = null;
$tpl_file = "download";
$joins = array();

$page = new Pages();


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
	if ($do == "search" && !empty($_GET['q'])) {
		$conditions[]= "mf.msisdn like '%".trim($_GET['q'])."%'";
	}
	if ($do == "del" && !empty($id)) {
		//$keyword->del($id);
	}
}


//setvar("Status", $_PB_CACHE['common_status']);

$joins[] = "INNER JOIN {$tb_prefix}customers mf ON Download.req_key=mf.req_key";
$fields = "Download.Id,mf.msisdn,Download.req_key,Download.content,Download.device_id,Download.device_fall_back,Download.device_mobile_browser,Download.device_model_name,Download.device_brand_name,Download.create_on";
$result = $download->findAll($fields, $joins, $conditions, "Download.id DESC", $page->firstcount, $page->displaypg);
//
//print_r($result);
//exit;
//setvar("Items", $result);
//setvar("ByPages", $page->getPagenav());
template($tpl_file);
?>