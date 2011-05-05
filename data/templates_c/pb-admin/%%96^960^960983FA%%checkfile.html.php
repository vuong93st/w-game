<?php /* Smarty version 2.6.18, created on 2010-12-21 15:36:36
         compiled from checkfile.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tool']; ?>
 &raquo; File Checksum</p>
</div>
<div id="rightTop"> 
    <h3>File Checksum</h3> 
</div>
<?php if ($this->_tpl_vars['flag'] == '0'): ?>
<div class="mrightTop"> 
    <div class="fontl"> 
	File verification is for<?php echo $this->_tpl_vars['_soft_name']; ?>
Official release as the basis for checking the files, click the button below to start checking.
    </div> 
    <div class="fontl"></div> 
</div> 
<div class="info">
  <form method="post" action="checkfile.php" id="EditFrm" name="edit_frm">
  <input type="hidden" name="check" value="check" />
    <table class="infoTable">
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="button" name="check"  id="Submit"  value="Start check" />		</td>
      </tr>
    </table>
  </form>
  </div>
  <?php else: ?>
   <div class="tdare">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <tbody>
		<tr>
		  <td>File Name</td>
		  <td>File Size</td>
		  <td>Last modified</td>
		  <td>Status</td>
		</tr>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['size']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['time']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['status']; ?>
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
</div>
 <?php endif; ?>
 <script language="JavaScript">
$(document).ready(function() { 
$('#Submit').click(function() {
	$('#Submit').attr('disabled',"true");
	$('#Submit').val("Check in...");
	$('#EditFrm').submit();
});
})
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>