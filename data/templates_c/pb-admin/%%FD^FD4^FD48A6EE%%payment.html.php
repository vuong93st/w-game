<?php /* Smarty version 2.6.18, created on 2010-12-21 15:36:37
         compiled from payment.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_setting_global']; ?>
 &raquo; <?php echo $this->_tpl_vars['_payment_method']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_payment_method']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="payment.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<?php if ($this->_tpl_vars['item']['available']): ?>
        <li><a href="payment.php?do=edit&entry=<?php echo $this->_tpl_vars['item']['name']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="Set<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl">Tip: Follow the name and choose to install or display the title says<?php echo $this->_tpl_vars['_uninstall']; ?>
<?php echo $this->_tpl_vars['_action']; ?>
。</div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
		  <th>Schematic diagram</th>
		  <th>Show title</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2" title="<?php echo $this->_tpl_vars['item']['description']; ?>
">
		  <td class="firstCell"><input type="checkbox" <?php if (! $this->_tpl_vars['item']['id']): ?>disabled="disabled"<?php endif; ?> name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
		  <td><img src="<?php echo $this->_tpl_vars['SiteUrl']; ?>
api/payments/<?php echo $this->_tpl_vars['item']['name']; ?>
/logo.gif" alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" height="35" /></td>
		  <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <?php if ($this->_tpl_vars['item']['available']): ?>
            <li><a class="btn_edit" href="payment.php?do=edit&entry=<?php echo $this->_tpl_vars['item']['name']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
             <li><a class="btn_uninstall" href="payment.php?do=uninstall&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_uninstall']; ?>
"><?php echo $this->_tpl_vars['_uninstall']; ?>
</a></li>
             <?php else: ?>
            <li><a class="btn_install" href="payment.php?entry=<?php echo $this->_tpl_vars['item']['name']; ?>
&do=install<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_install']; ?>
"><?php echo $this->_tpl_vars['_install']; ?>
</a></li>
            <?php endif; ?>
          </ul>  
		</td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="5"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
    </div>
    <div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
    <div class="clear"/>
    </div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>