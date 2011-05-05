<?php /* Smarty version 2.6.18, created on 2010-12-21 15:49:03
         compiled from adminer.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fetch', 'adminer.edit.html', 2, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_fetch(array('file' => "../scripts/date.js"), $this);?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_administrator']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_administrator']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="adminer.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
		<li><a class="btn1"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="adminer.php?do=password">Password change</a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="adminer.php" id="EditFrm" name="edit_frm">
    <table class="infoTable">
	<?php if ($this->_tpl_vars['item']['member_id']): ?>
	  <input type="hidden" name="member_id" value="<?php echo $this->_tpl_vars['item']['member_id']; ?>
" />
	  <input type="hidden" name="data[member][id]" value="<?php echo $this->_tpl_vars['item']['member_id']; ?>
" />
      <tr>
        <th class="paddingT15"> 登陆<?php echo $this->_tpl_vars['_cp_username_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><?php echo $this->_tpl_vars['item']['username']; ?>
</td>
      </tr>
	<?php else: ?>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_cp_username_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[username]" value="" /><label class="field_notice">该用户必须已经存在</label></td>
      </tr>
	<?php endif; ?>
      <tr>
        <th class="paddingT15"> 姓名：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[adminfield][last_name]" value="<?php echo $this->_tpl_vars['item']['last_name']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> Email：</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[member][email]" value="<?php echo $this->_tpl_vars['item']['email']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> 过期时间：</th>
        <td class="paddingT15 wordSpacing5"><input id="date1" type="text" name="data[expired]" value="<?php echo $this->_tpl_vars['item']['expire_date']; ?>
" type="text"/><span class="btn_calendar" id="calendar-date1"></span><label class="field_notice">过期后，即不能登录后台</label></td>
      </tr>
      <tr>
        <th class="paddingT15"> 菜单显示：</th>
        <td class="paddingT15 wordSpacing5">
		<label for="all_privilege"><input type="radio" name="auth" id="all_privilege" onclick="$('#privileges').hide();" value="0">全部</label>
		<label for="limit_privilege"><input type="radio" name="auth" id="limit_privilege" value="1" onclick="$('#privileges').show();">指定权限</label><label class="field_notice">无论如何指定，超级管理员均有所有权限</label>
		</td>
      </tr>
		  <tbody id="privileges" style="display:none;">
		<?php $_from = $this->_tpl_vars['Privileges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
?>
      <tr>
        <th class="paddingT15"><label for="prt-<?php echo $this->_tpl_vars['key2']; ?>
"><input type="checkbox" onclick="jqCheckAll3(this.id,'chd-<?php echo $this->_tpl_vars['key2']; ?>
');" name="priv[]" id="prt-<?php echo $this->_tpl_vars['key2']; ?>
" value="<?php echo $this->_tpl_vars['key2']; ?>
" <?php if ($this->_tpl_vars['item2']['check'] == 1 || $this->_tpl_vars['item']['permissions'] == ''): ?>checked="checked"<?php endif; ?>><?php echo $this->_tpl_vars['item2']['text']; ?>
</label></th>
        <td class="paddingT15 wordSpacing5">
		<div id="chd-<?php echo $this->_tpl_vars['key2']; ?>
">
				<?php $_from = $this->_tpl_vars['item2']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['chd'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['chd']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
        $this->_foreach['chd']['iteration']++;
?>
					<label for="chd-<?php echo $this->_tpl_vars['key2']; ?>
-<?php echo $this->_tpl_vars['key1']; ?>
"><input type="checkbox" name="priv[]" id="chd-<?php echo $this->_tpl_vars['key2']; ?>
-<?php echo $this->_tpl_vars['key1']; ?>
" value="<?php echo $this->_tpl_vars['key1']; ?>
" <?php if ($this->_tpl_vars['item2']['default'] == $this->_tpl_vars['key1'] || $this->_tpl_vars['item1']['check'] == 1): ?>checked="checked"<?php endif; ?>><?php echo $this->_tpl_vars['item1']['text']; ?>
</label>
					<?php if (!($this->_foreach['chd']['iteration'] % 9)): ?>
					<br />
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
		</div>
		</td>
      </tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" />		</td>
      </tr>
    </table>
  </form>
</div>
<script>
function jqCheckAll3( id, pID )
{
   $( "#" + pID + " :checkbox").attr('checked', $('#' + id).is(':checked'));
}
jQuery(document).ready(function($) {
	<?php if ($this->_tpl_vars['item']['permissions']): ?>
	$('#limit_privilege').attr("checked", "checked");
	$('#privileges').show();
	<?php else: ?>
	$('#all_privilege').attr("checked", "checked");
	<?php endif; ?>
})
Calendar.setup({
	trigger    : "calendar-date1",
	animation  : false,
	inputField : "date1",
	onSelect   : function() { this.hide() }
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>