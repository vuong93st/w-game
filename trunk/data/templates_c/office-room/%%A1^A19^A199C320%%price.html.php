<?php /* Smarty version 2.6.18, created on 2011-04-22 11:24:29
         compiled from price.html */ ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_prices'])); ?>
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
     <div class="offer_info_title"><h2><?php echo $this->_tpl_vars['page_title']; ?>
</h2></div>
      <table class="offer_count">
         <tr>
          <td><strong><?php echo $this->_tpl_vars['_success_release']; ?>
<span class="font14b_org"> <?php echo $this->_tpl_vars['Amount']; ?>
</span> <?php echo $this->_tpl_vars['_number']; ?>
<?php echo $this->_tpl_vars['ActionName']; ?>
<?php echo $this->_tpl_vars['_product_prices']; ?>
</strong></td>
          <td class="height35"><a title="<?php echo $this->_tpl_vars['_release']; ?>
<?php echo $this->_tpl_vars['ActionName']; ?>
" href="price.php?do=edit" class="btn_publish"><?php echo $this->_tpl_vars['_add']; ?>
<?php echo $this->_tpl_vars['_product_prices']; ?>
</a></td>
        </tr>
      </table>      
      <form name="listfrm" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post" onSubmit="return test();">
	  <input type="hidden" name="formhash" value="<?php echo $this->_tpl_vars['formhash']; ?>
">
      <table class="offer_publish_list">
        <tr>
          <td>
          <table class="bglist">
            <tr>
              <th><?php echo $this->_tpl_vars['_type']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_title']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_product_name_n']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_prices']; ?>
</th>
              <th><?php echo $this->_tpl_vars['_operation']; ?>
</th>
            </tr>
			<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <tr align="center" class="bgwhite">
              <td class="orange">[<a href="price.php?typeid=<?php echo $this->_tpl_vars['item']['type_id']; ?>
"><?php echo $this->_tpl_vars['PriceTypes'][$this->_tpl_vars['item']['type_id']]; ?>
</a>]</td>
              <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
              <td ><?php echo $this->_tpl_vars['item']['productname']; ?>
</td>
              <td><?php echo $this->_tpl_vars['item']['price']; ?>
<?php echo $this->_tpl_vars['Monetaries'][$this->_tpl_vars['item']['currency']]; ?>
/<?php echo $this->_tpl_vars['Measuries'][$this->_tpl_vars['item']['units']]; ?>
</td>
              <td><a href="price.php?do=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_modify']; ?>
</a>&nbsp;&nbsp;<a href="price.php?do=del&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a>&nbsp;&nbsp;</td>
            </tr>
			<?php endforeach; else: ?>
			<tr><td colspan="5"><a href="price.php?do=edit"><?php echo $this->_tpl_vars['_no_prices_and_add_it']; ?>
</a></td></tr>
			<?php endif; unset($_from); ?>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
          <table class="room_pages">
              <tr>
                <td><?php echo $this->_tpl_vars['ByPages']; ?>
</td>
              </tr>
          </table>
          </td>
        </tr>
      </table>
      </form>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>