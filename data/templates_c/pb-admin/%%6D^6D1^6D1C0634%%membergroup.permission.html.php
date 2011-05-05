<?php /* Smarty version 2.6.18, created on 2010-12-21 15:47:03
         compiled from membergroup.permission.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_membergroup']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_membergroup']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="membergroup.php">All <?php echo $this->_tpl_vars['_membergroup']; ?>
</a></li>
        <li><a class="btn1" href="membergroup.php?do=permission"><span>Permissions</span></a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl">
             <div class="left">Member groups Member-component system, custom membership groups, and special membership group.</div>
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th>&nbsp;</th>
		  <th><label for="basic_chkall"><input type="checkbox" name="basic_chkall" id="basic_chkall" onclick="checkAll('prefix', this.form, 'basic', 'basic_chkall')" />&nbsp;Basic <?php echo $this->_tpl_vars['_trade_management']; ?>
</label></th>
		  <th><label for="offer_chkall"><input type="checkbox" name="offer_chkall" id="offer_chkall" onclick="checkAll('prefix', this.form, 'offer', 'offer_chkall')" />&nbsp;Offer <?php echo $this->_tpl_vars['_trade_management']; ?>
</label></th>
		  <th><label for="product_chkall"><input type="checkbox" name="product_chkall" id="product_chkall" onclick="checkAll('prefix', this.form, 'product', 'product_chkall')" />&nbsp;Product <?php echo $this->_tpl_vars['_management']; ?>
</label></th>
		  <th><label for="company_chkall"><input type="checkbox" name="company_chkall" id="company_chkall" onclick="checkAll('prefix', this.form, 'company', 'company_chkall')" />&nbsp;Company <?php echo $this->_tpl_vars['_trade_management']; ?>
</label></th>
		  <th><label for="pms_chkall"><input type="checkbox" name="pms_chkall" id="pms_chkall" onclick="checkAll('prefix', this.form, 'pms', 'pms_chkall')" />&nbsp;Business information</label></th>
		  <th>Legend</th>
		</tr>
    </thead>
    <tfoot>
		<tr>
		  <th>&nbsp;</th>
		  <th>Basic <?php echo $this->_tpl_vars['_trade_management']; ?>
</th>
		  <th>Offer <?php echo $this->_tpl_vars['_trade_management']; ?>
</th>
		  <th>Product <?php echo $this->_tpl_vars['_management']; ?>
</th>
		  <th>Company <?php echo $this->_tpl_vars['_trade_management']; ?>
</th>
		  <th>Business information</th>
		  <th>Legend</th>
		</tr>
    </tfoot>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['membergroup'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['membergroup']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['membergroup']['iteration']++;
?>
		<tr class="tatr2">
		  <th style="text-align:left; padding-left:60px;"><label for="group<?php echo $this->_tpl_vars['item']['id']; ?>
chkall"><input type="checkbox" name="group_<?php echo $this->_tpl_vars['item']['id']; ?>
_chkall" id="group<?php echo $this->_tpl_vars['item']['id']; ?>
chkall" onclick="checkAll('value', this.form, <?php echo $this->_tpl_vars['item']['id']; ?>
, 'group_<?php echo $this->_tpl_vars['item']['id']; ?>
_chkall')" />&nbsp;<?php echo $this->_tpl_vars['item']['name']; ?>
</label></th>
		  <td><input type="checkbox" name="basic[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo $this->_tpl_vars['item']['id']; ?>
" id="groupid_<?php echo $this->_tpl_vars['item']['id']; ?>
_0" <?php if ($this->_tpl_vars['item']['exemptval'][0] == 1): ?>checked<?php endif; ?> /></td>
		  <td><input type="checkbox" name="offer[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo $this->_tpl_vars['item']['id']; ?>
" id="groupid_<?php echo $this->_tpl_vars['item']['id']; ?>
_3" <?php if ($this->_tpl_vars['item']['exemptval'][1] == 1): ?>checked<?php endif; ?> /></td>
		  <td><input type="checkbox" name="product[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo $this->_tpl_vars['item']['id']; ?>
" id="groupid_<?php echo $this->_tpl_vars['item']['id']; ?>
_1" <?php if ($this->_tpl_vars['item']['exemptval'][2] == 1): ?>checked<?php endif; ?> /></td>
		  <td><input type="checkbox" name="company[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo $this->_tpl_vars['item']['id']; ?>
" id="groupid_<?php echo $this->_tpl_vars['item']['id']; ?>
_2" <?php if ($this->_tpl_vars['item']['exemptval'][3] == 1): ?>checked<?php endif; ?> /></td>
		  <td><input type="checkbox" name="pms[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo $this->_tpl_vars['item']['id']; ?>
" id="groupid_<?php echo $this->_tpl_vars['item']['id']; ?>
_4" <?php if ($this->_tpl_vars['item']['exemptval'][4] == 1): ?>checked<?php endif; ?> /></td>
		  <td><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="6"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
		<input type="submit" name="save_permission" value="<?php echo $this->_tpl_vars['_save']; ?>
" class="formbtn batchButton"/>
    </div>
    <div class="pageLinks"/>
    <div class="clear"/>
    </div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>