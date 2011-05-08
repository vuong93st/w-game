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
$gamehandset = new Gamehandsets();
$game = new Games();

$product = new Products();

$page = new Pages();
$page->pagetpl_dir = $theme_name;


if (isset($_GET['pid'])) {
	$pid = intval($_GET['pid']);
}

$device_id = "sonyericsson_w200a_ver1";
$info = $product->getProductById($pid);

if(empty($info)){
	flash("không có dữ liệu thỏa mãn yêu cầu!", '', 0);
}

$gamehandset_info = $gamehandset->getInfo($pid,$device_id);

if(!empty($gamehandset_info)){
	$game_id = $gamehandset_info['game_id'];
}

$game_info = $game->getInfoById($game_id);

$attach_id = $game_info['attachment_id'];

if(empty($attach_id)){
	//flash("Không có game tương ứng cho dòng máy của bạn!");
	setvar("attach_alert","Không có game tương ứng cho dòng máy của bạn");
}

if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	switch ($do) {
		case "download":
			//check Money
						
			uses("attachment");
			$attachment = new Attachments();
			if (empty($_GET['aid'])) {
				flash();
			}
			$attach_id = authcode(rawurldecode($_GET['aid']), "DECODE");			
			if (empty($attach_id)) {
				flash();
			}
			require(LIB_PATH. "download.class.php");
			require(LIB_PATH. "js.class.php");
			$download = new Downloads('',false);			
			$download->attach_filename = rawurlencode($attachment->getAttachFileName($attach_id));
			$filename = "../". $attachment->file_url;			
			if(!$download->downloadfile($filename))
			{
				die($download->geterrormsg());
			}else{
				JS::Close();
			}
			break;
		default:
			break;
	}
}

$info['attach_hashid'] = rawurlencode(authcode($attach_id));
setvar("item", $info);
template("buy");

?>