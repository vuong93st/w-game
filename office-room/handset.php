<?php
/**
 * PHPB2B :  Opensource B2B Script (http://www.phpb2b.com/)
 * Copyright (C) 2007-2010, Ualink. All Rights Reserved.
 * 
 * Licensed under The Languages Packages Licenses.
 * Support : phpb2b@hotmail.com
 * 
 * @version $Revision$
 */


require("../libraries/common.inc.php");
//require("session_cp.inc.php");
require("room.share.php");

uses("handset");

require(LIB_PATH .'time.class.php');
require(APP_ROOT.'libraries/page.class.php');
require(LIB_PATH. "cache.class.php");
include(CACHE_PATH. "cache_type.php");
$page = new Pages();
$cache = new Caches();

$handset = new Handsets();

$conditions = array();

$conditions[] = "brand_name <> ''";
$conditions[] = "brand_name = 'nokia'";
$fields = null;
$tpl_file = "handset";


if(!empty($pid)){
	$vals['product_id'] = $pid;
}

if(!empty($id)){
	$vals['modified'] = $time_stamp;
	$result = $handset->save($vals, "update", $id);
}
	
if (isset($_REQUEST['del']) && !empty($_REQUEST['id'])){
	$deleted = false;
	$deleted = $handset->del($_REQUEST['id']);
}


if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if (isset($_GET['action'])) {
		$action = trim($_GET['action']);
	}
	if (!empty($_GET['id'])) {
		$id = intval($_GET['id']);
	}
	
	if (!empty($_GET['gid'])) {
		$gid = intval($_GET['gid']);
	}
	
	if(isset($_GET['pid'])){
		$pid = $_GET['pid'];	
	}
	
	if ($do == "search") {		
		if(!empty($_GET['q'])) {
			$search_title = $_GET['q'];
			$conditions[] = "model_name like '%".$search_title."%'";
		}
	}
	if ($do == "del" && !empty($id)){
		$deleted = false;
		//$deleted = $game->del($id);
	}
	if ($do == "edit") {				
		if(!empty($id)){
			$item = $handset->read("*", $id);
		}
	}	
}

if(empty($pid) || empty($gid)){
	flash("Hãy chọn file game và sản phẩm cần thêm thiết bị hỗ trợ!","product.php");	
} 

$amount = $handset->findCount(null, $conditions);
$page->displaypg = 50;
$page->setPagenav($amount);

//print_r($conditions);
$result = $handset->findAll("*", null, $conditions, "brand_name ASC", $page->firstcount, $page->displaypg);

//print_r($result);

setvar("Items", $result);
setvar("ByPages", $page->pagenav);

template($tpl_file);

?>