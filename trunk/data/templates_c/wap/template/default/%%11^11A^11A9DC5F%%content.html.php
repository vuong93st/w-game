<?php /* Smarty version 2.6.18, created on 2011-05-11 17:38:00
         compiled from content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'content.html', 8, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h1><?php echo $this->_tpl_vars['item']['name']; ?>
</h1>
<div class="htmlFrame"><div style="padding-bottom: 10px; font-size: xx-small;"><?php echo $this->_tpl_vars['item']['scontent']; ?>
</div><table><tbody><tr><td><img class="pg_thumb" src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="Game" style="width: 64px; height: 64px;"></td><td><div class="xsmall"><div><img src="stars_0.gif" alt="3 sao"></div>
<div>S&#7889; l&#7847;n t&#7843;i: <?php echo $this->_tpl_vars['item']['clicked']; ?>
</div>
<div>
  <a href="#">B&igrave;nh lu&#7853;n(29)</a>
  </div>
<div>Giá : <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : smarty_modifier_number_format($_tmp, 0, ",", ".")); ?>
 vnđ</div>
</div></td></tr></tbody></table>
<div class="vPad10"><a href="buy.php?do=charging&pid=<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="nofollow"><strong>Mua <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : smarty_modifier_number_format($_tmp, 0, ",", ".")); ?>
 vnđ </strong></a></div>
<div style="font-size: xx-small; padding-top: 10px;">
  <p>Giới thiệu:</p>
  <div style="padding-bottom: 10px; font-size: xx-small;"><?php echo $this->_tpl_vars['item']['content']; ?>
</div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
