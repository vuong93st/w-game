<?php /* Smarty version 2.6.18, created on 2011-01-01 17:15:31
         compiled from type.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'type.edit.html', 32, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_extension']; ?>
 &raquo; <?php echo $this->_tpl_vars['_options']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_options']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="type.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="type.php?do=edit"><span><?php echo $this->_tpl_vars['_edit']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="type.php" id="EditFrm" name="edit_frm">
  	<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
	<input type="hidden" name="do" value="typeoption" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_title_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[typeoption][option_label]" value="<?php echo $this->_tpl_vars['item']['option_label']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> Parameter values:</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[typeoption][option_value]" value="<?php echo $this->_tpl_vars['item']['option_value']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15">Their type:</th>
        <td class="paddingT15 wordSpacing5">
		<select name="data[typeoption][typemodel_id]">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['TypeModels'],'selected' => $this->_tpl_vars['item']['typemodel_id']), $this);?>

		</select>
		</td>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>