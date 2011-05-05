<?php /* Smarty version 2.6.18, created on 2010-12-21 15:33:49
         compiled from welcome.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'welcome.html', 40, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['Charset']; ?>
" />
<title><?php echo $this->_tpl_vars['_welcome_to_cp']; ?>
</title>
<base target="_blank" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script src="../scripts/jquery/facebox.js" type="text/javascript"></script>
<link href="../images/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script>
function setUpdateAlert(d)
{
$.ajax({
    url: 'home.php?do=set_update_alert&type='+d,
    type: 'GET',
    dataType: 'html',
    timeout: 1000,
    error: function(){
        alert('Error loading XML document');
    },
    success: function(data){
        $.facebox.close();
    }
});
}
</script>
<?php if ($this->_tpl_vars['hasNewVersion']): ?>
<script>
jQuery(document).ready(function($) {
	$.facebox.settings.loadingImage = '<?php echo $this->_tpl_vars['SiteUrl']; ?>
images/facebox/loading.gif'; 
	$.facebox('<?php echo $this->_tpl_vars['VersionInfo']; ?>
'+"<div align='center'><input type='button' id='NoUpdateAlert' value='<?php echo $this->_tpl_vars['_alert_no']; ?>
' onclick='setUpdateAlert(1);'>&nbsp;<input type='button' id='AlertAfterWeek' value='<?php echo $this->_tpl_vars['_alert_after_week']; ?>
' onclick='setUpdateAlert(7);'>&nbsp;<input type='button' id='AlertAfterWeek' value='<?php echo $this->_tpl_vars['_close']; ?>
' onclick='$.facebox.close();'></div>");
})
</script>
<?php endif; ?>
</head>
<body>
<div id="rightWelcome">
	<p>
		<strong>Hi，<?php echo $this->_tpl_vars['current_adminer']; ?>
，Welcome to <?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['_control_pannel']; ?>
</strong>Today：<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
，Last login time：<?php echo $this->_tpl_vars['item']['last_login']; ?>
，Last login ip：<?php echo $this->_tpl_vars['item']['last_ip']; ?>

	</p>
</div>
<dl id="rightCon">
<dt>Secure tips</dt>
<dd>
    <ul>
       <li>Plase save <span class="red">the secure codes</span>，if you want reset please visit "<a href="setting.php?do=auth" target="_self"><span class="bold"><?php echo $this->_tpl_vars['_setting_global']; ?>
 - secure</span></a>" and recover it.</li>
       <li>If you want to enable <span class="red">update alert</span> function，visit "<a href="javascript:void(0);" onclick="setUpdateAlert(0);" target="_self"><span class="bold">set alert</span></a>"  and refresh the page.</li>
       <li>
			<span><a href="member.php?do=search&member[status]=0" target="_self">Uncheck members</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['member']; ?>
)</em></span>
			<span><a href="company.php?do=search&status=0" target="_self">Uncheck companies</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['company']; ?>
)</em></span>
			<span><a href="offer.php?do=search&status=0" target="_self">Uncheck offers</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['trade']; ?>
)</em></span>
			<span><a href="product.php?do=search&product[status]=0" target="_self">Uncheck products</a><em>(<?php echo $this->_tpl_vars['TotalAmounts']['product']; ?>
)</em></span>
	   </li>
    </ul>
</dd>
<dt><?php echo $this->_tpl_vars['_administrator']; ?>
 notes</dt>
<dd>
    <ul>
      <form method="post" action="adminnote.php" id="EditFrm" name="edit_frm" target="_self">
        <li> Content:<input type="text" name="data[adminnote][title]" value="" />&nbsp;<input class="formbtn" type="submit" name="save" value="<?php echo $this->_tpl_vars['_save']; ?>
" /></li>
      </form>
   </ul>
</dd>
<dt>System information</dt>
<dd>
    <table>
        <tr>
            <th>Server:</th>
            <td><?php echo $this->_tpl_vars['item']['operatingsystem']; ?>
</td>
            <th>WEB Server:</th>
            <td><?php echo $this->_tpl_vars['item']['software']; ?>
</td>
        </tr>
        <tr>
            <th>PHP Version:</th>
            <td><?php echo $this->_tpl_vars['item']['PhpVersion']; ?>
</td>
            <th>MYSQL Version:</th>
            <td><?php echo $this->_tpl_vars['item']['MysqlVersion']; ?>
</td>
        </tr>
        <tr>
            <th>PHPB2B Version:</th>
            <td><a href="<?php echo $this->_tpl_vars['SupportUrl']; ?>
" title="check update" target="_blank"><span class="red"><?php echo $this->_tpl_vars['item']['PBVersion']; ?>
</span></a></td>
            <th>Install Date:</th>
            <td><?php echo $this->_tpl_vars['item']['InstallDate']; ?>
</td>
        </tr>
        <tr>
            <th>Used<?php echo $this->_tpl_vars['_database']; ?>
:</th>
            <td><?php echo $this->_tpl_vars['item']['DatabaseSize']; ?>
</td>
            <th>GD Support:</th>
            <td><?php echo $this->_tpl_vars['item']['GDSupports']; ?>
</td>
        </tr>
    </table>
</dd>
<dt>About <?php echo $this->_tpl_vars['_soft_name']; ?>
</dt>
<dd>
    <table>
        <tr>
            <th>Get Helps：</th>
            <td><a href="http://bbs.phpb2b.com/">http://bbs.phpb2b.com/</a></td>
        </tr>
    </table>
</dd>
</dl>
</body>
</html>