<?php /* Smarty version 2.6.18, created on 2011-05-04 01:45:55
         compiled from game.html */ ?>
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
	
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 Quản lý game &raquo; File game</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_standards']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="product.php"><span>Danh sách game</span></a></li>
        <li><a href="game.php?pid=<?php echo $_GET['pid']; ?>
&do=edit">Thêm/Xóa sửa</a></li>
        <li><a href="game.php?do=type">Danh mục</a></li>
    </ul>
</div>
<div class="mrightTop" style="margin-top:10px;"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
             <div> 
				Tìm kiềm file game: 
				  <input class="queryInput" type="text" name="q" value="" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div style="height:20px;"></div>

<div class="tdare">
  <form name="list_frm" id="ListFrm" action="standard.php" method="post">
  <table width="100%" cellspacing="0" class="bglist" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th width="6%" class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th width="25%"><label for="idAll">T&ecirc;n file game </label></th>
		  <th width="19%">Lo&#7841;i</th>
		  <th width="50%">Thao t&aacute;c </th>
		</tr>
    </thead>
    <tbody>		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</label></td>
	
		  <td><?php echo $this->_tpl_vars['item']['typename']; ?>
</td>
		  <td class="handler" style="text-align:right">
          <ul id="handler_icon">
            <li><a class="btn_delete"  href="game.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&pid=<?php echo $_GET['pid']; ?>
&do=del<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_browse"  href="gamehandset.php?gid=<?php echo $this->_tpl_vars['item']['id']; ?>
&pid=<?php echo $_GET['pid']; ?>
" title="<?php echo $this->_tpl_vars['_preview']; ?>
">Xem thiết bị</a></li>
            <li><a class="btn_edit" href="game.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
<?php echo $this->_tpl_vars['addParams']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li>
			<li><a class="btn_edit" href="handset.php?do=edit&gid=<?php echo $this->_tpl_vars['item']['id']; ?>
&pid=<?php echo $_GET['pid']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
">Thêm thiết bị</a></li>
          </ul>		  </td>
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
      <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" class="formbtn batchButton"/>
    </div>
    <div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
    <div class="clear"/>
    </div>
	</form>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>