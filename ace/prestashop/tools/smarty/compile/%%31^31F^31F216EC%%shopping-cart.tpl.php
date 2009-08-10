<?php /* Smarty version 2.6.20, created on 2009-07-31 17:30:15
         compiled from /var/www/prestashop/themes/prestashop/shopping-cart.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/themes/prestashop/shopping-cart.tpl', 7, false),array('function', 'convertPrice', '/var/www/prestashop/themes/prestashop/shopping-cart.tpl', 65, false),array('modifier', 'escape', '/var/www/prestashop/themes/prestashop/shopping-cart.tpl', 35, false),array('modifier', 'count', '/var/www/prestashop/themes/prestashop/shopping-cart.tpl', 46, false),array('modifier', 'intval', '/var/www/prestashop/themes/prestashop/shopping-cart.tpl', 164, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your shopping cart'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Shopping cart summary'), $this);?>
</h2>

<?php $this->assign('current_step', 'summary'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (isset ( $this->_tpl_vars['empty'] )): ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'Your shopping cart is empty.'), $this);?>
</p>

<?php else: ?>
<?php if (isset ( $this->_tpl_vars['lastProductAdded'] ) && $this->_tpl_vars['lastProductAdded']): ?>
	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
		<?php if ($this->_tpl_vars['product']['id_product'] == $this->_tpl_vars['lastProductAdded']['id_product'] && ( ! $this->_tpl_vars['product']['id_product_attribute'] || ( $this->_tpl_vars['product']['id_product_attribute'] == $this->_tpl_vars['lastProductAdded']['id_product_attribute'] ) )): ?>
			<table class="std cart_last_product">
				<thead>
					<tr>
						<th class="cart_product first_item">&nbsp;</th>
						<th class="cart_description item"><?php echo smartyTranslate(array('s' => 'Last added product'), $this);?>
</th>
						<th class="cart_total last_item">&nbsp;</th>
					</tr>
				</thead>
			</table>
			<table class="cart_last_product_content">
				<tr>
					<td class="cart_product"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'small'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></td>
					<td class="cart_description">
						<h5><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h5>
						<?php if ($this->_tpl_vars['product']['attributes']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a><?php endif; ?>
					</td>
				</tr>
			</table>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<p>
	<?php echo smartyTranslate(array('s' => 'Your shopping cart contains'), $this);?>
 <?php echo count($this->_tpl_vars['products']); ?>
 <?php if (count($this->_tpl_vars['products']) > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?>
</p>
<div id="order-detail-content" class="table_block">
	<table id="cart_summary" class="std">
		<thead>
			<tr>
				<th class="cart_product first_item"><?php echo smartyTranslate(array('s' => 'Product'), $this);?>
</th>
				<th class="cart_description item"><?php echo smartyTranslate(array('s' => 'Description'), $this);?>
</th>
				<th class="cart_ref item"><?php echo smartyTranslate(array('s' => 'Ref.'), $this);?>
</th>
				<th class="cart_availability item"><?php echo smartyTranslate(array('s' => 'Avail.'), $this);?>
</th>
				<th class="cart_unit item"><?php echo smartyTranslate(array('s' => 'Unit price'), $this);?>
</th>
				<th class="cart_quantity item"><?php echo smartyTranslate(array('s' => 'Qty'), $this);?>
</th>
				<th class="cart_total last_item"><?php echo smartyTranslate(array('s' => 'Total'), $this);?>
</th>
			</tr>
		</thead>
		<tfoot>
			<?php if ($this->_tpl_vars['priceDisplay']): ?>
				<tr class="cart_total_price">
					<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total products (tax excl.):'), $this);?>
</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_products']), $this);?>
</td>
				</tr>
			<?php endif; ?>
			<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
				<tr class="cart_total_price">
					<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total products (tax incl.):'), $this);?>
</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_products_wt']), $this);?>
</td>
				</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['total_discounts'] != 0): ?>
				<?php if ($this->_tpl_vars['priceDisplay']): ?>
					<tr class="cart_total_voucher">
						<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total vouchers (tax excl.):'), $this);?>
</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_discounts_tax_exc']), $this);?>
</td>
					</tr>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<tr class="cart_total_voucher">
						<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total vouchers (tax incl.):'), $this);?>
</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_discounts']), $this);?>
</td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['total_wrapping'] > 0): ?>
				<?php if ($this->_tpl_vars['priceDisplay']): ?>
					<tr class="cart_total_voucher">
						<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total gift-wrapping (tax excl.):'), $this);?>
</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_wrapping_tax_exc']), $this);?>
</td>
					</tr>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<tr class="cart_total_voucher">
						<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total gift-wrapping (tax incl.):'), $this);?>
</td>
						<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_wrapping']), $this);?>
</td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['shippingCost'] > 0): ?>
				<?php if ($this->_tpl_vars['priceDisplay']): ?>
					<tr class="cart_total_delivery">
						<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total shipping (tax excl.):'), $this);?>
</td>
						<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['shippingCostTaxExc']), $this);?>
</td>
					</tr>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
					<tr class="cart_total_delivery">
						<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total shipping (tax incl.):'), $this);?>
</td>
						<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['shippingCost']), $this);?>
</td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['priceDisplay']): ?>
				<tr class="cart_total_price">
					<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total (tax excl.):'), $this);?>
</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_price_without_tax']), $this);?>
</td>
				</tr>
				<tr class="cart_total_voucher">
					<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total tax:'), $this);?>
</td>
					<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_tax']), $this);?>
</td>
				</tr>
			<?php endif; ?>
			<tr class="cart_total_price">
				<td colspan="6"><?php echo smartyTranslate(array('s' => 'Total (tax incl.):'), $this);?>
</td>
				<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_price']), $this);?>
</td>
			</tr>
			<?php if ($this->_tpl_vars['free_ship'] > 0): ?>
			<tr class="cart_free_shipping">
				<td colspan="6" style="white-space: normal;"><?php echo smartyTranslate(array('s' => 'Remaining amount to be added to your cart in order to obtain free shipping:'), $this);?>
</td>
				<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['free_ship']), $this);?>
</td>
			</tr>
			<?php endif; ?>
		</tfoot>
		<tbody>
		<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['productLoop']['iteration']++;
?>
			<?php $this->assign('productId', $this->_tpl_vars['product']['id_product']); ?>
			<?php $this->assign('productAttributeId', $this->_tpl_vars['product']['id_product_attribute']); ?>
			<?php $this->assign('quantityDisplayed', 0); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./shopping-cart-product-line.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?>
				<?php $_from = $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_customization'] => $this->_tpl_vars['customization']):
?>
					<tr class="alternate_item cart_item">
						<td colspan="5">
							<?php $_from = $this->_tpl_vars['customization']['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['datas']):
?>
								<?php if ($this->_tpl_vars['type'] == $this->_tpl_vars['CUSTOMIZE_FILE']): ?>
									<div class="customizationUploaded">
										<ul class="customizationUploaded">
											<?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picture']):
?><li><img src="<?php echo $this->_tpl_vars['pic_dir']; ?>
<?php echo $this->_tpl_vars['picture']['value']; ?>
_small" alt="" class="customizationUploaded" /></li><?php endforeach; endif; unset($_from); ?>
										</ul>
									</div>
								<?php elseif ($this->_tpl_vars['type'] == $this->_tpl_vars['CUSTOMIZE_TEXTFIELD']): ?>
									<ul class="typedText">
										<?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['typedText'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['typedText']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['textField']):
        $this->_foreach['typedText']['iteration']++;
?><li><?php echo smartyTranslate(array('s' => 'Text #'), $this);?>
<?php echo ($this->_foreach['typedText']['iteration']-1)+1; ?>
<?php echo smartyTranslate(array('s' => ':'), $this);?>
 <?php echo $this->_tpl_vars['textField']['value']; ?>
</li><?php endforeach; endif; unset($_from); ?>
									</ul>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</td>
						<td class="cart_quantity">
							<a class="cart_quantity_delete" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?delete&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;id_customization=<?php echo $this->_tpl_vars['id_customization']; ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Delete this customization'), $this);?>
" class="icon" /></a>
							<p><?php echo $this->_tpl_vars['customization']['quantity']; ?>
</p>
							<a class="cart_quantity_up" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;id_customization=<?php echo $this->_tpl_vars['id_customization']; ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_up.gif" alt="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" /></a><br />
							<a class="cart_quantity_down" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;id_customization=<?php echo $this->_tpl_vars['id_customization']; ?>
&amp;op=down&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Substract'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s' => 'Substract'), $this);?>
" /></a>
						</td>
						<td class="cart_total"></td>
					</tr>
					<?php $this->assign('quantityDisplayed', $this->_tpl_vars['quantityDisplayed']+$this->_tpl_vars['customization']['quantity']); ?>
				<?php endforeach; endif; unset($_from); ?>
								<?php if ($this->_tpl_vars['product']['quantity']-$this->_tpl_vars['quantityDisplayed'] > 0): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./shopping-cart-product-line.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	<?php if ($this->_tpl_vars['discounts']): ?>
		<tbody>
		<?php $_from = $this->_tpl_vars['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['discountLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['discountLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['discount']):
        $this->_foreach['discountLoop']['iteration']++;
?>
			<tr class="cart_discount <?php if (($this->_foreach['discountLoop']['iteration'] == $this->_foreach['discountLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['discountLoop']['iteration'] <= 1)): ?>first_item<?php else: ?>item<?php endif; ?>">
				<td class="cart_discount_name" colspan="2"><?php echo $this->_tpl_vars['discount']['name']; ?>
</td>
				<td class="cart_discount_description" colspan="3"><?php echo $this->_tpl_vars['discount']['description']; ?>
</td>
				<td class="cart_discount_delete"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?deleteDiscount=<?php echo $this->_tpl_vars['discount']['id_discount']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" class="icon" /></a></td>
				<td class="cart_discount_price"><span class="price-discount">
					<?php if ($this->_tpl_vars['discount']['value_real'] > 0): ?>
						<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['discount']['value_real']*-1), $this);?>
<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx'), $this);?>
<br /><?php endif; ?><?php endif; ?>
						<?php if ($this->_tpl_vars['priceDisplay']): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['discount']['value_tax_exc']*-1), $this);?>
<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
<?php endif; ?><?php endif; ?>
					<?php endif; ?>
				</span></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	<?php endif; ?>
	</table>
</div>

<?php if ($this->_tpl_vars['voucherAllowed']): ?>
<div id="cart_voucher" class="table_block">
	<?php if ($this->_tpl_vars['errors_discount']): ?>
		<ul class="error">
		<?php $_from = $this->_tpl_vars['errors_discount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
?>
			<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endif; ?>
	<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" method="post" id="voucher">
		<fieldset>
			<h4><?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
</h4>
			<p>
				<label for="discount_name"><?php echo smartyTranslate(array('s' => 'Code:'), $this);?>
</label>
				<input type="text" id="discount_name" name="discount_name" value="<?php if ($this->_tpl_vars['discount_name']): ?><?php echo $this->_tpl_vars['discount_name']; ?>
<?php endif; ?>" />
			</p>
			<p class="submit"><input type="submit" name="submitDiscount" value="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" class="button" /></p>
		</fieldset>
	</form>
</div>
<?php endif; ?>
<?php echo $this->_tpl_vars['HOOK_SHOPPING_CART']; ?>

<?php if (( $this->_tpl_vars['carrier']->id && ! $this->_tpl_vars['virtualCart'] ) || $this->_tpl_vars['delivery']->id || $this->_tpl_vars['invoice']->id): ?>
<div class="order_delivery">
	<?php if ($this->_tpl_vars['delivery']->id): ?>
	<ul id="delivery_address" class="address item">
		<li class="address_title"><?php echo smartyTranslate(array('s' => 'Delivery address'), $this);?>
</li>
		<?php if ($this->_tpl_vars['delivery']->company): ?><li class="address_company"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_address1"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<?php if ($this->_tpl_vars['delivery']->address2): ?><li class="address_address2"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_city"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_country"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	</ul>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['invoice']->id): ?>
	<ul id="invoice_address" class="address alternate_item">
		<li class="address_title"><?php echo smartyTranslate(array('s' => 'Invoice address'), $this);?>
</li>
		<?php if ($this->_tpl_vars['invoice']->company): ?><li class="address_company"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_address1"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<?php if ($this->_tpl_vars['invoice']->address2): ?><li class="address_address2"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li><?php endif; ?>
		<li class="address_city"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<li class="address_country"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	</ul>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['carrier']->id && ! $this->_tpl_vars['virtualCart']): ?>
	<div id="order_carrier">
		<h4><?php echo smartyTranslate(array('s' => 'Carrier:'), $this);?>
</h4>
		<?php if (isset ( $this->_tpl_vars['carrierPicture'] )): ?><img src="<?php echo $this->_tpl_vars['img_ship_dir']; ?>
<?php echo $this->_tpl_vars['carrier']->id; ?>
.jpg" alt="<?php echo smartyTranslate(array('s' => 'Carrier'), $this);?>
" /><?php endif; ?>
		<span><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>
<p class="cart_navigation">
	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1" class="exclusive" title="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Next'), $this);?>
 &raquo;</a>
	<a href="<?php if ($_SERVER['HTTP_REFERER'] && strstr ( $_SERVER['HTTP_REFERER'] , 'order.php' )): ?><?php echo $this->_tpl_vars['base_dir']; ?>
index.php<?php else: ?><?php echo ((is_array($_tmp=$_SERVER['HTTP_REFERER'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" class="button_large" title="<?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
">&laquo; <?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
</a>
</p>
<p class="clear"><br /><br /></p>
<p class="cart_navigation_extra">
	<?php echo $this->_tpl_vars['HOOK_SHOPPING_CART_EXTRA']; ?>

</p>
<?php endif; ?>