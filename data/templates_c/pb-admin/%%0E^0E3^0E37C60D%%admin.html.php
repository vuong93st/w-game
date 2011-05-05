<?php /* Smarty version 2.6.18, created on 2010-12-21 15:37:08
         compiled from E:%5CAppServ%5Cwww%5Cb2b%5Cplugins%5Cvideo%5Ctemplate%5Cadmin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'E:\\AppServ\\www\\b2b\\plugins\\video\\template\\admin.html', 33, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
<!--
body {background: #fcfdff}
-->
</style>
<link href="../images/jquery/colorpicker.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../scripts/jquery/colorpicker.js"></script>
<script>
jQuery(document).ready(function($) {
	$.fn.colorPicker.defaultColors = ['00FFFF', '000000', '999999', 'FF0000', 'FFFF00', '0000FF', 'FFFFFF', '00FF7F', '00FF00'];
	$('#color1').colorPicker();
})
</script>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 插件 &raquo; 管理</p>
</div>
<div id="rightTop"> 
    <h3>插件</h3> 
    <ul class="subnav">
		<li><a href="plugin.php">管理</a></li>
        <li><a class="btn4"><?php echo $this->_tpl_vars['title']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form action="plugin.php" method="post" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
" />
  <input type="hidden" name="entry" value="<?php echo $this->_tpl_vars['name']; ?>
" />
  <input type="hidden" name="formhash" value="<?php echo $this->_tpl_vars['formhash']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> Flash地址：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[movie]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['movie'])) ? $this->_run_mod_handler('default', true, $_tmp, 'plugins/video/player.swf') : smarty_modifier_default($_tmp, 'plugins/video/player.swf')); ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> 宽度：</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="pluginvar[width]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['width'])) ? $this->_run_mod_handler('default', true, $_tmp, '473') : smarty_modifier_default($_tmp, '473')); ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> 高度：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[height]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['height'])) ? $this->_run_mod_handler('default', true, $_tmp, '170') : smarty_modifier_default($_tmp, '170')); ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> 背景色：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" id="color1" name="pluginvar[bgcolor]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['bgcolor'])) ? $this->_run_mod_handler('default', true, $_tmp, '#ff0000') : smarty_modifier_default($_tmp, '#ff0000')); ?>
" /></td>
      </tr>      
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" id="Save" value="保存" />		</td>
      </tr>
    </table>
  </form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>