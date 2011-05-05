<?php /* Smarty version 2.6.18, created on 2011-04-25 10:53:37
         compiled from footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'footer.html', 20, false),)), $this); ?>
<a class="rlA" href="#"><img src="images/boto_vi_320.gif" style="width:100%;padding-top:4px" /></a>
<a class="rlA" href="#"><img src="images/GL-Icon_ASP_320.gif" style="width:100%;padding-top:4px"  /></a>

<div class="fLinks">
<div class="rl">&lt;<a class="rlA" href="#">Quay l&#7841;i </a>  |  ^<a class="rlA" href="#top">L&ecirc;n &#273;&#7847;u trang </a>  |  <<a class="rlA" href="#">Trang ch&#7911; </a></div>
</div>

  <div class="fLinks">
    <div class="padBot5"><a href="#">H&#7895; tr&#7907; &amp; H&#432;&#7899;ng d&#7851;n </a> | <a href="#">Li&ecirc;n h&#7879; </a> | <a href="#">Giao di&#7879;n website </a><br>
      <a href="#">D&#7883;ch v&#7909; </a> | <a href="#">Quy &#273;&#7883;nh</a></div>
    <div class="padBot5">© 2010 - 2011 Thinknet, Inc.</div>
  </div>
  <div class="fNotice">Ho&#7841;t &#273;&#7897;ng tr&ecirc;n 3 nh&agrave; m&#7841;ng l&#7899;n: Mobi,Vina,Viettel.</div>
  <div class="fNotice">H&#7895; tr&#7907; h&#7847;u h&#7871;t c&aacute;c d&ograve;ng m&aacute;y di&#7879;n tho&#7841;i Nokia, Sony Ericsson, Samsung, LG, HTC,
Apple iPhone, Blackberry, Motorola v&agrave; &#273;i&#7879;n tho&#7841;i tr&ecirc;n n&#7873;n t&#7843;ng Android.</div>
  
  </div>

<script>
var parent_id = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['parent_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
";
var page = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['Page'])) ? $this->_run_mod_handler('default', true, $_tmp, 'new') : smarty_modifier_default($_tmp, 'new')); ?>
";


$(document).ready(function($) {	

	if(page == 'new'){
		$("#page-promotion").removeClass("current_nav");
		$("#page-recommend").removeClass("current_nav");
		$("#page-new").toggleClass("current_nav");	
		
		$("#page-promotion-bottom").removeClass("current_nav");
		$("#page-recommend-bottom").removeClass("current_nav");
		$("#page-new-bottom").toggleClass("current_nav");					
					
	}else if((page == 'recommend')){
		$("#page-promotion").removeClass("current_nav");
		$("#page-recommend").toggleClass("current_nav");
		$("#page-new").removeClass("current_nav");	
		
		$("#page-promotion-bottom").removeClass("current_nav");
		$("#page-recommend-bottom").toggleClass("current_nav");
		$("#page-new-bottom").removeClass("current_nav");	
		
	}else if((page == 'promotion')){
		$("#page-promotion").toggleClass("current_nav");
		$("#page-recommend").removeClass("current_nav");
		$("#page-new").removeClass("current_nav");	
		
		$("#page-promotion-bottom").toggleClass("current_nav");
		$("#page-recommend-bottom").removeClass("current_nav");
		$("#page-new-bottom").removeClass("current_nav");	

	}
	
});
</script>
  
</body>
</html>