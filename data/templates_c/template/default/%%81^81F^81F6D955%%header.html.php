<?php /* Smarty version 2.6.18, created on 2011-05-06 12:36:46
         compiled from default/header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default/header.html', 59, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['Charset']; ?>
" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
 - <?php echo $this->_tpl_vars['site_title']; ?>
</title>
<base href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
">
<meta name ="keywords" content="<?php echo $this->_tpl_vars['metakeywords']; ?>
">
<meta name ="description" content="<?php echo $this->_tpl_vars['metadescription']; ?>
"> 
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_img_path']; ?>
base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_img_path']; ?>
general.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['theme_style_path']; ?>
style.css" />
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="shorcut icon" type="image/x-ico" href="favicon.ico" />
<link rel="bookmark" type="image/x-ico" href="favicon.ico" />
<script src="scripts/jquery.js"></script>
<script src="scripts/general.js" charset="<?php echo $this->_tpl_vars['Charset']; ?>
"></script>
<script language="javascript">
<!--
$(document).ready(function() {
	if($("#mn_<?php echo $this->_tpl_vars['nav_id']; ?>
").length>0){
		$("#mn_<?php echo $this->_tpl_vars['nav_id']; ?>
").addClass("current_nav");
	}
	$("#SearchKeyword").focus(function(){
		if($("#SearchKeyword").val()=='<?php echo $this->_tpl_vars['_keywords_sample']; ?>
'){
			$("#SearchKeyword").val("").css('color', '#000000')
			};
		}).blur(function(){
		if($("#SearchKeyword").val()==''){
			$("#SearchKeyword").val("<?php echo $this->_tpl_vars['_keywords_sample']; ?>
").css('color', '#ccc')
			};
	});
	$("#BtnSearch").click(function(){
		if($('#SearchKeyword').val()=='<?php echo $this->_tpl_vars['_keywords_sample']; ?>
') {alert('<?php echo $this->_tpl_vars['_input_keywords']; ?>
');$('#SearchKeyword').focus();return false;}
	})
})
//-->
</script>
<body id="bd_<?php echo @CURSCRIPT; ?>
">
<div id="header">
    <div class="headtop">
    </div>
    <div class="logo_search clearfix">
        <h1 id="logo"><a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
"><img src="<?php echo $this->_tpl_vars['site_logo']; ?>
" alt="<?php echo $this->_tpl_vars['site_banner_word']; ?>
" /></a></h1>
        <div class="search_bar">
            <div class="search_nav">
                <ul>
                    <li id="topMenuProduct"><a href="product/"><span><?php echo $this->_tpl_vars['_search_product']; ?>
</span></a></li>
                    <li id="topMenuCompany"><a href="company/"><span><?php echo $this->_tpl_vars['_search_company']; ?>
</span></a></li>
                    <li id="topMenuOffer"><a href="offer/"><span><?php echo $this->_tpl_vars['_search_offer']; ?>
</span></a></li>
                    <li id="topMenuNews"><a href="news/"><span><?php echo $this->_tpl_vars['_search_news']; ?>
</span></a></li>
                </ul>
                <a href="advsearch.php" class="fl lhighs"><?php echo $this->_tpl_vars['_adv_search']; ?>
</a>
            </div>
            <form name="search_frm" id="SearchFrm" action="offer/list.php" method="get">
            <input type="hidden" name="do" value="search" />
             <div class="search_panel">
                 <span class="search_input_box">
                    <input type="text" name="q" id="SearchKeyword" value="<?php echo ((is_array($_tmp=@$_GET['q'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['_keywords_sample']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['_keywords_sample'])); ?>
" />
                  </span>
                  <span class="search_btn_box">
                  <button type="submit"id="BtnSearch" value="<?php echo $this->_tpl_vars['_search']; ?>
"><?php echo $this->_tpl_vars['_search']; ?>
</button>
                  </span>
                  <span class="history break underline"><strong><?php echo $this->_tpl_vars['_latest_search']; ?>
</strong><?php echo $this->_tpl_vars['SearchHistory']; ?>
</span> 
             </div>

            </form>
        </div>
    </div>
</div>
<div class="header_nav">    
    <div id="nav_inner">
        <ul>
        </ul>
	</div>
</div>