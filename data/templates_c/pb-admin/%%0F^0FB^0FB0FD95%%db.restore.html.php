<?php /* Smarty version 2.6.18, created on 2010-12-21 16:48:48
         compiled from db.restore.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'get_custom_size', 'db.restore.html', 35, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tool']; ?>
 &raquo; <?php echo $this->_tpl_vars['_database']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_database']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="db.php"><?php echo $this->_tpl_vars['_db_backup']; ?>
</a></li>
        <li><a class="btn1" href="db.php?do=restore"><span><?php echo $this->_tpl_vars['_db_restore']; ?>
</span></a></li>
        <li><a href="db.php?do=query"><?php echo $this->_tpl_vars['_db_upgrade']; ?>
</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontl">Please upload the file to the directory<strong>../data/backup_<?php echo $this->_tpl_vars['backup_dir']; ?>
</strong>Be restored.</div> 
    <div class="fontr"></div> 
</div> 
<div id="dataListDiv" class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll">File Name</label></th>
		  <th><span>Backup time</span></th>
		  <th>File Size</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2" title="<?php echo $this->_tpl_vars['item']['directory']; ?>
">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['name']; ?>
" title="<?php echo $this->_tpl_vars['item']['name']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['name']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</label></td>
		  <td><?php echo $this->_tpl_vars['item']['filemtime']; ?>
</td>
		  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['filesize'])) ? $this->_run_mod_handler('get_custom_size', true, $_tmp) : size_info($_tmp)); ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
              <li><a class="btn_delete" href="db.php?id=<?php echo $this->_tpl_vars['item']['name']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
              <li><a class="btn_resend" href="db.php?do=refresh&id=<?php echo $this->_tpl_vars['item']['name']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" onclick="confirm('Restore File <?php echo $this->_tpl_vars['item']['name']; ?>
\n<?php echo $this->_tpl_vars['_action']; ?>
Can not be restored, confirm to you');" title="Restore"><?php echo $this->_tpl_vars['_db_restore']; ?>
</a></li>
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