<?php /* Smarty version 2.6.18, created on 2011-01-01 17:12:02
         compiled from default%5Cagreement.html */ ?>
<?php $this->assign('page_title', ($this->_tpl_vars['site_name']).($this->_tpl_vars['_service_license'])); ?>
<?php $this->assign('nav_id', ($this->_tpl_vars['nav_id'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['ThemeName'])."/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrapper">
  <div class="content">
    <div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
    <div class="blank"></div>
    <div class="body_content">
      <div class="title_bar_s3">
            <span class="title_top_s3"><span></span></span>
            <h2><?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['_agreement']; ?>
</h2>
      </div>  
      <div class="content_body"><?php echo $this->_tpl_vars['content']; ?>
</div>
       <div class="blank"></div>
    </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['ThemeName'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>