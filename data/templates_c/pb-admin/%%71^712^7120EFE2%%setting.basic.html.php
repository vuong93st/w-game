<?php /* Smarty version 2.6.18, created on 2010-12-21 16:03:24
         compiled from setting.basic.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'setting.basic.html', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_site_info']; ?>
</p>
</div>
<div id="rightTop">
	<h3><?php echo $this->_tpl_vars['_site_info']; ?>
</h3>
	<ul class="subnav">
		<li><a class="btn1" href="setting.php?do=basic"><span><?php echo $this->_tpl_vars['_basic_setting']; ?>
</span></a></li>
		<li><a href="setting.php?do=basic_contact"><?php echo $this->_tpl_vars['_contact_method']; ?>
</a></li>
		<li><a href="setting.php?do=basic_desc"><?php echo $this->_tpl_vars['_site_desc']; ?>
</a></li>
	</ul>
</div>
<div class="info">
  <form method="post">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"><label for="time_zone"> Site Name:</label></th>
        <td class="paddingT15 wordSpacing5"><input name="data[setting][site_name]" type="text" id="site_name" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SITE_NAME'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['site_name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['site_name'])); ?>
" class="infoTableInput" />
          <span class="gray">Site name, will appear in the navigation and site presentation</span>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"><label for="time_format_simple"> Website Title:</label></th>
        <td class="paddingT15 wordSpacing5"><input name="data[setting][site_title]" type="text" id="site_title" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SITE_TITLE'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['site_title']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['site_title'])); ?>
" class="infoTableInput" />
          <span class="gray">The title will appear in the title of the page</span>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"><label for="time_format_complete"> Site Subtitle:</label></th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput" name="data[setting][site_banner_word]" type="text" id="site_banner_word" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SITE_BANNER_WORD'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['site_banner_word']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['site_banner_word'])); ?>
"/>
          <span class="gray">The posters will be displayed on the website publicity</span>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"><label for="time_format_complete"> Logo Address:</label></th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput" name="data[setting][site_logo]" type="text" id="site_logo" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SITE_LOGO'])) ? $this->_run_mod_handler('default', true, $_tmp, "images/logo.gif") : smarty_modifier_default($_tmp, "images/logo.gif")); ?>
"/>
          <span class="gray">Logo of the address, if no HTTP: / /, was the local</span>
		</td>
      </tr>
      <tr>
        <th class="paddingT15"><label for="price_format"> Website URL：</label></th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput" name="data[setting][site_url]" type="text" id="site_url" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['SITE_URL'])) ? $this->_run_mod_handler('default', true, $_tmp, @URL) : smarty_modifier_default($_tmp, @URL)); ?>
" />
          <span class="gray">Web site URL, the link will be displayed in the bottom of the page, must be "/" at the end</span>
		</td>
      </tr>
	   <tr>
        <th class="paddingT15"><label for="price_format"> Site record information code:</label></th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput" name="data[setting][icp_number]" type="text" id="icp_number" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['ICP_NUMBER'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['icpnumber']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['icpnumber'])); ?>
" />
          <span class="gray">If the site has been filed, enter your information on ICP for the record, it will display at the bottom of the page, if not please leave blank</span>
                </td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20"><input class="formbtn" type="submit" name="savebasic" value="<?php echo $this->_tpl_vars['_submit']; ?>
" />
          <input class="formbtn" type="reset" name="reset" value="<?php echo $this->_tpl_vars['_reset']; ?>
" />
        </td>
      </tr>
    </table>
  </form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>