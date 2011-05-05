<?php /* Smarty version 2.6.18, created on 2011-04-22 02:40:50
         compiled from menu.html */ ?>
<table class="menu_nav" >
	<tr>
	</tr>
	<tr>
	<td>
		<?php if ($this->_tpl_vars['menu']['offer']): ?>
		<table class="menu_width167">
		<tr>
		  <td>
          <table class="menu_nav">
			  <tr>
				<td width="30"><img src="images/left_pic1.gif" width=30 height=35 alt=""></td>
				<td background="images/left_bg1.gif" class="title_bar" onclick="if($('#MenuTrade').length>0) $('#MenuTrade').toggle();"><a name="menu_top"></a><?php echo $this->_tpl_vars['_business_information']; ?>
</td>
				<td width="55"><img src="images/left_bg11.gif" width=55 height=35 alt=""></td>
			  </tr>
		  </table>
          </td>
		</tr>
		<tr>
		  <td align="center" background="images/left_mid.gif">
          <table class="menu_nav_content" id="MenuTrade">
			  <tr>
				<th><img src="images/sell_add.gif"></th>
				<td><a href="offer.php?do=edit"><?php echo $this->_tpl_vars['_release_supply']; ?>
</a></td>
			  </tr>
			  <tr>
				<th><img src="images/buy.gif"></th>
				<td><a href="offer.php"><?php echo $this->_tpl_vars['_our_offer']; ?>
</a></td>
			  </tr>
			  <tr>
				<th><img src="images/favor.gif"></th>
				<td><a href="favor.php"><?php echo $this->_tpl_vars['_our_favorites']; ?>
</a></td>
			  </tr>
			  <tr>
				<th><img src="images/sell.gif" width="14" height="14"></th>
				<td><a href="stat.php"><?php echo $this->_tpl_vars['_buy_statistics']; ?>
</a></td>
			  </tr>
			<tr>
			  <th><img src="images/message_in.gif" /></td>
			  <td><a href="pms.php?type=inquery"><?php echo $this->_tpl_vars['_customer_inquiry']; ?>
</a></td>
			</tr>		  
		  </table>
         </td>
		</tr>
	  </table>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['menu']['product']): ?>
		<table class="menu_width167">
		  <tr>
			<td>
             <table class="menu_nav">
				<tr>
				  <td width="30"><img src="images/left_pic2.gif" width=30 height=35 alt=""></td>
				  <td background="images/left_bg2.gif" class="title_bar" onclick="if($('#MenuProduct').length>0) $('#MenuProduct').toggle();"><a name="p"></a><?php echo $this->_tpl_vars['_information_management']; ?>
</td>
				  <td width="55"><img src="images/left_bg21.gif" width=55 height=35 alt=""></td>
				</tr>
			</table></td>
		  </tr>
		  <tr>
			<td align="center" background="images/left_mid.gif">
			<table class="menu_nav_content" id="MenuProduct">
				<tr>
				  <th><img src="images/product.gif"></th>
				  <td><a href="product.php?do=edit"><?php echo $this->_tpl_vars['_release_products']; ?>
</a> </td>
				</tr>
				<tr>
				  <th><img src="images/product2.gif"></th>
				  <td><a href="product.php"><?php echo $this->_tpl_vars['_our_productse']; ?>
</a></td>
				</tr>
				<tr>
				  <th><img src="images/cal.gif"></th>
				  <td><a href="price.php"><?php echo $this->_tpl_vars['_my_product_price']; ?>
</a></td>
				</tr>
				<tr>
				  <th><img src="images/sort.gif"></th>
				  <td><a href="producttype.php"><?php echo $this->_tpl_vars['_categories_management']; ?>
</a></td>
				</tr>
				<tr>
				  <th><img src="images/brand.gif"></th>
				  <td><a href="brand.php"><?php echo $this->_tpl_vars['_brand_manage']; ?>
</a></td>
				</tr>
			</table></td>
		  </tr>
		</table>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['menu']['company']): ?>
		<table class="menu_width167">
		  <tr>
			<td> <table class="menu_nav">
				<tr>
				  <td width="30"><img src="images/left_pic3.gif" width=30 height=35 alt=""></td>
				  <td background="images/left_bg2.gif" class="title_bar" onclick="if($('#MenuCompany').length>0) $('#MenuCompany').toggle();"><?php echo $this->_tpl_vars['_company_information']; ?>
</td>
				  <td width="55"><img src="images/left_bg21.gif" width=55 height=35 alt=""></td>
				</tr>
			</table></td>
		  </tr>
		  <tr>
			<td align="center" background="images/left_mid.gif">
			<table class="menu_nav_content" id="MenuCompany" style="<?php echo $this->_tpl_vars['MenuHide']; ?>
">
				<tr> 
				  <th><img src="images/company.gif"></th>
				  <td><a href="company.php"><?php echo $this->_tpl_vars['_basic_information']; ?>
</a> </td>
				</tr>
				<tr> 
				  <th><img src="images/album.gif"></th>
				  <td><a href="album.php"><?php echo $this->_tpl_vars['_company_album']; ?>
</a> </td>
				</tr>
				<tr> 
				  <th><img src="images/contact.gif"></th>
				  <td><a href="card.php"><?php echo $this->_tpl_vars['_card_information']; ?>
</a> </td>
				</tr>
				<tr> 
				  <th><img src="images/alert.gif"></th>
				  <td><a href="news.php"><?php echo $this->_tpl_vars['_company_news']; ?>
</a></td>
				</tr>
				<tr>
				  <th><img src="images/hr.gif" /></th>
				  <td><a href="job.php"><?php echo $this->_tpl_vars['_hr']; ?>
</a></td>
				<tr> 
				<tr> 
				  <th><img src="images/link.gif"></th>
				  <td><a href="link.php" title="<?php echo $this->_tpl_vars['_friendlink']; ?>
"><?php echo $this->_tpl_vars['_link_exchange']; ?>
</a></td>
				</tr>
			  </table></td>
		  </tr>
		</table>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['menu']['pms']): ?>
		<table class="menu_width167">
		  <tr>
			<td> <table class="menu_nav">
				<tr>
				  <td width="30"><img src="images/left_pic4.gif" width=30 height=35 alt=""></td>
				  <td background="images/left_bg2.gif" class="title_bar" onclick="if($('#MenuPMS').length>0) $('#MenuPMS').toggle();"><?php echo $this->_tpl_vars['_exchange_information']; ?>
</td>
				  <td width="55"><img src="images/left_bg21.gif" width=55 height=35 alt=""></td>
				</tr>
			</table></td>
		  </tr>
		  <tr>
			<td align="center" background="images/left_mid.gif">
			<table class="menu_nav_content" id="MenuPMS" style="<?php echo $this->_tpl_vars['MenuHide']; ?>
">
				<tr>
				  <th><img src="images/message_out.gif" /></th>
				  <td><a href="pms.php"><?php echo $this->_tpl_vars['_sms']; ?>
</a></td>
				</tr>			
				<tr>
				  <th><img src="images/message.gif"/></th>
				  <td><a href="pms.php?do=send"><?php echo $this->_tpl_vars['_send_message']; ?>
</a></td>
				</tr>
			</table>
			</td>
		  </tr>
		</table>
		<?php endif; ?>
		<table class="menu_width167">
		  <tr>
			<td> <table class="menu_nav">
				<tr>
				  <td width="30"><img src="images/self_service.gif" width=30 height=35 alt=""></td>
				  <td background="images/left_bg2.gif" class="title_bar" onclick="if($('#MenuService').length>0) $('#MenuService').toggle();"><?php echo $this->_tpl_vars['_self_service']; ?>
</td>
				  <td width="55"><img src="images/left_bg21.gif" width=55 height=35 alt=""></td>
				</tr>
			</table></td>
		  </tr>
		  <tr>
			<td align="center" background="images/left_mid.gif">
			<table class="menu_nav_content" id="MenuService" style="<?php echo $this->_tpl_vars['MenuHide']; ?>
">
				<tr>
				  <th><img src="images/news.gif" /></th>
				  <td><a href="ad.php"><?php echo $this->_tpl_vars['_site_advertising']; ?>
</a></td>
				<tr> 
				  <th><img src="images/style.gif"></th>
				  <td><a href="space.php"><?php echo $this->_tpl_vars['_diy_website']; ?>
</a></td>
				</tr>
			</table>
			</td>
		  </tr>
		</table>
		<?php if ($this->_tpl_vars['menu']['basic']): ?>
	   <table class="menu_width167">
		  <tr>
			<td><table class="menu_nav">
				<tr>
				  <td width="30"><img src="images/left_pic7.gif" width=30 height=35 alt=""></td>
				  <td background="images/left_bg2.gif" class="title_bar" onclick="if($('#MenuBasic').length>0) $('#MenuBasic').toggle();"><?php echo $this->_tpl_vars['_system_settings']; ?>
</td>
				  <td width="55"><img src="images/left_bg21.gif" width=55 height=35 alt=""></td>
				</tr>
			</table></td>
		  </tr>
		  <tr>
			<td align="center" background="images/left_mid.gif">
			<table class="menu_nav_content" id="MenuBasic">
				<tr>
				  <th><img src="images/personals.gif"></th>
				  <td><a href="personal.php"><?php echo $this->_tpl_vars['_profile']; ?>
</a></td>
				</tr>
				<tr> 
				  <th><img src="images/password.gif"></th>
				  <td><a href="changepass.php"><?php echo $this->_tpl_vars['_change_password']; ?>
</a></td>
				</tr>
				<tr> 
				  <th><img src="images/code.gif"></th>
				  <td><a href="invite.php"><?php echo $this->_tpl_vars['_our_invitation_code']; ?>
</a></td>
				</tr>
			</table></td>
		  </tr>
		  <tr>
			<td><div class="backtop"><a href="javascript:;" onclick="$('html, body').animate({scrollTop: '0px'}, 300);return false;"><?php echo $this->_tpl_vars['_go_top']; ?>
</a></div></td>
		  </tr>
	  </table>
		<?php endif; ?>
	  </td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
</table>