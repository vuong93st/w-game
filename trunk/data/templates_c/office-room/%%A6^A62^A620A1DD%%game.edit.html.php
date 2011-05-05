<?php /* Smarty version 2.6.18, created on 2011-04-27 16:43:26
         compiled from game.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fetch', 'game.edit.html', 12, false),array('function', 'html_options', 'game.edit.html', 35, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_management'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap clearfix">
    <div class="sidebar">
       <div class="sidebar_menu">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       </div>
    </div>
     <div class="main_content">
	 <div class="blank"></div>
	 <div class="offer_banner"><img src="images/offer_01.gif" /></div>	
<?php echo smarty_function_fetch(array('file' => "../scripts/date.js"), $this);?>

<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 Quản lý file game &raquo; <?php echo $this->_tpl_vars['_standards']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_standards']; ?>
</h3> 
    <ul class="subnav">
		<li><a href="game.php?pid=<?php echo $_GET['pid']; ?>
">Quản lý file game</a></li>
        <li><a class="btn1" href="game.php?pid=<?php echo $_GET['pid']; ?>
&do=edit"><span>Thêm/Sửa xóa</span></a></li>
        <li><a href="standard.php?do=type"><?php echo $this->_tpl_vars['_types']; ?>
</a></li>
    </ul>
</div>
<div class="info">
  <form action="game.php?pid=<?php echo $_GET['pid']; ?>
" method="post" id="EditFrm" name="edit_frm" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
  <input type="hidden" name="data[pid]" value="<?php echo $_GET['pid']; ?>
" />
  
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> Category:</th>
        <td class="paddingT15 wordSpacing5">
		<select name="data[standard][type_id]">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['StandardTypes'],'selected' => $this->_tpl_vars['item']['type_id']), $this);?>

		 </select>		</td>
      </tr>
      <tr>
        <th class="paddingT15"> Issued time:</th>
        <td class="paddingT15 wordSpacing5"><input name="data[publish_time]" id="date1" value="<?php echo $this->_tpl_vars['item']['publish_date']; ?>
" /><span class="btn_calendar" id="calendar-date1"></span></td>
      </tr>
      <tr>
        <th class="paddingT15"> Implementation time:</th>
        <td class="paddingT15 wordSpacing5"><input name="data[force_time]" value="<?php echo $this->_tpl_vars['item']['force_date']; ?>
" id="date2" /><span class="btn_calendar" id="calendar-date2"></span></td>
      </tr>
      <tr>
        <th class="paddingT15"> Attachment:</th>
        <td class="paddingT15 wordSpacing5"><input name="attach" type="file" id="attach" /><?php if ($this->_tpl_vars['item']['attach']): ?><br /><br><?php echo $this->_tpl_vars['item']['attach']; ?>
<?php endif; ?></td>
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
</div>
<script>
    Calendar.setup({
        trigger    : "calendar-date1",
		animation  : false,
        inputField : "date1",
		onSelect   : function() { this.hide() }
    });
    Calendar.setup({
        trigger    : "calendar-date2",
		animation  : false,
        inputField : "date2",
		onSelect   : function() { this.hide() }
    });
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>