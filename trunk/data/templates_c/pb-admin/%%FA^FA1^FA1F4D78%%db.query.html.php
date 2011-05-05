<?php /* Smarty version 2.6.18, created on 2010-12-21 16:48:43
         compiled from db.query.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
jQuery(document).ready(function($) {
	$("#sqlContent").focus();
})
</script>
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
        <li><a href="db.php?do=restore"><?php echo $this->_tpl_vars['_db_restore']; ?>
</a></li>
        <li><a class="btn1" href="db.php?do=query"><span><?php echo $this->_tpl_vars['_db_upgrade']; ?>
</span></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" action="db.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="do" value="query" />
    <table class="infoTable">
      
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_soft_name']; ?>
 <?php echo $this->_tpl_vars['_database']; ?>
Upgrade - Please paste in the right side of the SQL statement:</th>
        <td class="paddingT15 wordSpacing5"> <textarea style="width:550px;height:100px;" name="sql_content" id="sqlContent"></textarea></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="Executive" />		
			<input class="formbtn" type="reset" name="reset" value="Clear" />		</td>
      </tr>
    </table>
  </form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>