<?php /* Smarty version 2.6.18, created on 2011-05-17 15:50:09
         compiled from header.html */ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><title>Thinknet - Mobile content</title>

<meta http-equiv="Cache-Control" content="max-age=0">
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/wap-mobile.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/jquery-1.3.2.min.js"></script>


<style>a.poc8{   background: #ccc;    padding: 4px;    color: #000;    margin-top: 3px;   text-decoration: none;   font-weight: bold;    display: block;   padding: 3px;} a.poc8:hover{   background: #ccf;}</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<div class="small">
<div style="padding: 4px 4px 4px 5px; height: 10px;" class="hUp">
<a id="top" href="index.php"><img class="noborder" src="images/logo.gif" title="" alt="" height="10" width="68"></a><span style="font-size: 10px; color: rgb(234, 234, 234); margin-left: 9px; font-weight: bold;"><?php echo $this->_tpl_vars['msisdn']; ?>
</div><div style="padding: 4px 3px 3px; line-height: 9px;" class="hLo"><img style="vertical-align: middle; margin-right: 4px;" class="img" src="Free%20Nokia%20N72%20Games%20-%205-1%20_%20Zedge_files/oldstyle-v2.gif" alt="" height="12" width="7"><?php echo $this->_tpl_vars['Device']; ?>
 (<a href="#">Chọn</a>)</div>
<div>
<form style="padding: 0px 1px 3px 3px; background-color: rgb(238, 238, 238);" action="./" method="get"><span style="font-size: 11px; font-weight: bold;">Tìm kiếm <span style="font-weight: normal;">Game yêu thích</span></span><br>
<input name="p" value="pg-search" type="hidden">
<input name="page" value="<?php echo $this->_tpl_vars['Page']; ?>
" type="hidden">
<input value="" name="search" size="10" style="font-size: x-small; width: 70px;" type="text"> 

<select name="category" id="category" style="font-size: x-small; width: 80px;">
	<option value="0">[=Tất cả=]</option>
	<?php echo $this->_tpl_vars['ProductcategoryOptions']; ?>

</select>
				

<input value="Chọn" class="btn" style="border: 1px solid rgb(187, 187, 187); padding: 2px; font-size: 10px; font-weight: bold; width: 36px;" type="submit"></form>
</div>
