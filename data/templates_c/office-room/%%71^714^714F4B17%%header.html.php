<?php /* Smarty version 2.6.18, created on 2011-05-04 00:40:40
         compiled from header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'header.html', 26, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['Charset']; ?>
">
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
 - <?php echo $this->_tpl_vars['_office_room']; ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
</title>
<link href="../css/common.css" rel="stylesheet" type="text/css">
<link href="images/style.css" rel="stylesheet" type="text/css">
<script src="../scripts/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script src="../scripts/general.js"></script>
</head>
<body>
<div id="content_bkg">
<div id="basePageFrame">
    <div class="header clearfix">
        <div class="header_nav">
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
index.php"><span><?php echo $this->_tpl_vars['_home_page']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
news/"><span><?php echo $this->_tpl_vars['_info']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
product/"><span><?php echo $this->_tpl_vars['_product_center']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
company/"><span><?php echo $this->_tpl_vars['_yellow_page']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
fair/"><span><?php echo $this->_tpl_vars['_fair']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
hr/"><span><?php echo $this->_tpl_vars['_hr']; ?>
</span></a>
          <a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
dict/"><span><?php echo $this->_tpl_vars['_dictionary']; ?>
</span></a>
        </div>
       <div class="login_info"><?php echo $this->_tpl_vars['_hello']; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['UserName'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_SESSION['MemberName']) : smarty_modifier_default($_tmp, @$_SESSION['MemberName'])); ?>

       <?php if ($this->_tpl_vars['menu']['pms'] && $this->_tpl_vars['newpm']): ?><a href="pms.php" title=""><img src="../images/message.gif" alt="<?php echo $this->_tpl_vars['newpm']; ?>
" /></a><?php endif; ?>
       </div>
    </div>
    <div class="header_txt">
       <div class="welcome_txt">
	   <span class="title" id="welcome-to"><?php echo $this->_tpl_vars['_welcome_to_office']; ?>
</span>
	   <form name="searchFrm" id="HeadSearchFrm" action="../offer/list.php" target="_blank" method="get">
	   <input type="hidden" name="do" value="search" />
	   <span class="search"><input name="q" type="text"  id="SearchKeyword" value="<?php echo $this->_tpl_vars['_input_keywords']; ?>
" onfocus="if(this.value=='<?php echo $this->_tpl_vars['_input_keywords']; ?>
'){this.value=''}" onblur="if(this.value==''){this.value='<?php echo $this->_tpl_vars['_input_keywords']; ?>
'}" /><input type="submit" value="<?php echo $this->_tpl_vars['_search']; ?>
" onclick="if($('#SearchKeyword').val()=='<?php echo $this->_tpl_vars['_input_keywords']; ?>
') {alert('<?php echo $this->_tpl_vars['_input_keywords']; ?>
');$('#SearchKeyword').focus();return false;}" /></span>
	   </form>
	   </div>
       <div class="welcome_txt_small"><span><?php echo $this->_tpl_vars['_service_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
</span></div>
   </div>
   <div id="main-nav">
	 <div class="nav-wrapper">
		<ul>
		  <li><a href="index.php" id="home-page"><span><?php echo $this->_tpl_vars['_office_homepage']; ?>
</span></a></li>
		  <li><a class="current_nav" href="offer.php" id="info-manage"><span><?php echo $this->_tpl_vars['_info_manage']; ?>
</span></a></li>
		  <?php if ($this->_tpl_vars['COMPANYINFO']['cache_spacename'] && $this->_tpl_vars['COMPANYINFO']['status'] == 1): ?><li><a href="<?php echo $this->_tpl_vars['COMPANYINFO']['space_url']; ?>
" target="_blank"><span><?php echo $this->_tpl_vars['_access']; ?>
<?php echo $this->_tpl_vars['_space_name']; ?>
</span></a></li><?php endif; ?>
		  <li><a href="../logging.php?action=logout"><span><?php echo $this->_tpl_vars['_login_out']; ?>
</span></a></li>
		</ul>
	</div>
  </div>