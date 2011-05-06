<?php /* Smarty version 2.6.18, created on 2011-05-06 18:22:44
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
<div class="htmlFrame"><div style="padding-bottom: 10px; font-size: x-small;"><?php echo $this->_tpl_vars['SortContent']; ?>
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
<div class="vPad10"><a href="#" rel="nofollow"><strong>T&#7843;i /C&agrave;i &#273;&#7863;t </strong></a> <span style="color: black;">(FREE)</span></div>
<div style="font-size: xx-small; padding-top: 10px;">
  <p>N&#7871;u b&#7841;n l&agrave; thu&ecirc; bao MobiFone h&#7879; th&#7889;ng s&#7869; t&#7921; &#273;&#7897;ng tr&#7915; ti&#7873;n th&#7921;c hi&#7879;n vi&#7879;c t&#7843;i game v&#7873; m&aacute;y.</p>
  <p>N&#7871;u b&#7841;n kh&ocirc;ng ph&#7843;i thu&ecirc; bao MobiFone khi nh&#7845;n v&agrave;o n&uacute;t &quot;T&#7843;i/C&agrave;i &#273;&#7863;t&quot; h&#7879; th&#7889;ng s&#7869; t&#7921; so&#7841;n s&#7861;n cho b&#7841;n m&#7897;t tin nh&#7855;n v&#7899;i c&uacute; ph&aacute;p t&#7843;i game. (MG 123455) g&#7917;i v&#7873; 9210</p>
  
  <p>Giới thiệu:</p>
  <?php echo $this->_tpl_vars['Content']; ?>

  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
