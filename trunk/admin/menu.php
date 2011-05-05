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
$menus = array(
    'dashboard' => array(
        'text'      => L("homepage", "tpl"),
        'subtext'   => L("common_action", "tpl"),
        'default'   => 'welcome',
        'children'  => array(
            'welcome'   => array(
                'text'  => L("welcome_page", "tpl"),
                'url'   => 'home.php',
            ),
            'basic_setting'  => array(
                'parent'=> 'setting',
                'text'  => L("settings", "tpl"),
                'url'   => 'setting.php?do=basic',
            ),
            'member'  => array(
                'parent'=> 'members',
                'text'  => L("member_manage", "tpl"),
                'url'   => 'member.php',
            ),            
        ),
    ),    
	'infotrades' => array(
        'text'      => L("Nội dung", "tpl"),
        'subtext'	=> L("com_info_manage", "tpl"),
        'default'   => 'trade',
        'children'  => array(
            'trade' => array(
                'text'  => L("customer", "tpl"),
                'url'   => 'customer.php',
            ),
		 'welcome'   => array(
                'text'  => L("download_page", "tpl"),
                'url'   => 'download.php',
            ),
		 'request'   => array(
                'text'  => L("request_page", "tpl"),
                'url'   => 'request.php',
            ),

        ),
    ),
	'members'     => array(
        'text'      => L("member_center", "tpl"),
        'subtext'	=> L("member_manage_center", "tpl"),
        'default'   => 'member',
        'children'  => array(
            'member' => array(
                'text'  => L("member_manage", "tpl"),
                'url'   => 'member.php',
            ),
			'membergroup'  => array(
                'text'  => L("membergroup", "tpl"),
                'url'   => 'membergroup.php?type=define',
            ),
			 'adminer' => array(
                'text'  => L("adminer", "tpl"),
                'url'   => 'adminer.php',
            ),
			 'adminer_passwd' => array(
                'text'  => L("change_pass", "tpl"),
                'url'   => 'adminer.php?do=password',
            ),
        ),		
    ),
	
	'infocenter' => array(
        'text'      => L("Nội dung", "tpl"),
        'subtext'	=> L("Quản lý nội dung", "tpl"),
        'default'   => 'trade',
        'children'  => array(
            'trade' => array(
                'text'  => L("offer", "tpl"),
                'url'   => 'offer.php',
            ),
            'product' => array(
                'text'  => L("Danh sách games", "tpl"),
                'url'   => 'product.php',
            ),
            'company' => array(
                'text'  => L("yellow_page", "tpl"),
                'url'   => 'company.php',
            ),
            'market' => array(
                'text'  => L("pro_market", "tpl"),
                'url'   => 'market.php',
            ),
            'job' => array(
                'text'  => L("job", "tpl"),
                'url'   => 'job.php',
            ),
            'fair' => array(
                'text'  => L("fair", "tpl"),
                'url'   => 'fair.php',
            ),
            'news' => array(
                'text'  => L("industry_news", "tpl"),
                'url'   => 'news.php',
            ),
            'standard' => array(
                'text'  => L('cp_standard', 'tpl'),
                'url'   => 'standard.php',
            ),
            'tag' => array(
                'text'  => L("tag_center", "tpl"),
                'url'   => 'tag.php',
            ),
            'keyword' => array(
                'text'  => L("keyword_center", "tpl"),
                'url'   => 'keyword.php',
            ),
            'companynews' => array(
                'text'  => L("companynews", "tpl"),
                'url'   => 'companynews.php',
            ),
            'dict' => array(
                'text'  => L("industry_dict", "tpl"),
                'url'   => 'dict.php',
            ),
                                    
        ),
    ),
);
?>