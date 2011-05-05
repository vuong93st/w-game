<?php /* Smarty version 2.6.18, created on 2011-01-01 17:23:00
         compiled from default%5Cquote.detail.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'news', 'default\\quote.detail.html', 31, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['page_title'])); ?>
<?php $this->assign('nav_id', '6'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['ThemeName'])."/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrapper">
  <div class="content">
    <div class="tips"><span><?php echo $this->_tpl_vars['position']; ?>
</span></div>
    <div class="news_all clearfix">
      <div class="news_all_left">
       <div class="news_title">
        <div class="title_bar_s4">
          <span class="title_top_s4"><span></span></span>
          <h2><?php echo $this->_tpl_vars['item']['name']; ?>
<?php echo $this->_tpl_vars['_quote_stat_charts']; ?>

          <p><?php echo $this->_tpl_vars['_product_name']; ?>
<span class="gray link-underline"><a href="product/content.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></span><?php echo $this->_tpl_vars['_publish_time']; ?>
<span class="gray"><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</span></p>
          </h2>
       </div>
       </div>
        <div class="news_all_left_con">
		  <?php echo $this->_tpl_vars['chart_image']; ?>

		  <div class="clear"></div>
		  <div><?php echo $this->_tpl_vars['_max_price']; ?>
<?php echo $this->_tpl_vars['item']['max_price']; ?>
 <?php echo $this->_tpl_vars['_low_price']; ?>
<?php echo $this->_tpl_vars['item']['min_price']; ?>
</div>
          <div id="news_info">[<a href="javascript:window.close()"><?php echo $this->_tpl_vars['_close_widow']; ?>
</a>] [<a href="javascript: window.print();"><?php echo $this->_tpl_vars['_print_page']; ?>
</a>]</div>
        </div>
      </div>
      <div class="all_right">
       <div class="title_bar_s4">
          <span class="title_top_s4"><span></span></span>
          <h3><?php echo $this->_tpl_vars['_related_info']; ?>
</h3>
       </div>
        <div class="all_right_con">
          <ul class="news_list">
          <?php $this->_tag_stack[] = array('news', array('row' => 10,'titlelen' => 32)); $_block_repeat=true;smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li> <a href="news/detail.php?id=[field:id]" title="[field:fulltitle]">[field:title]</a></li>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_news($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<script>
$("#SearchFrm").attr("action","news/list.php");
$("#topMenuNews").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['ThemeName'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>