<?php /* Smarty version 2.6.18, created on 2010-12-21 16:03:18
         compiled from ad.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fetch', 'ad.edit.html', 2, false),array('function', 'html_radios', 'ad.edit.html', 79, false),array('modifier', 'default', 'ad.edit.html', 74, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_fetch(array('file' => "../scripts/date.js"), $this);?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_ads']; ?>
 &raquo; <?php echo $this->_tpl_vars['_ads']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_ads']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="ad.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="ad.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="ad.php" enctype="multipart/form-data" id="EditFrm" name="edit_frm">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
" />  
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_ads']; ?>
<?php echo $this->_tpl_vars['_title_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="ad[title]" value="<?php echo $this->_tpl_vars['item']['title']; ?>
" /><label class="field_notice">The show texts</label>        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_ads']; ?>
<?php echo $this->_tpl_vars['_description_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><textarea style="width:550px;height:100px;" name="ad[description]" id="dataTradeContent"><?php echo $this->_tpl_vars['item']['description']; ?>
</textarea></td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_adzone']; ?>
<?php echo $this->_tpl_vars['_naming_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<select name="ad[adzone_id]" id="ad_adzone_id">
		<?php $_from = $this->_tpl_vars['Adzones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sel_adzone'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sel_adzone']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['z']):
        $this->_foreach['sel_adzone']['iteration']++;
?>
		<option value="<?php echo $this->_tpl_vars['z']['id']; ?>
" <?php if ($this->_tpl_vars['z']['id'] == $this->_tpl_vars['item']['adzone_id'] || $this->_tpl_vars['z']['id'] == $_GET['adzone_id']): ?>selected<?php endif; ?>>
		<?php echo $this->_tpl_vars['z']['name']; ?>

		<?php endforeach; else: ?>
		<option value="0">Please full<?php echo $this->_tpl_vars['_adzone']; ?>

		<?php endif; unset($_from); ?>
		</select></td>
      </tr>
      <tr>
        <th class="paddingT15">Link Method：</th>
        <td class="paddingT15 wordSpacing5"><label for="Sourcetype1"><input type="radio" name="m_sourcetype" id="Sourcetype1" value="1"/>Upload here</label><label for="Sourcetype2"><input type="radio" name="m_sourcetype" id="Sourcetype2" value="2"/>REMOTE URL</label>
          </td>
      </tr>
      <tbody id="divSourceType2" style="display:none">
      <tr>
        <th class="paddingT15">Remote Url：</th>
        <td class="paddingT15 wordSpacing5"><input type="text" name="ad[source_url]" value="<?php echo $this->_tpl_vars['item']['source_url']; ?>
"></td>
      </tr>
      </tbody>
      <tbody id="divSourceType1" style="display:none">
      <tr>
        <th class="paddingT15">Upload：</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" type="file" name="attach" /></td>
      </tr>
      </tbody>
      <tr>
        <th class="paddingT15"> Width：</th>
        <td class="paddingT15 wordSpacing5">
		<input type="text" name="ad[width]" value="<?php echo $this->_tpl_vars['item']['width']; ?>
" style="width: 35px;" /><label class="field_notice">If the image or Flash, the system will automatically</label></td>
      </tr>
      <tr>
        <th class="paddingT15"> Height：</th>
        <td class="paddingT15 wordSpacing5">
		<input type="text" name="ad[height]"  value="<?php echo $this->_tpl_vars['item']['height']; ?>
" style="width: 35px;" /><label class="field_notice">If the image or Flash, the system will automatically</label></td>
      </tr>
      <tr>
        <th class="paddingT15">Target Url：</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="ad[target_url]" value="<?php echo $this->_tpl_vars['item']['target_url']; ?>
" />        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_display_order']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
		<input type="text" name="ad[priority]" id="AdPriority" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['priority'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width: 35px;" /></td>
      </tr>
      <tr>
        <th class="paddingT15">If enable：</th>
        <td class="paddingT15 wordSpacing5">          
		<?php echo smarty_function_html_radios(array('name' => "ad[state]",'options' => $this->_tpl_vars['AdsStatus'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['state'])) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')),'separator' => ' '), $this);?>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_if_valid']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<?php echo smarty_function_html_radios(array('name' => "ad[status]",'options' => $this->_tpl_vars['AdsStatus'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')),'separator' => ' '), $this);?>
</td>
      </tr>
      <tr>
        <th class="paddingT15">Valid until：</th>
        <td class="paddingT15 wordSpacing5"> 
		<input name="data[end_date]" value="<?php echo $this->_tpl_vars['item']['end_date']; ?>
" type="text" id="date1" /><span class="btn_calendar" id="calendar-date1"></span><label class="field_notice">Empty that never expires</label></td>
      </tr>
      <tr>
        <th class="paddingT15">Show pictures after the expiration of:</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="ad[picture_replace]" value="<?php if ($this->_tpl_vars['item']['id']): ?><?php echo $this->_tpl_vars['item']['picture_replace']; ?>
<?php else: ?>images/nopicture_small.gif<?php echo $this->_tpl_vars['item']['picture_replace']; ?>
<?php endif; ?>" /><?php if ($this->_tpl_vars['item']['picture_replace']): ?><img src="<?php echo $this->_tpl_vars['SiteUrl']; ?>
<?php echo $this->_tpl_vars['item']['picture_replace']; ?>
" /><?php endif; ?><label class="field_notice">Due to air that does not display any media after</label></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save_and_pub']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script>
    Calendar.setup({
        trigger    : "calendar-date1",
		animation  : false,
        inputField : "date1",
		onSelect   : function() { this.hide() }
    });
</script>
<script>
var ad_url = "<?php echo $this->_tpl_vars['item']['source_url']; ?>
";
jQuery(document).ready(function($) {
	/* Using Name for selector */
	$("#Sourcetype1").click(function() 
	  {  
		// hides matched elements if shown, shows if hidden 
		$("#divSourceType1").show(); 
		$("#divSourceType2").hide(); 
	});
	$("#Sourcetype2").click(function() 
	  {  
		// hides matched elements if shown, shows if hidden 
		$("#divSourceType2").show(); 
		$("#divSourceType1").hide(); 
	});
	if(ad_url!=""){
		$("input[name='m_sourcetype']").val("2");
	}
})
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>