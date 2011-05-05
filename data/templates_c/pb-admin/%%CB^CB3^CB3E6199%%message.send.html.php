<?php /* Smarty version 2.6.18, created on 2010-12-21 15:48:14
         compiled from message.send.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_pms']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_pms']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="message.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1" href="message.php?do=send"><span>Send</span></a></li>
    </ul>
</div>
<div class="info">
  <form action="message.php" method="post" id="EditFrm" name="edit_frm">
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> Given<?php echo $this->_tpl_vars['_cp_username_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="to_username" id="ToUsername" value="" /><label class="field_notice">Please fill in each other's account</label>        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_title_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[message][title]" value="" /></td>
      </tr> 
      <tr>
        <th class="paddingT15">  Content:</th>
        <td class="paddingT15 wordSpacing5">
        <textarea style="width:550px;height:50px;" name="data[message][content]"></textarea></td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
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