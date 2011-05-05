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

uses("gamehandset","handset");

require(LIB_PATH .'time.class.php');
require(APP_ROOT.'libraries/page.class.php');
require(LIB_PATH. "cache.class.php");
include(CACHE_PATH. "cache_type.php");
$page = new Pages();
$cache = new Caches();

$gamehandset = new Gamehandsets();
$handset = new Handsets();

$conditions = array();

//$conditions[] = "brand_name <> ''";
//$conditions[] = "brand_name = 'nokia'";
$fields = null;
$tpl_file = "gamehandset";

if(!empty($id)){
	$vals['created'] = $time_stamp;
	$handsetinfo = $handset->read("*",$id);
	$vals['device_id'] = $handsetinfo['deviceID'];
	$vals['brand_name'] = $handsetinfo['brand_name'];
	$vals['model_name'] = $handsetinfo['model_name'];
}
	
if (isset($_REQUEST['del']) && !empty($_REQUEST['id'])){
	$deleted = false;
	$deleted = $gamehandset->del($_REQUEST['id']);
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
		$vals['game_id'] = $gid;
	}
	
	if(isset($_GET['pid'])){
		$pid = $_GET['pid'];	
		$vals['product_id'] = $pid;
	}
	
	if ($do == "search") {		
		if(!empty($_GET['q'])) {
			$search_title = $_GET['q'];
			$conditions[] = "model_name like '%".$search_title."%'";
		}
	}
	if ($do == "del" && !empty($id)){
		$deleted = false;
		$deleted = $gamehandset->del($id);
		if($deleted){
			flash("Thiáº¿t bá»‹ Ä‘Ã£ bá»‹ loáº¡i bá»� khá»�i danh sÃ¡ch!");			
		}
		
	}

	if($do =="importall"){
		//print_r($_POST['id']);exit;	
		$imported = false;		
		
		foreach ($_POST['id'] as $val) {
			$vals['created'] = $time_stamp;			
			$handsetinfo = $handset->read("*",$val);
			$vals['device_id'] = $handsetinfo['deviceID'];
			$vals['brand_name'] = $handsetinfo['brand_name'];
			$vals['model_name'] = $handsetinfo['model_name'];

			$concheck = array();
			$concheck[] = "device_id='" . $handsetinfo['deviceID']. "'";
			$concheck[] ="product_id=" . $pid; 
			$concheck[] ="game_id=" . $gid;
					
			$deviceid = $gamehandset->field("device_id",$concheck);			
			if(empty($deviceid)){
				$imported = $gamehandset->save($vals);
				//echo "tét";			
			}
	    }
	    flash("Danh sách thiết bị đã được thêm vào thành công!");
	    
	}
	
	
	if ($do == "import" && !empty($id)){
		$imported = false;		
		$concheck = array();
		$concheck[] = "device_id='" . $handsetinfo['deviceID']. "'";
		$concheck[] ="product_id=" . $pid; 
		$concheck[] ="game_id=" . $gid;
		print_r($concheck);exit;
		
		$deviceid = $gamehandset->field("device_id",$concheck);
		if(empty($deviceid)){
			$imported = $gamehandset->save($vals);			
		}
		else {
			flash("Quá trình thêm thiết bị thất bại");
		}
		
		if($imported){
			flash("Quá trình thêm thiết bị thành công!");
		}
	}
	if ($do == "edit") {				
		if(!empty($id)){
			$item = $gamehandset->read("*", $id);
		}
	}	
}

if(isset($_POST["del"])){
	$deleted = false;   
	if (is_array($_POST['id'])) {
		$deleted = $gamehandset->del($_POST['id']);
		//echo "Tét" . $deleted;
		if($deleted){
			flash("Quá trình xóa lựa chọn thành công");
		}else{
			flash("Quá trình xóa lựa chọn thất bại");
		} 
		
	}
}

if(empty($pid) || empty($gid)){
	flash("HÃ£y chá»�n file game vÃ  sáº£n pháº©m cáº§n thÃªm thiáº¿t bá»‹ há»— trá»£!","product.php");	
} 
else{
	$conditions[] = "product_id=" . $pid;
	$conditions[] = "game_id=" . $gid;
} 


$amount = $gamehandset->findCount(null, $conditions);
$page->displaypg = 20;
$page->setPagenav($amount);

//print_r($conditions);
$result = $gamehandset->findAll("*", null, $conditions, "id desc", $page->firstcount, $page->displaypg);

//print_r($result);

setvar("Items", $result);
setvar("ByPages", $page->pagenav);

template($tpl_file);

?>