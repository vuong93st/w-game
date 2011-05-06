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

uses("company","industry","product","area","productcategory");
$product = new Products();

$page = new Pages();
$page->pagetpl_dir = $theme_name;


if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}


$info = $product->getProductById($id);

if(empty($info) || !$info){
	flash("không có dữ liệu thỏa mãn yêu cầu!", '', 0);
}
//print_r($info);
setvar("item", $info);

template("content");

?>