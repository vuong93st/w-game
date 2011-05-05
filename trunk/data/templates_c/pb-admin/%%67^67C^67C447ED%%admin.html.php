<?php /* Smarty version 2.6.18, created on 2011-01-01 17:16:03
         compiled from E:%5CAppServ%5Cwww%5Cb2b%5Cplugins%5Ccard%5Ctemplate%5Cadmin.html */ ?>
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
        <li><a class="btn1"><span><?php echo $this->_tpl_vars['title']; ?>
</span></a></li>
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
        <th class="paddingT15"> 默认宽度：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[width]" value="<?php echo $this->_tpl_vars['width']; ?>
" /></td>
      </tr>
	  <tr>
        <th class="paddingT15"> 默认高度：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[height]" value="<?php echo $this->_tpl_vars['height']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> flash模板：</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="pluginvar[flash_src]" value="<?php echo $this->_tpl_vars['flash_src']; ?>
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