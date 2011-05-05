<?php /* Smarty version 2.6.18, created on 2011-05-04 01:46:52
         compiled from handset.html */ ?>
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
		<li><a class="btn1" href="gamehandset.php?pid=<?php echo $_GET['pid']; ?>
&gid=<?php echo $_GET['gid']; ?>
">Danh sách thiết bị của game </a></li>
       
    </ul>
</div>
<div class="mrightTop" style="margin-top:10px;"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get"> 
		<input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>
" />
		<input type="hidden" name="gid" value="<?php echo $_GET['gid']; ?>
" />
		<input type="hidden" name="do" value="search" />
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
  <form name="list_frm" id="ListFrm" action="gamehandset.php?do=importall&pid=<?php echo $_GET['pid']; ?>
&gid=<?php echo $_GET['gid']; ?>
" method="post">
  <table width="100%" cellspacing="0" class="bglist" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th width="6%" class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th width="25%"><label for="idAll">Tên hãng </label></th>
		  <th width="19%">Loại điện thoại </th>
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
"><?php echo $this->_tpl_vars['item']['brand_name']; ?>
</label></td>
	
		  <td><?php echo $this->_tpl_vars['item']['model_name']; ?>
</td>
		  <td class="handler" style="text-align:right">
          <ul id="handler_icon">
			<li><a class="btn_edit" href="gamehandset.php?do=import&id=<?php echo $this->_tpl_vars['item']['Id']; ?>
&pid=<?php echo $_GET['pid']; ?>
&gid=<?php echo $_GET['gid']; ?>
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
	<thead>
		<tr>
		  <th width="6%" class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th width="25%"><label for="idAll">Tên hãng </label></th>
		  <th width="19%">Loại điện thoại </th>
		  <th width="50%">Thao t&aacute;c </th>
		</tr>
    </thead>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction" style="margin-top:20px;">
      <input type="submit" name="importall" value="Thêm toàn bộ lựa chọn" class="formbtn batchButton"/>
    </div>
    <div class="pageLinks" style="text-align:right"><?php echo $this->_tpl_vars['ByPages']; ?>
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