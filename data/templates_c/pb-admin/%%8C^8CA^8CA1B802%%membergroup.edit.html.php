<?php /* Smarty version 2.6.18, created on 2010-12-21 15:46:51
         compiled from membergroup.edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'membergroup.edit.html', 24, false),array('function', 'html_options', 'membergroup.edit.html', 78, false),array('modifier', 'default', 'membergroup.edit.html', 24, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_member_center']; ?>
 &raquo; <?php echo $this->_tpl_vars['_membergroup']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_membergroup']; ?>
</h3> 
    <ul class="subnav">
        <li><a href="membergroup.php">All<?php echo $this->_tpl_vars['_membergroup']; ?>
</a></li>
		<li><a class="btn1" href="membergroup.php?do=edit"><span><?php echo $this->_tpl_vars['_add_or_edit']; ?>
</span></a></li>
        <li><a href="membergroup.php?do=permission">Permissions</a></li>
    </ul>
</div>
<div class="info"> 
    <form method="post" action="membergroup.php"> 
    <input type="hidden" name="type" value="<?php echo $this->_tpl_vars['item']['type']; ?>
" />
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
" />
        <table class="infoTable"> 
         	<tr> 
                <th class="paddingT15">Name:</th> 
           	  <td class="paddingT15 wordSpacing5"><input name="membergroup[name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" /></td> 
          	</tr> 
         	<tr> 
                <th class="paddingT15">Category:</th> 
              	<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "membergroup[membertype_id]",'options' => $this->_tpl_vars['Membertypes'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['membertype_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => ""), $this);?>
</td> 
          	</tr> 
         	<tr> 
                <th class="paddingT15">Legend:</th> 
           	  <td class="paddingT15 wordSpacing5"><input name="membergroup[picture]" value="<?php echo $this->_tpl_vars['item']['picture']; ?>
" /><?php if ($this->_tpl_vars['item']['picture']): ?><img src="<?php echo $this->_tpl_vars['item']['image']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" border="0" /><?php endif; ?></td> 
          	</tr>
         	<tr> 
                <th class="paddingT15">Minimum points:</th> 
              	<td class="paddingT15 wordSpacing5"><input name="membergroup[point_min]" value="<?php echo $this->_tpl_vars['item']['point_min']; ?>
" size="6" /></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Maximum points:</th> 
       			<td class="paddingT15 wordSpacing5"><input name="membergroup[point_max]" value="<?php echo $this->_tpl_vars['item']['point_max']; ?>
" size="6" /></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Allow publishers to supply and demand:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "offer[allow]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['offer_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
<span id="AllowOffer" style="display: none;">&nbsp;Number of supply and demand per day:<input name="membergroup[max_offer]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['max_offer'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width:35px; text-align:center" />&nbsp;Need to review:<?php echo smarty_function_html_radios(array('name' => "offer[check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['offer_check'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
</span></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Allow the submission of products:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "product[allow]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['product_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
<span id="AllowProduct" style="display: none;">&nbsp;Number of products per day:<input name="membergroup[max_product]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['max_product'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width:35px; text-align:center" />&nbsp;Need to review:<?php echo smarty_function_html_radios(array('name' => "product[check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['product_check'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
</span></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Allow publishers to post:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "job[allow]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['job_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
<span id="AllowJob" style="display: none;">&nbsp;The number of posts per day:<input name="membergroup[max_job]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['max_job'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width:35px; text-align:center" />&nbsp;Need to review:<?php echo smarty_function_html_radios(array('name' => "job[check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['job_check'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
</span></td> 
          	</tr> 
	  <tr> 
                <th class="paddingT15">Allow publishing business information:</th> 
		<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "companynews[allow]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['companynews_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
<span id="AllowCompanynews" style="display: none;">&nbsp;Number of information per day:<input name="membergroup[max_companynews]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['max_companynews'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width:35px; text-align:center" />&nbsp;Need to review:<?php echo smarty_function_html_radios(array('name' => "companynews[check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['companynews_check'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
</span></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Allow publishing companies Album:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "album[allow]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['album_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
<span id="AllowAlbum" style="display: none;">&nbsp;The number of records per day:<input name="membergroup[max_album]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['max_album'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" style="width:35px; text-align:center" />&nbsp;Need to review:<?php echo smarty_function_html_radios(array('name' => "album[check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['album_check'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
</span></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Allowed to submit market information:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "market[allow]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['market_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
<span id="AllowMarket" style="display: none;">&nbsp;Need to review:<?php echo smarty_function_html_radios(array('name' => "market[check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['market_check'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
</span></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Allow up company information:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "company[allow]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['company_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
<span id="AllowCompany" style="display: none;">&nbsp;Need to review:<?php echo smarty_function_html_radios(array('name' => "company[check]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['company_check'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "",'label_ids' => $this->_tpl_vars['AskAction']), $this);?>
</span></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Allow the opening of<?php echo $this->_tpl_vars['_space_name']; ?>
:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "membergroup[allow_space]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['allow_space'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">The default length of service:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "membergroup[default_live_time]",'options' => $this->_tpl_vars['LiveTimes'],'checked' => $this->_tpl_vars['item']['default_live_time'],'separator' => ' '), $this);?>
</td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Service after the expiration becomes:</th> 
       			<td class="paddingT15 wordSpacing5">
                    <select name="membergroup[after_live_time]">
                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['MembergroupOption'],'selected' => $this->_tpl_vars['item']['after_live_time']), $this);?>

                    </select>
                </td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Maximum number of product categories:</th> 
       			<td class="paddingT15 wordSpacing5"><input name="membergroup[max_producttype]" value="<?php echo $this->_tpl_vars['item']['max_producttype']; ?>
" size="3" /></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">Most Favorite Number:</th> 
       			<td class="paddingT15 wordSpacing5"><input name="membergroup[max_favorite]" value="<?php echo $this->_tpl_vars['item']['max_favorite']; ?>
" size="3" /></td> 
          	</tr> 
         	<tr> 
                <th class="paddingT15">Description:</th> 
              	<td class="paddingT15 wordSpacing5"><input name="membergroup[description]" value="<?php echo $this->_tpl_vars['item']['description']; ?>
" /></td> 
          	</tr> 
			<tr> 
                <th class="paddingT15">If default:</th> 
       			<td class="paddingT15 wordSpacing5"><?php echo smarty_function_html_radios(array('name' => "membergroup[is_default]",'options' => $this->_tpl_vars['AskAction'],'checked' => ((is_array($_tmp=@$this->_tpl_vars['item']['is_default'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => ""), $this);?>
</td> 
          	</tr> 
            <tr> 
            <th></th> 
            <td class="ptb20"> 
                <input class="formbtn" type="submit" name="saveauth" value="<?php echo $this->_tpl_vars['_submit']; ?>
" />            </td> 
        </tr> 
        </table> 
  </form> 
</div>
<script language="JavaScript" type="text/JavaScript">
var offer_allow=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['offer_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
var product_allow=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['product_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
var company_allow=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['company_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
var job_allow=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['job_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
var companynews_allow=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['companynews_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
var album_allow=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['album_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
var market_allow=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['market_allow'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
;
jQuery(document).ready(function($) {
	$("#offer_allow__1").click(
		function(){
			$("#AllowOffer").show();
		}
	);
	$("#offer_allow__0").click(
		function(){
		$("#AllowOffer").hide();
		}
	);
	if(offer_allow==1) $("#offer_allow__1").click();
	//product
	$("#product_allow__1").click(
		function(){
			$("#AllowProduct").show();
		}
	);
	$("#product_allow__0").click(
		function(){
		$("#AllowProduct").hide();
		}
	);
	if(product_allow==1) $("#product_allow__1").click();
	//company
	$("#company_allow__1").click(
		function(){
			$("#AllowCompany").show();
		}
	);
	$("#company_allow__0").click(
		function(){
		$("#AllowCompany").hide();
		}
	);
	if(company_allow==1) $("#company_allow__1").click();
	//job
	$("#job_allow__1").click(
		function(){
			$("#AllowJob").show();
		}
	);
	$("#job_allow__0").click(
		function(){
		$("#AllowJob").hide();
		}
	);
	if(job_allow==1) $("#job_allow__1").click();
	//album
	$("#album_allow__1").click(
		function(){
			$("#AllowAlbum").show();
		}
	);
	$("#album_allow__0").click(
		function(){
		$("#AllowAlbum").hide();
		}
	);
	if(album_allow==1) $("#album_allow__1").click();
	//market
	$("#market_allow__1").click(
		function(){
			$("#AllowMarket").show();
		}
	);
	$("#market_allow__0").click(
		function(){
		$("#AllowMarket").hide();
		}
	);
	if(market_allow==1) $("#market_allow__1").click();
	//companynews
	$("#companynews_allow__1").click(
		function(){
			$("#AllowCompanynews").show();
		}
	);
	$("#companynews_allow__0").click(
		function(){
		$("#AllowCompanynews").hide();
		}
	);
	if(companynews_allow==1) $("#companynews_allow__1").click();
})
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>