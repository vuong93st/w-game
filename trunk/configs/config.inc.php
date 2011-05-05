<?php

$dbhost = 'localhost';					// 
$dbuser = 'root';						// 
$dbpasswd = 'thinknet';					// 
$dbname = 'wgame';				// 
$pconnect = 0;							// 

/**
 * 
 */
$cookiepre = '3YA_';					// cookie 
$cookiedomain = ''; 					// cookie 
$cookiepath = '/';						// cookie

/**
 * 
 */
$tb_prefix = 'tb_';

/**
 * 
 */
$database = 'mysql';					// 
$dbcharset = 'utf8';					// MySQL 'gbk', 'big5', 'utf8', 'latin1'

/**
 * 
 */
$charset = 'utf-8';						// 'gbk', 'big5', 'utf-8'
$headercharset = 0;						// 

/**
 * 
 */
$admin_email = 'x82011@yahoo.com';
$administrator_id = '1';

/**
 * 
 */
$absolute_uri = 'http://localhost/wgame/';
$base_url = 'http://m.thinknet.vn/';

$gzipcompress = false; 			// use GZIP output buffering if possible (true|false)
$admin_runquery = false;			// 
$subdomain_support = 0;			// 
$topleveldomain_support = 0;		// 
$rewrite_able = 0;					// 
$rewrite_compatible = 0;			// 
$attachment_url = 'attachment/';
$attachment_dir = 'attachment';

/**
 * 
 */
$app_lang = 'en';
$cfg_checkip = 0;

/*


*/

//$core_config['cplist']	= array('kraze','thinknet','vinamod');
$core_config['cplist']	= array('kraze'=>'1103','vinamod'=>'1220','mblox'=>'1234');

$core_config['username']	='mgame';
$core_config['password']	='mgame';

$core_config['admin_username']	='huynhnt';
$core_config['admin_password']	='huynhnt';

$core_config['cp_request_by']	=1;
$core_config['cp_request_download']	=1;

$core_config['client_redirect']	='http://m.mgame.vn/cp/viewgames/19.html';

?>