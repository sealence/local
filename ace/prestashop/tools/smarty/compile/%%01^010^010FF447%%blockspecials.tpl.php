<?php /* Smarty version 2.6.20, created on 2009-07-31 13:28:59
         compiled from /var/www/prestashop/modules/blockspecials/blockspecials.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/modules/blockspecials/blockspecials.tpl', 3, false),array('function', 'displayWtPrice', '/var/www/prestashop/modules/blockspecials/blockspecials.tpl', 12, false),array('modifier', 'escape', '/var/www/prestashop/modules/blockspecials/blockspecials.tpl', 8, false),)), $this); ?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<h4><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title="<?php echo smartyTranslate(array('s' => 'Specials','mod' => 'blockspecials'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Specials','mod' => 'blockspecials'), $this);?>
</a></h4>
	<div class="block_content">
<?php if ($this->_tpl_vars['special']): ?>
		<ul class="products">
			<li class="product_image">
				<a href="<?php echo $this->_tpl_vars['special']['link']; ?>
"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['special']['link_rewrite'],$this->_tpl_vars['special']['id_image'],'medium'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" height="<?php echo $this->_tpl_vars['mediumSize']['height']; ?>
" width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a>
			</li>
			<li>
				<h5><a href="<?php echo $this->_tpl_vars['special']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['special']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h5>
				<span class="price-discount"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price_without_reduction']), $this);?>
</span>
				<?php if ($this->_tpl_vars['special']['reduction_percent']): ?><span class="reduction">(-<?php echo $this->_tpl_vars['special']['reduction_percent']; ?>
%)</span><?php endif; ?>
				<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?><span class="price"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price']), $this);?>
</span><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx'), $this);?>
<?php endif; ?><?php endif; ?>
				<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?><br /><?php endif; ?>
				<?php if ($this->_tpl_vars['priceDisplay']): ?><span class="price"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['special']['price_tax_exc']), $this);?>
</span><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
<?php endif; ?><?php endif; ?>
			</li>
		</ul>
		<p>
			<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php" title="<?php echo smartyTranslate(array('s' => 'All specials','mod' => 'blockspecials'), $this);?>
" class="button"><?php echo smartyTranslate(array('s' => 'All specials','mod' => 'blockspecials'), $this);?>
</a>
		</p>
<?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No specials at this time','mod' => 'blockspecials'), $this);?>
</p>
<?php endif; ?>
	</div>
</div>
<!-- /MODULE Block specials -->