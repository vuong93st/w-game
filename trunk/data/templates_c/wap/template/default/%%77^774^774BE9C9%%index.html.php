<?php /* Smarty version 2.6.18, created on 2011-04-25 10:53:37
         compiled from index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="htmlFrame">
  <h1>Games <span class="xsmall">| Danh mục: <a href="#">Tất cả </a></span></h1>
  <div class="itemsFrame"><div class="padBot5">
    <div class="xsmall"><a id="page-new" href="index.php?page=new">Mới </a> | <a id="page-recommend" href="index.php?page=recommend">Bầu chọn </a> | <a id="page-promotion" href="index.php?page=promotion">Khuyến mãi </a></div>
  </div><div>
  
  <?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
  
  <div class="item">
    <a class="" href="content.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" style="display: block; text-decoration: none;"><img class="pgthumb" src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="" align="left" height="32" width="32"><span style="color: #990000; text-decoration: underline;"><?php echo $this->_tpl_vars['item']['name']; ?>
</span><br></a> 
    <a href="#" style="color:#000000">Tải về   (<?php echo $this->_tpl_vars['item']['price']; ?>
) vnđ</a></div>	
  </div>
  
  <?php endforeach; else: ?>
  		 <div class="item">
		 		<div style="color:#FF0000;font-style:italic">Không có dữ liệu nào trả về!</div>
		 </div>
  <?php endif; unset($_from); ?>
   
  </div>
  
  <div class="pgLine"></div><div><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
  <br><div><div class="padBot10"><div class="xsmall"><a id="page-new-bottom" href="index.php?page=new">Mới </a> | <a id="page-recommend-bottom" href="index.php?page=recommend">Bầu chọn </a> | <a id="page-promotion-bottom" href="index.php?page=promotion">Khuyến mãi </a></div>
  </div>
  <span class="xsmall">Danh mục : <a href="#">Tất cả </a></span><br>
  </div>
  </div><div class="padBot10"></div></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
