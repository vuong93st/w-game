<?php /* Smarty version 2.6.18, created on 2010-12-21 16:20:15
         compiled from setting.auth.secure.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'setting.auth.secure.html', 21, false),array('modifier', 'default', 'setting.auth.secure.html', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; Security Verification</p>
</div>
<div id="rightTop"> 
    <h3>Security Verification</h3> 
    <ul class="subnav">
        <li><a href="setting.php?do=secure" class="btn1"><span>Security</span></a></li>
		<li><a href="setting.php?do=auth">Code</a></li>
    </ul>
</div>
<div class="info"> 
    <form method="post" action="setting.php" name="edit_frm"> 
        <table class="infoTable"> 
         	<tr> 
                <th class="paddingT15">Security Key:</th> 
              	<td class="paddingT15 wordSpacing5"><input name="data[setting][auth_key]" value="<?php echo $this->_tpl_vars['item']['AUTH_KEY']; ?>
" /><label class="field_notice">Used to identify the site as a unique string</label></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Published supply and demand allows visitors:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][vis_post]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['VIS_POST'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Published supply visitors review:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][vis_post_check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['VIS_POST_CHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Open Supply information:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][sell_logincheck]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['SELL_LOGINCHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Open Buying information:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][buy_logincheck]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['BUY_LOGINCHECK'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
         	<tr> 
                <th class="paddingT15">Enable the local session.save_path：</th> 
              	<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "data[setting][session_savepath]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['SESSION_SAVEPATH'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
<label class="field_notice">The default is system-defined</label></td> 
          	</tr> 
            <tr> 
            <th></th> 
            <td class="ptb20"> 
                <input class="formbtn" type="submit" name="saveauth" value="<?php echo $this->_tpl_vars['_submit']; ?>
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