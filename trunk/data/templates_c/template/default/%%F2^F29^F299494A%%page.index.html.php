<?php /* Smarty version 2.6.18, created on 2011-01-01 17:11:50
         compiled from default%5Cpage.index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'userpage', 'default\\page.index.html', 17, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['page_title'])); ?>
<?php $this->assign('nav_id', ($this->_tpl_vars['nav_id'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['ThemeName'])."/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrapper">
  <div class="content">
      <p class="blank6"></p>
      <div class="container">
        <div class="fl help_l">
          <div class="help_ltop">
              <span class="help_top_left"></span><span class="help_top_right"></span>
           </div>
          <div class="help_lcont">
            <div class="help_telborder">
              <h2 class="tar"><?php echo $this->_tpl_vars['_about_us']; ?>
</h2>
            </div>
            <ul>
            	<?php $this->_tag_stack[] = array('userpage', array('row' => 15)); $_block_repeat=true;smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                  	<li class="help_lcontnav"><a href="[link:title]" title="[field:title]">[field:title]</a></li>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <li class="self_def_bg"></li>
              <li class="self_def_nav"></li>
            </ul>
          </div>
        </div>
        <div class="fr help_r clearfix">
           <div class="help_rtop"></div>
              <div class="help_rcontbg">
            <div class="foot_contact"><?php echo $this->_tpl_vars['item']['title']; ?>
</div>
            <div class="help_rbg"><?php echo $this->_tpl_vars['item']['content']; ?>
</div>
          </div>
        </div>

    </div>
    <div class="clear"></div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['ThemeName'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>