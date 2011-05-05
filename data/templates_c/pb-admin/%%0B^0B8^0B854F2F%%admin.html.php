<?php /* Smarty version 2.6.18, created on 2011-01-01 17:16:10
         compiled from E:%5CAppServ%5Cwww%5Cb2b%5Cplugins%5Cgooglemap%5Ctemplate%5Cadmin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'E:\\AppServ\\www\\b2b\\plugins\\googlemap\\template\\admin.html', 26, false),array('function', 'html_options', 'E:\\AppServ\\www\\b2b\\plugins\\googlemap\\template\\admin.html', 33, false),)), $this); ?>
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
        <th class="paddingT15"> 地图密钥：</th>
        <td class="paddingT15 wordSpacing5">          
		<textarea style="width:500px;height:50px;" name="pluginvar[key]"><?php echo ((is_array($_tmp=@$this->_tpl_vars['key'])) ? $this->_run_mod_handler('default', true, $_tmp, 'ABQIAAAAnfs7bKE82qgb3Zc2YyS-oBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSySz_REpPq-4WZA27OwgbtyR3VcA') : smarty_modifier_default($_tmp, 'ABQIAAAAnfs7bKE82qgb3Zc2YyS-oBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSySz_REpPq-4WZA27OwgbtyR3VcA')); ?>
</textarea><span class="gray">（默认为本地服务器，可以从<a href="http://code.google.com/intl/zh-CN/apis/maps/signup.html" target="_blank">注册使用 Google 地图 API</a>获得）</span>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"> 地图放大级别：</th>
        <td class="paddingT15 wordSpacing5">          
		<select name="pluginvar[zoomlevel]">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['zoomlevels'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['zoomlevel'])) ? $this->_run_mod_handler('default', true, $_tmp, 15) : smarty_modifier_default($_tmp, 15))), $this);?>

		</select>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"> 默认宽度：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[width]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['width'])) ? $this->_run_mod_handler('default', true, $_tmp, 500) : smarty_modifier_default($_tmp, 500)); ?>
" />px</td>
      </tr>
      <tr>
        <th class="paddingT15"> 默认高度：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[height]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['height'])) ? $this->_run_mod_handler('default', true, $_tmp, 500) : smarty_modifier_default($_tmp, 500)); ?>
" />px</td>
      </tr>
      <tr>
        <th class="paddingT15"> 默认纬度：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[lat]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lat'])) ? $this->_run_mod_handler('default', true, $_tmp, '29.264911735066963') : smarty_modifier_default($_tmp, '29.264911735066963')); ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> 默认经度：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="pluginvar[lng]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lng'])) ? $this->_run_mod_handler('default', true, $_tmp, '120.24544715881347') : smarty_modifier_default($_tmp, '120.24544715881347')); ?>
" /></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" id="Save" value="保存配置" />&nbsp;&nbsp;[<a href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
plugin.php?name=<?php echo $this->_tpl_vars['name']; ?>
" target="_blank">预览插件</a>]</td>
      </tr>
    </table>
  </form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>