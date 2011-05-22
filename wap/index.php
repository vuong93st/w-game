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
$page = new Pages();
$page->pagetpl_dir = $theme_name;


$product = new Products();

$productcategories = new Productcategories();

setvar("ProductcategoryOptions", $productcategories->getTypeOptions($_GET['category']));

$conditions = array();


//Default page load
$conditions[]= "ifnew=1";

if (isset($_GET['page']) && $_GET['page'] == 'new') {	
	setvar("Page", 'new');
	$conditions = NULL;
	$conditions[]= "ifnew=1";
	
}elseif(isset($_GET['page']) && $_GET['page'] == 'recommend'){
	setvar("Page", 'recommend');
	$conditions = NULL;
	$conditions[]= "ifrecommend=1";
	
}elseif(isset($_GET['page']) && $_GET['page'] == 'promotion'){
	setvar("Page", 'promotion');
	$conditions = NULL;
	$conditions[]= "ifpromotion=1";
}elseif(isset($_GET['page']) && $_GET['page'] == 'free'){
	setvar("Page", 'free');
	$conditions = NULL;
	$conditions[]= "iffree=1";
}elseif(isset($_GET['page']) && $_GET['page'] == 'all'){
	setvar("Page", 'all');
	$conditions = NULL;
}


if(isset($_GET['category'])){
	if($_GET['category'] <> 0){
		setvar("parent_id", $_GET['category']);
		$conditions[] = "Product.category_id=" . $_GET['category'];
	}
}

$conditions[] = "Product.status=1 ";

if(isset($_GET['p'])){
	if($_GET['p'] == 'pg-search' && trim($_GET['search']) !='' ){
		$conditions[] = "Product.name like '%" . trim($_GET['search']) . "%'";
	}
}

$joins = null;

if($device_id <> ''){
	$joins[] = 'LEFT JOIN '.$tb_prefix.'productdevices d ON d.product_id=Product.id';
	//$conditions[] = "d.device_id='" . $device_id . "' ";
}


$amount = $product->findCount(null, $conditions,"Product.id");
$page->displaypg = 5;
$page->setPagenav($amount);

$result = $product->findAll("DISTINCT Product.cache_companyname AS companyname,Product.*", $joins, $conditions, "Product.ifcommend desc,Product.id desc", $page->firstcount, $page->displaypg);

$result = $product->formatResultWap($result);

setvar("Items", $result);

setvar("ByPages", $page->getPagenav());

template("index");

?>