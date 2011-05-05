<?php /* Smarty version 2.6.18, created on 2010-12-21 16:46:57
         compiled from product.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'product.html', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_product_center']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_product_center']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1" href="product.php"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
        <li><a href="product.php?do=edit"><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</a></li>
		<li><a href="productsort.php">Type</a></li>
		<li><a href="productcategory.php">Product categories</a></a></li>
		<li><a href="brand.php">Brands</a></a></li>
		<li><a href="brandtype.php">Brand Category</a></a></li>
		<li><a href="price.php">Prices</a></a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get" action="product.php"> 
        <input type="hidden" name="do" value="search" />
             <div> 
				<?php echo $this->_tpl_vars['_member_name_n']; ?>
 <input class="queryInput" type="text" name="data[username]" value="" /> 
				Company Name: <input class="queryInput" type="text" name="data[companyname]" value="" /> 
                <select class="querySelect" name="product[status]" id="ProductStatus">
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['CheckStatus'],'selected' => $this->_tpl_vars['smaty']['post']['product']['status']), $this);?>

				</select>
				Product Name Keyword: <input class="queryInput" type="text" name="data[q]" value="" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="product.php" method="post">
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th></th>
		  <th><label for="idAll">Product Name</label></th>
		  <th>Company Name</th>
		  <th>On / off the shelf</th>
		  <th>Status</th>
		  <th>Pub Date</th>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tfoot>
		<tr>
		  <th colspan="8"><div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div></th>
		</tr>
    <tfoot>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><?php if ($this->_tpl_vars['item']['created'] > $this->_tpl_vars['today_timestamp']): ?><span class="icon-new"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['Ifcommend']): ?><span class="icon-commend"></span><?php endif; ?><?php if ($this->_tpl_vars['item']['ProductPicture'] != ''): ?><span class="icon-pic"></span><?php endif; ?></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['ProductName']; ?>
</label></td>
		  <td><a href="company.php?do=edit&id=<?php echo $this->_tpl_vars['item']['CID']; ?>
"><?php echo $this->_tpl_vars['item']['companyname']; ?>
</a></td>
		  <td><?php echo $this->_tpl_vars['BooleanVars'][$this->_tpl_vars['item']['ProductState']]; ?>
</td>
		  <td><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['ProductStatus']]; ?>
</td>
		  <td class="pb_datetime"><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</td>
		  <td class="handler">
          <ul id="handler_icon">
            <li><a class="btn_delete" href="product.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_edit" href="product.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['_edit']; ?>
"><?php echo $this->_tpl_vars['_edit']; ?>
</a></li> 
             <li><a class="btn_browse" href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
product/content.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['_preview']; ?>
"><?php echo $this->_tpl_vars['_preview']; ?>
</a></li>
          </ul>  
		  </td>
		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="7"><?php echo $this->_tpl_vars['_no_datas']; ?>
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
      <input type="submit" name="recommend" value="<?php echo $this->_tpl_vars['_commend']; ?>
产品" class="formbtn batchButton"/>
      <select name="status" id="Status" onchange="$('#ListFrm').submit();">
      	<option>Status</option>
        <option value="0">Disable</option>
        <option value="1">Enable</option>
      </select>
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