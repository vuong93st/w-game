<?php
/**

 */
require("../libraries/common.inc.php");
require("wap.share.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
//require(LIB_PATH. 'page.class.php');
require(APP_ROOT.'./libraries/page.class.php');
require(APP_ROOT.'./libraries/handset.class.php');
//require(LIB_PATH."Tera-WURFL/TeraWurfl.php");

uses("company","industry","product","area","productcategory");
$product = new Products();

$handset = new Handsets();


$page = new Pages();
$page->pagetpl_dir = $theme_name;


if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}


$info = $product->getProductById($id);

if(empty($info) || !$info){
	flash("không có dữ liệu thỏa mãn yêu cầu!", '', 0);
}

setvar("Content", $info['content']);
setvar("SortContent", substr($info['content'],0,100) . "<a hrf='#'>...(Xem thêm)</a>");
setvar("Image", "../upload/1234567/images/".$info['picture']);

$device_id = $handset->getHandsetId();



template("content");

?>