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

uses("game","gametype","attachment");

require(LIB_PATH .'time.class.php');
require(APP_ROOT.'libraries/page.class.php');
require(LIB_PATH. "cache.class.php");
include(CACHE_PATH. "cache_type.php");
$page = new Pages();
$game = new Games();
$attachment = new Attachment('attach');
$attachment_model = new Attachments();
$cache = new Caches();
$gametype = new Gametypes();
$conditions = array();
$fields = null;
$tpl_file = "game";

if (isset($_POST['save'])) {
	$vals = $_POST['data']['standard'];
	
	if (isset($_POST['id'])) {
		$id = intval($_POST['id']);
	}
	if (isset($_POST['data']['pid'])) {
		$pid = intval($_POST['data']['pid']);
	}
		
	if(!empty($_POST['data']['publish_time'])){
		$vals['publish_time'] = Times::dateConvert($_POST['data']['publish_time']);
	}
	if(!empty($_POST['data']['force_time'])){
		$vals['force_time'] = Times::dateConvert($_POST['data']['force_time']);
	}
	$allowed_ext = array(".zip", ".rar", ".pdf", ".doc", ".xls", ".txt", ".ppt",".jar");
	$attachment->allowed_file_ext = am($attachment->allowed_file_ext, $allowed_ext);
	$attachment->rename_file = "game-".md5($time_stamp);
	//$attachment->description = trim($vals['title']);
	if(!empty($id)){
		$attachment->rename_file = "game-".md5($id);
	}

	if(!empty($pid)){
		$vals['product_id'] = $pid;
	}
	if (!empty($_FILES['attach']['name'])) {
		$attachment->upload_process();
		$vals['attachment_id'] = $attachment->id;
		$vals['title'] = $attachment->file_name;
	}
	if(!empty($id)){
		$vals['modified'] = $time_stamp;
		$result = $game->save($vals, "update", $id);
	}else{
		$vals['created'] = $vals['modified'] = $time_stamp;		
		$result = $game->save($vals);
	}
	if (!$result) {
		flash();
	}
}
if (isset($_REQUEST['del']) && !empty($_REQUEST['id'])){
	$deleted = false;
	$deleted = $game->del($_REQUEST['id']);
}
if (isset($_POST['do'])) {
	$do = trim($_POST['do']);
	if ($do == "save_standardtype") {
		$ins_arr = array();
		$tmp_arr = explode("\r\n", $_POST['data']['sort']);
		array_filter($tmp_arr);
		$i = 1;
		foreach ($tmp_arr as $key=>$val) {
			if(!empty($val))
			$ins_arr[$i] = "(".$i.",'".$val."')";
			$i++;
		}
		if (!empty($ins_arr)) {
			$pdb->Execute("TRUNCATE TABLE {$tb_prefix}standardtypes");
			$ins_str = "REPLACE INTO {$tb_prefix}standardtypes (id,name) VALUES ".implode(",", $ins_arr).";";
			$pdb->Execute($ins_str);
		}
		if($cache->updateTypes()){
			flash("success");
		}else{
			flash();
		}
	}
}
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if (isset($_GET['action'])) {
		$action = trim($_GET['action']);
	}
	if (!empty($_GET['id'])) {
		$id = intval($_GET['id']);
	}
	if ($do == "type") {
		$tpl_file = "standardtype";
		if (!empty($_PB_CACHE['standardtype'])) {
			setvar("sorts", implode("\r\n", $_PB_CACHE['standardtype']));
		}
		template($tpl_file);
		exit;
	}
	if ($do == "search") {
		if(!empty($_GET['q'])) {
			$search_title = $_GET['q'];
			$conditions = "title like '%".$search_title."%'";
		}
	}
	if ($do == "del" && !empty($id)){
		$deleted = false;
		$deleted = $game->del($id);
	}
	if ($do == "edit") {				
		if(!empty($id)){
			$item = $game->read("*", $id);
			if(!empty($item['publish_time'])){
				$item['publish_date'] = @date("Y-m-d", $item['publish_time']);
			}
			if(!empty($item['force_time'])){
				$item['force_date'] = @date("Y-m-d", $item['force_time']);
			}
			if(!empty($item['attachment_id'])){
				$item['attach'] = $attachment_model->getAttachLink($item['attachment_id']);
			}
			setvar("item", $item);
		}
        setvar("StandardTypes",$_PB_CACHE['standardtype']);
		$tpl_file = "game.edit";
		template($tpl_file, true);
	}	
}

if(isset($_GET['pid'])){
	$pid = $_GET['pid'];	
}

if(!empty($pid)){
	$conditions = "product_id = " . $pid;	
}else{	
	flash("Hãy chọn sản phẩm cần thêm file game!","product.php");
} 

$amount = $game->findCount(null, $conditions);
$page->setPagenav($amount);
$result = $game->findAll("Game.*,t.name AS typename", array("LEFT JOIN {$tb_prefix}gametypes t ON Game.type_id=t.id"), $conditions, "Game.id DESC", $page->firstcount, $page->displaypg);

setvar("Items", $result);
setvar("ByPages", $page->pagenav);

template($tpl_file);
?>