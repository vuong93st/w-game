<?php
/**

 */
require("../libraries/common.inc.php");
require("wap.share.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
//require(LIB_PATH. 'page.class.php');
require(APP_ROOT.'./libraries/page.class.php');
//require(LIB_PATH."Tera-WURFL/TeraWurfl.php");

uses("product","gamehandset","game");
$product = new Products();
$gamehandset = new Gamehandsets();
$game = new Games();

$page = new Pages();
$page->pagetpl_dir = $theme_name;


if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}

$info = $product->getProductById($id);

if(empty($info) || !$info){
	flash("không có dữ liệu thỏa mãn yêu cầu!", '', 0);
}
$gamehandset_info = $gamehandset->getInfo($pid,$device_id);
if(!empty($gamehandset_info)){
	$game_id = $gamehandset_info['game_id'];
}

$game_info = $game->getInfoById($game_id);

$attach_id = $game_info['attachment_id'];

if(empty($attach_id)){
	setvar("attach_alert","Khuyến cáo: Game không hỗ trợ cho điện thoại của bạn");
}

//print_r($info);
setvar("item", $info);

template("content");

?>