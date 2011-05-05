<?php /* Smarty version 2.6.18, created on 2010-12-21 16:47:57
         compiled from product.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'product.edit.html', 103, false),array('function', 'editor', 'product.edit.html', 113, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="../scripts/jquery/facebox.js" type="text/javascript"></script>
<link href="../images/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script>
jQuery(document).ready(function($) {
	$.facebox.settings.loadingImage = '<?php echo $this->_tpl_vars['SiteUrl']; ?>
images/facebox/loading.gif'; 
	$.facebox.settings.closeImage = '<?php echo $this->_tpl_vars['SiteUrl']; ?>
images/facebox/closelabel.gif'; 
	$('a[rel*=facebox]').facebox() 
})
</script>
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
		<li><a href="product.php"><?php echo $this->_tpl_vars['_management']; ?>
</a></li>
        <li><a class="btn1"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
		<li><a href="productsort.php">Type</a></li>
		<li><a href="productcategory.php">Product categories</a></a></li>
		<li><a href="brand.php">Brands</a></a></li>
		<li><a href="brandtype.php">Brand Category</a></a></li>
		<li><a href="price.php">Prices</a></a></li>
    </ul>
</div>
<div class="info">
  <form method="post" id="EditFrm" name="edit_frm" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
" />
  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>
" />
  <input type="hidden" name="company_name" value="<?php echo $this->_tpl_vars['item']['companyname']; ?>
" />
  <input type="hidden" name="username" value="<?php echo $this->_tpl_vars['item']['username']; ?>
" />
    <table class="infoTable">
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_member_name_n']; ?>
</th>
        <td class="paddingT15 wordSpacing5">          
		<input class="infoTableInput2" name="data[username]" value="<?php echo $this->_tpl_vars['item']['username']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_member_name']; ?>
</label>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> Company Name:</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[company_name]" id="dataCompanyName" value="<?php echo $this->_tpl_vars['item']['companyname']; ?>
" /></td>
      </tr>
      <tr>
        <th class="paddingT15"> Product Name:</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[product][name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /><label class="field_notice">Demand content title</label></td>
      </tr>
      <tr>
        <th class="paddingT15"> Tags:</th>
        <td class="paddingT15 wordSpacing5"><input class="infoTableInput2" name="data[tag]" type="text" id="Tag" value="<?php echo $this->_tpl_vars['item']['tag']; ?>
" /><label class="field_notice"><?php echo $this->_tpl_vars['_multi_seperate_by_quot']; ?>
</label>        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_in_industry']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <span id="dataIndustry">
					<select name="data[product][industry_id1]" id="dataProductIndustryId1" class="level_1" style="width:120px;" ></select>
					<select name="data[product][industry_id2]" id="dataProductIndustryId2" class="level_2" style="width:120px;"></select>
					<select name="data[product][industry_id3]" id="dataProductIndustryId3" class="level_3" style="width:120px;"></select>
		</span>
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> <?php echo $this->_tpl_vars['_in_area']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
			<span id="dataArea">
						<select name="data[product][area_id1]" id="dataProductAreaId1" class="level_1" style="width:120px;" ></select>
						<select name="data[product][area_id2]" id="dataProductAreaId2" class="level_2" style="width:120px;"></select>
						<select name="data[product][area_id3]" id="dataProductAreaId3" class="level_3" style="width:120px;"></select>
			</span>        
        </td>
      </tr>
      <tr>
        <th class="paddingT15"> Details:</th>
        <td class="paddingT15 wordSpacing5"><textarea style="width:650px;height:300px;" name="data[product][content]" id="dataProductContent"><?php echo $this->_tpl_vars['item']['content']; ?>
</textarea>
		</td>

      </tr>
      <tr>
        <th class="paddingT15"><?php echo $this->_tpl_vars['_picture']; ?>
</th>
        <td class="paddingT15 wordSpacing5">
        <input class="infoTableFile2" type="file" name="pic" id="pic" />
          <label class="field_notice">（Supported formats GIF,JPG,JPEG,PNG）</label>
          <?php if ($this->_tpl_vars['item']['picture']): ?>
          <br /><span><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
"/></span>
          <?php endif; ?>
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="ptb20">
			<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save_and_pub']; ?>
" />
			<input class="formbtn" type="submit" name="pass" value="<?php echo $this->_tpl_vars['_check_passed']; ?>
" />
			<input class="formbtn" type="submit" name="forbid" value="<?php echo $this->_tpl_vars['_check_invalid']; ?>
" />
			<input class="formbtn" type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" />
		</td>

      </tr>
    </table>
  </form>
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
<script src="../scripts/multi_select.js" charset="<?php echo $this->_tpl_vars['Charset']; ?>
"></script>
<script src="../scripts/script_area.js"></script>
<script src="../scripts/script_industry.js"></script>
<?php echo smarty_function_editor(array('type' => 'tiny_mce'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>