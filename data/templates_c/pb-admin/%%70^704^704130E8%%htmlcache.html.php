<?php /* Smarty version 2.6.18, created on 2010-12-21 15:36:32
         compiled from htmlcache.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="currentPosition">
	<p><?php echo $this->_tpl_vars['_your_current_position']; ?>
 <?php echo $this->_tpl_vars['_system_tool']; ?>
 &raquo; Cache</p>
</div>
<div id="rightTop"> 
    <h3>Cache</h3> 
    <ul class="subnav">
		<?php if ($_GET['do'] == 'clear'): ?>
	  	<li><a href="htmlcache.php"><?php echo $this->_tpl_vars['_updating']; ?>
</a></li>		
      	<li><a class="btn1" href="htmlcache.php?do=clear"><span><?php echo $this->_tpl_vars['_clearing']; ?>
</span></a></li>
        <?php else: ?>
	  	<li><a class="btn1" href="htmlcache.php"><span><?php echo $this->_tpl_vars['_updating']; ?>
</span></a></li>		
      	<li><a href="htmlcache.php?do=clear"><?php echo $this->_tpl_vars['_clearing']; ?>
</a></li>
        <?php endif; ?>
    </ul>
</div>
<div class="mrightTop"> 
	<?php if ($_GET['do'] == 'clear'): ?>
    <div class="fontl"> 
        <form name="edit_frm" id="EditFrm" method="post">
        <input type="hidden" name="do" value="clear" />
             <div class="left"> 
               <label for="memberCache"><input type="checkbox" name="data[type][]" id="memberCache" value="membercache" />Spatial Data Cache</label>
               <label for="dbCache"><input type="checkbox" name="data[type][]" id="dbCache" value="dbcache" />Data cache tags</label>
               <label for="dataCache"><input type="checkbox" name="data[type][]" id="dataCache" value="smartycache" checked="checked" />Template cache file</label>
               <label for="dataCompile"><input type="checkbox" name="data[type][]" id="dataCompile" value="smartycompile" />Template build files</label>
               <input type="submit" name="save" id="Save" class="formbtn" value="Clean up" /> 
            </div> 
        </form> 
    </div> 
    <?php else: ?>
    <div class="fontl"> 
        <form name="edit_frm" id="EditFrm" method="post">
        <input type="hidden" name="do" value="update" />
             <div class="left"> 
               <label for="dataTypeSetting"><input type="checkbox" name="data[type][]" id="dataTypeSetting" value="setting" checked="checked" />Basic data</label>
               <label for="dataTypeBasic"><input type="checkbox" name="data[type][]" id="dataTypeSetting1" value="setting1" checked="checked" />Extended Data</label>
               <label for="dataTypeArea"><input type="checkbox" name="data[type][]" id="dataTypeArea" value="area" checked="checked" />Regional data</label>
               <label for="dataTypeIndustry"><input type="checkbox" name="data[type][]" id="dataTypeIndustry" value="industry" checked="checked" />Industry Data</label>
               <label for="dataTypeOptions"><input type="checkbox" name="data[type][]" id="dataTypeOptions" value="options" /><?php echo $this->_tpl_vars['_options']; ?>
</label>
                <input type="submit" name="save" id="Save" class="formbtn" value="Update" /> 
            </div> 
        </form> 
    </div> 
    <?php endif; ?>
    <div class="fontr"></div> 
</div> 
<div class="tdare"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>