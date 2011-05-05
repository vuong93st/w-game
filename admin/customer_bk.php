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
uses("Customer");
require(APP_ROOT.'./libraries/page.class.php');
require("session_cp.inc.php");
include(CACHE_PATH. "cache_typeoption.php");

$customer = new Customers();
$conditions = null;
$tpl_file = "customer";
$joins = array();

$page = new Pages();

setvar("Status", $_PB_CACHE['common_status']);

$feilds = "Id,msisdn,req_key,cp_game_id,cp_id,cp_game_url,user_name,create_on";
$result = $customer->findAll($feilds, '', $conditions, "id DESC ", $page->firstcount, $page->displaypg);

setvar("Items", $result);
setvar("ByPages", $page->getPagenav());
template($tpl_file);
?>