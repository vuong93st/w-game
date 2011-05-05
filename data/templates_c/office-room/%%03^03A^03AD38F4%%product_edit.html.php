<?php /* Smarty version 2.6.18, created on 2011-04-23 00:28:30
         compiled from product_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'product_edit.html', 39, false),array('modifier', 'default', 'product_edit.html', 39, false),)), $this); ?>
<?php $this->assign('page_title', ($this->_tpl_vars['_product_management'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="../scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="../scripts/jquery/facebox.js" type="text/javascript"></script>
<link href="../images/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script>
jQuery(document).ready(function($) {
	$.facebox.settings.loadingImage = '<?php echo $this->_tpl_vars['SiteUrl']; ?>
images/facebox/loading.gif'; 
	$.facebox.settings.closeImage = '<?php echo $this->_tpl_vars['SiteUrl']; ?>
images/facebox/closelabel.gif'; 
	$('a[rel*=facebox]').facebox();
})
tinyMCE.init({
mode : "textareas",
theme : "simple",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left"
});
</script>
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
     <div class="offer_info_title"><h2><?php echo $this->_tpl_vars['_product_management']; ?>
</h2></div>

	  <form name="productaddfrm" method="post" action="<?php echo $_ENV['PHP_SELF']; ?>
" enctype="multipart/form-data" onsubmit="$('#Save').attr('disabled',true);">
	  <input type="hidden" name="formhash" value="<?php echo $this->_tpl_vars['formhash']; ?>
">
	  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['item']['id']; ?>
">
	  <input type="hidden" name="formattribute_ids" value="<?php echo $this->_tpl_vars['item']['formattribute_ids']; ?>
">
       <div class="hint"><?php echo $this->_tpl_vars['_must_input_with_star']; ?>
</div>
        <table class="offer_info_content">

                      <tr>
                        <th class="circle_left"><font class="red">*</font><?php echo $this->_tpl_vars['_product_type']; ?>
</th>
                        <td class="circle_right"><?php echo smarty_function_html_radios(array('name' => "data[product][sort_id]",'options' => $this->_tpl_vars['ProductSorts'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['sort_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 2) : smarty_modifier_default($_tmp, 2)),'separator' => ' '), $this);?>
</td>
                      </tr>
                      <tr>
                        <th><font class="red">*</font><?php echo $this->_tpl_vars['_product_name']; ?>
</th>
                        <td class="tdright"><input name="data[product][name]" type="text" id="dataProductName" value="<?php echo $this->_tpl_vars['item']['name']; ?>
">
                        <font color="#666666"><?php echo $this->_tpl_vars['_words_length']; ?>
</font></td>
                      </tr>
                      <tr>
                        <th><font class="red">*</font><?php echo $this->_tpl_vars['_product_description']; ?>
</th>
                        <td class="tdright"><textarea name="data[product][content]" id="dataProductContent" rows="8" wrap="VIRTUAL" style="width:370px;"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea><br />
                            <font color="#FF3300"><?php echo $this->_tpl_vars['_attention_explain']; ?>
<br>
                        </font></td>
                      </tr>
					  <tr>
					   <th><font class="red">*</font><?php echo $this->_tpl_vars['_product_description']; ?>
</th>
                        <td class="tdright"><textarea name="data[product][content]" id="dataProductContent" rows="8" wrap="VIRTUAL" style="width:370px;"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea><br />
                            <font color="#FF3300"><?php echo $this->_tpl_vars['_attention_explain']; ?>
<br>
                        </font></td>
	      </tr>
					  <tr>
				<th><?php echo $this->_tpl_vars['_sorts_n']; ?>
</th>
				<td><select name="data[product][category_id]" id="ProductpriceCategory">
				<?php echo $this->_tpl_vars['Productcategories']; ?>
	
				</select></td>
			  </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_tags_n']; ?>
</th>
                        <td class="tdright"><input class="infoTableInput2" name="data[tag]" type="text" id="tag" value="<?php echo $this->_tpl_vars['item']['tag']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_space_separate']; ?>
</label></td>
                      </tr>
                      <tr>
                        <th><?php echo $this->_tpl_vars['_product_image']; ?>
</th>
                        <td>
                            <input name="pic" type="file" id="uploadfile" onchange="preview()" />
                            <span class="gray"><br>
                              <?php echo $this->_tpl_vars['_image_size_format_provision']; ?>
</span></td>
                      </tr>
                      <tr>
					  <?php if ($this->_tpl_vars['item']['image']): ?>
                        <th></th>
                        <td><a href="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['image'])) ? $this->_run_mod_handler('default', true, $_tmp, "javascript:;") : smarty_modifier_default($_tmp, "javascript:;")); ?>
" id="uploadpic_hover" rel="facebox"><img id="uploadpic" src="<?php echo $this->_tpl_vars['item']['image']; ?>
.small.jpg" alt="&lt;{$item.name}&gt;" width="80" /></a></td>
						<?php endif; ?>                      </tr>
                      <tr>
                        <th class="circle_bottomleft"></th>
                        <td class="circle_bottomright"><input name="save" type="submit" id="save" value=" <?php echo $this->_tpl_vars['_confirm_submit']; ?>
 "></td>
                      </tr>
          </table>
	</form>

</div>
</div>
<script>
var cache_path = "../";
var app_language = '<?php echo $this->_tpl_vars['AppLanguage']; ?>
';
var area_id1 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id1'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var area_id2 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id2'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var area_id3 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['area_id3'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var industry_id1 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['industry_id1'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var industry_id2 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['industry_id2'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
var industry_id3 = <?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['industry_id3'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 ;
</script>
<script>
jQuery(document).ready(function($) {
	$("#ProductpriceCategory").val("<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
")
})
</script>
<script src="../scripts/jquery/jquery.validate"></script>
<script src="../scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['Charset']; ?>
"></script>
<script src="../scripts/script_area.js"></script>
<script src="../scripts/script_industry.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>