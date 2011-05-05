<?php
/**

 * 
 * @version $Revision$
 */

define('CURSCRIPT', 'index');
require("../libraries/common.inc.php");
require("../share.inc.php");
require("common.inc.php");

$result = $help->findAll("id,name", null, '', "id DESC");
echo 'kít';
echo($result);

?>