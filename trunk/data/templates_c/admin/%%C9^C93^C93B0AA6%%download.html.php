<?php /* Smarty version 2.6.18, created on 2011-05-03 23:57:45
         compiled from download.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fetch', 'download.html', 2, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_fetch(array('file' => "../scripts/date.js"), $this);?>

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
	<p></p>
</div>
<div id="rightTop"> 
    <h3>Thống kê giao dịch (<?php echo $this->_tpl_vars['TotalRequest']; ?>
 lượt tải)</h3> 
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" action="download.php" id="SearchFrm" method="get">
        <input type="hidden" name="do" value="search" />
             <div>
				
				<select class="querySelect" name="search_type">
				<option value="Số điện thoại">Số điện thoại</option>
				<option value="Mã Game" <?php if ($_GET['search_type'] == "Mã Game"): ?>selected="selected"<?php endif; ?>>Mã Game</option>
				</select>
								
				<input class="queryInput" type="text" name="q" value="<?php echo $this->_tpl_vars['keywork']; ?>
" onclick="javascript:this.value=''" /> 
				Nhà cung cấp :
				<!--
				<select class="querySelect" name="type_id">
				<option value="0">Chọn CP</option>
                <?php $_from = $this->_tpl_vars['TradeTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <option value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
				</select>
				-->
				
				<select class="querySelect" name="cp_id">
				<option value="">Chọn CP</option>
				<option value="Kraze" <?php if ($_GET['cp_id'] == 'Kraze'): ?>selected="selected"<?php endif; ?>>Kraze</option>
				<option value="Thinknet" <?php if ($_GET['cp_id'] == 'Thinknet'): ?>selected="selected"<?php endif; ?>>Thinknet</option>
				<option value="Team" <?php if ($_GET['cp_id'] == 'Team'): ?>selected="selected"<?php endif; ?>>Team Mobile</option>
				</select>
				
				Từ :
				
				<select class="querySelect" name="user_name">
				<option value="">Nơi yêu cầu</option>
				<option value="mgame" <?php if ($_GET['user_name'] == 'mgame'): ?>selected="selected"<?php endif; ?>>mgame</option>
				<option value="upro" <?php if ($_GET['user_name'] == 'upro'): ?>selected="selected"<?php endif; ?>>upro</option>
				<option value="other" <?php if ($_GET['user_name'] == 'other'): ?>selected="selected"<?php endif; ?>>other</option>
				</select>
				
<?php echo $this->_tpl_vars['_arrive_from']; ?>

				<input name="date1" id="date1" value="<?php echo $this->_tpl_vars['fromdate']; ?>
" style="width:80px;" /><span class="btn_calendar" id="calendar-date1"></span><?php echo $this->_tpl_vars['_arrive_to']; ?>
<input name="date2" value="<?php echo $this->_tpl_vars['todate']; ?>
" id="date2" style="width:80px;"/><span class="btn_calendar" id="calendar-date2"></span>

								
				<select class="querySelect" name="display_pg">
				<option value="0"><?php echo $this->_tpl_vars['_eve_page_display']; ?>
</option>
				<option value="10" <?php if ($_GET['display_pg'] == 10): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['_eve_page_display']; ?>
10</option>
				<option value="20" <?php if ($_GET['display_pg'] == 20): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['_eve_page_display']; ?>
20</option>
				<option value="30" <?php if ($_GET['display_pg'] == 30): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['_eve_page_display']; ?>
30</option>
				</select>
                <input type="submit" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
			<div></div>
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare" style="margin-top:30px">
  <form name="list_frm" id="ListFrm" action="download.php" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onClick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll">Số điện thoại</label></th>
		  <th>Điện thoại</th>
  		  <th>Mã yêu cầu</th>
		  <th>Mã game</th>
		  <th>Mã CP</th>
		  <th>Mã game CP</th>
		  <th>Đường dẫn game</th>
		  <th>Ngày tạo</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['adzone'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['adzone']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['adzone']['iteration']++;
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onClick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['msisdn']; ?>
"><?php echo $this->_tpl_vars['item']['msisdn']; ?>
</label></td>
		  <td><?php echo $this->_tpl_vars['item']['device_brand_name']; ?>
 <?php echo $this->_tpl_vars['item']['device_model_name']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['req_id']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['game_id']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['item']['cp_id']; ?>

		  <td><?php echo $this->_tpl_vars['item']['cp_game_id']; ?>

		  <td>
				<div id="info<?php echo $this->_tpl_vars['item']['Id']; ?>
" style="display:none;"><?php echo $this->_tpl_vars['item']['content']; ?>
</div>
				<?php if ($this->_tpl_vars['item']['content'] != ''): ?>&nbsp;<a href="#info<?php echo $this->_tpl_vars['item']['Id']; ?>
" rel="facebox"><img src="images/right.gif" title="<?php echo $this->_tpl_vars['item']['content']; ?>
"/></a><?php endif; ?>
		  </td>
		  <td><?php echo $this->_tpl_vars['item']['create_on']; ?>
</td>

		</tr>
		<?php endforeach; else: ?>
		<tr class="no_data info">
		  <td colspan="6"><?php echo $this->_tpl_vars['_no_datas']; ?>
</td>
		</tr>
		<?php endif; unset($_from); ?>
    </tbody>
	</table>
	<div id="dataFuncs" title="<?php echo $this->_tpl_vars['_action_zone']; ?>
">
    <div class="left paddingT15" id="batchAction">
      <input type="submit" name="del" value="<?php echo $this->_tpl_vars['_delete']; ?>
" style="width:120px;" class="formbtn batchButton" />
    </div>
    <div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
    <div class="clear"/>
    </div>
	</form>
</div>
<script>
    Calendar.setup({
        trigger    : "calendar-date1",
		animation  : false,
        inputField : "date1",
		onSelect   : function() { this.hide() }
    });
    Calendar.setup({
        trigger    : "calendar-date2",
		animation  : false,
        inputField : "date2",
		onSelect   : function() { this.hide() }
    });
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>