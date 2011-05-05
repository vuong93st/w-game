<?php /* Smarty version 2.6.18, created on 2010-12-21 16:46:56
         compiled from job.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_trade_management']; ?>
 &raquo; <?php echo $this->_tpl_vars['_job']; ?>
</p>
</div>
<div id="rightTop"> 
    <h3><?php echo $this->_tpl_vars['_job']; ?>
</h3> 
    <ul class="subnav">
		<li><a class="btn1"><span><?php echo $this->_tpl_vars['_management']; ?>
</span></a></li>
		<li><a href="jobtype.php">Position Classification</a></li>
    </ul>
</div>
<div class="mrightTop"> 
    <div class="fontr"> 
        <form name="search_frm" id="SearchFrm" method="get">
        <input type="hidden" name="do" value="search" />
             <div>
				Keyword Position : <input class="queryInput" type="text" name="q" value="" /> 
                <input type="submit" name="search" id="Search" class="formbtn" value="<?php echo $this->_tpl_vars['_searching']; ?>
" /> 
            </div> 
        </form> 
    </div> 
    <div class="fontr"></div> 
</div> 
<div class="tdare">
  <form name="list_frm" id="ListFrm" action="" method="post">
  <table width="100%" cellspacing="0" class="dataTable" summary="<?php echo $this->_tpl_vars['_data_zone']; ?>
">
    <thead>
		<tr>
		  <th class="firstCell"><input type="checkbox" name="idAll" id="idAll" onclick="pbCheckAll(this,'id[]');" title="<?php echo $this->_tpl_vars['_select_switch']; ?>
"></th>
		  <th><label for="idAll">Job Title</label></th>
		  <th>Company Name</th>
		  <th><?php echo $this->_tpl_vars['_if_valid_n']; ?>
</th>
		  <th>Pub Date</td>
		  <th><?php echo $this->_tpl_vars['_action']; ?>
</th>
		</tr>
    </thead>
    <tbody>
		<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr class="tatr2">
		  <td class="firstCell"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="pbCheckItem(this,'idAll');" id="item_<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
		  <td><label for="item_<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['jobname']; ?>
</label><?php if ($this->_tpl_vars['item']['pubdate'] >= $this->_tpl_vars['today_timestamp']): ?>&nbsp;<img src="images/new.gif" /><?php endif; ?></td>
		  <td><?php echo $this->_tpl_vars['item']['companyname']; ?>
</td>
		  <td><?php echo $this->_tpl_vars['CheckStatus'][$this->_tpl_vars['item']['jobstatus']]; ?>
</td>
		  <td class="pb_datetime"><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</td>
		  <td class="handler">
           <ul id="handler_icon">
            <li><a class="btn_delete" href="job.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&do=del" title="<?php echo $this->_tpl_vars['_delete']; ?>
"><?php echo $this->_tpl_vars['_delete']; ?>
</a></li>
            <li><a class="btn_browse" href="job.php?do=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="View"><?php echo $this->_tpl_vars['_cp_view']; ?>
</a></li>
          </ul> 
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
" class="formbtn batchButton"/>
      <select name="pb_action" id="PbAction" onchange="javascript:document.list_frm.submit()">
        <option value="-1">Select<?php echo $this->_tpl_vars['_action']; ?>
</option>
        <optgroup label="<?php echo $this->_tpl_vars['_action']; ?>
 Datas">
        <option value="0">Audit</option>
        <option value="1">Audit by</option>
        <option value="2">Review without</option>
        <option value="none">Moderated</option>
        <option value="3">Invalid</option>
        </optgroup>
      </select>
    </div>
    <div class="pageLinks"><?php echo $this->_tpl_vars['ByPages']; ?>
</div>
    <div class="clear"/>
    </div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>