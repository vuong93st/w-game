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

uses("transection");
$page = new Pages();
$page->pagetpl_dir = $theme_name;


$transection = new Transections();

$conditions = array();


//Default page load
$conditions[]= "Transection.msisdn='" . $_SESSION['msisdn'] . "'";
$joins = array();
$joins[] = "LEFT JOIN {$tb_prefix}products p ON p.id=Transection.product_id";

$amount = $transection->findCount(null, $conditions,"id");
$page->displaypg = 10;
$page->setPagenav($amount);
$fields = "Transection.*,p.name,p.picture";

$result = $transection->findAll($fields, $joins, $conditions, "Transection.id", $page->firstcount, $page->displaypg);

$result = $transection->formatResultWap($result);
setvar("Items", $result);

setvar("ByPages", $page->getPagenav());

template("transection");

?>