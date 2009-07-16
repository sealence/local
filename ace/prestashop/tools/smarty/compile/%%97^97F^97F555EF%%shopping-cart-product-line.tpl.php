<?php /* Smarty version 2.6.20, created on 2009-07-15 16:39:04
         compiled from /home/sealence/local/ace/prestashop/themes/ace/./shopping-cart-product-line.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/sealence/local/ace/prestashop/themes/ace/./shopping-cart-product-line.tpl', 3, false),array('modifier', 'intval', '/home/sealence/local/ace/prestashop/themes/ace/./shopping-cart-product-line.tpl', 21, false),array('modifier', 'count', '/home/sealence/local/ace/prestashop/themes/ace/./shopping-cart-product-line.tpl', 22, false),array('function', 'l', '/home/sealence/local/ace/prestashop/themes/ace/./shopping-cart-product-line.tpl', 12, false),array('function', 'convertPrice', '/home/sealence/local/ace/prestashop/themes/ace/./shopping-cart-product-line.tpl', 17, false),)), $this); ?>
<tr class="<?php if (($this->_foreach['productLoop']['iteration'] == $this->_foreach['productLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['productLoop']['iteration'] <= 1)): ?>first_item<?php endif; ?><?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?>alternate_item<?php endif; ?> cart_item">
	<td class="cart_product">
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-small.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a>
	</td>
	<td class="cart_description">
		<h5><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h5>
		<?php if ($this->_tpl_vars['product']['attributes']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a><?php endif; ?>
	</td>
	<td class="cart_ref"><?php if ($this->_tpl_vars['product']['reference']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['reference'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php else: ?>--<?php endif; ?></td>
	<td class="cart_availability">
		<?php if ($this->_tpl_vars['product']['active'] && ( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['stock_quantity'] > 0 )): ?>
			<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/available.gif" alt="<?php echo smartyTranslate(array('s' => 'Available'), $this);?>
" />
		<?php else: ?>
			<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/unavailable.gif" alt="<?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
" />
		<?php endif; ?>
	</td>
	<td class="cart_unit"><span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_wt']), $this);?>
</span></td>
	<td class="cart_quantity">
		<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?><?php echo $this->_tpl_vars['product']['customizationQuantityTotal']; ?>
<?php endif; ?>
		<?php if (! isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) || $this->_tpl_vars['quantityDisplayed'] > 0): ?>
			<a class="cart_quantity_delete" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?delete&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" class="icon" /></a>
		<p><?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php echo count($this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]); ?>
<?php else: ?><?php echo $this->_tpl_vars['product']['quantity']-$this->_tpl_vars['quantityDisplayed']; ?>
<?php endif; ?></p>
			<a class="cart_quantity_up" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_up.gif" alt="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" /></a><br />
			<a class="cart_quantity_down" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;op=down&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Subtract'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s' => 'Subtract'), $this);?>
" /></a>
		<?php endif; ?>
	</td>
	<td class="cart_total"><span class="price"><?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total_customization_wt']), $this);?>
<?php else: ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total_wt']), $this);?>
<?php endif; ?></span></td>
</tr>