<?php /* Smarty version 2.6.18, created on 2011-05-03 23:58:16
         compiled from membergroup.html */ ?>
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
		<li><a class="btn1" href="membergroup.php"><span>T&#7845;t c&#7843;</span></a></li>
        <li><a href="membergroup.php?type=system">h&#7879; th&#7889;ng</a> </li>
        <li><a href="membergroup.php?type=define">&#273;&#7883;nh ngh&#297;a</a>  </li>
        <li><a href="membergroup.php?type=special">&#273;&#7863;c bi&#7879;t</a> </li>
        <li><a href="membergroup.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
        <li><a href="membergroup.php?do=permission">Quy&#7873;n truy c&#7853;p </a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl">
             <div class="left"></div>
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'gid[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll"><?php echo $this->_tpl_vars['_naming']; ?>
</label></th>
		  <th>M&#7863;c &#273;&#7883;nh </th>
		  <?php if ($this->_tpl_vars['MembergroupType'] == 'system'): ?><th>&#272;i&#7875;m</th>
		  <?php endif; ?>
		  <th>H&igrave;nh &#273;&#7841;i di&#7879;n </th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['membergroup'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['membergroup']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['membergroup']['iteration']++;
?>
		<tr class="tatr2">
		  <td class="firstCell">
          <input type="checkbox" name="gid[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
">
          <input type="hidden" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
">
          </td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><input type="text" name="name[]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" id="dataMembergroupName<?php echo $this->_tpl_vars['item']['id']; ?>
" /></label></td>
		  <td><?php if ($this->_tpl_vars['item']['is_default'] == 1): ?><img src="images/right.gif" /><?php endif; ?></td>
		  <?php if ($this->_tpl_vars['MembergroupType'] == 'system'): ?><td><input type="text" name="point_min[]" size="5" value="<?php echo $this->_tpl_vars['item']['point_min']; ?>
" /> ~ <input type="text" name="point_max[]" size="5" value="<?php echo $this->_tpl_vars['item']['point_max']; ?>
" disabled="disabled" /></td><?php endif; ?>
		  <td><input type="text" name="picture[]" value="<?php echo $this->_tpl_vars['item']['avatar']; ?>
" class="infoTableInput" />&nbsp;<img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td>
		  <td class="handler">
              <ul id="handler_icon">
                <li><a class="btn_delete" href="membergroup.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
                <li><a class="btn_edit" href="membergroup.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
" ><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
              </ul>
		 </td>
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
		<input type="submit" name="save_data" value="<?php echo $this->_tpl_vars['_save']; ?>
" class="formbtn batchButton"/>
		<input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" class="formbtn batchButton"/>
		<input type="submit" name="updateDefault" value="Default" class="formbtn batchButton"/>
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