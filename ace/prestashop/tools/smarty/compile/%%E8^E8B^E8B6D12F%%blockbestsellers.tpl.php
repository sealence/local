<?php /* Smarty version 2.6.20, created on 2009-07-15 13:16:30
         compiled from /home/sealence/local/ace/prestashop/modules/blockbestsellers/blockbestsellers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/modules/blockbestsellers/blockbestsellers.tpl', 3, false),array('modifier', 'count', '/home/sealence/local/ace/prestashop/modules/blockbestsellers/blockbestsellers.tpl', 5, false),array('modifier', 'strip_tags', '/home/sealence/local/ace/prestashop/modules/blockbestsellers/blockbestsellers.tpl', 13, false),array('modifier', 'truncate', '/home/sealence/local/ace/prestashop/modules/blockbestsellers/blockbestsellers.tpl', 13, false),)), $this); ?>
<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="block products_block">
	<h4><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php"><?php echo smartyTranslate(array('s' => 'Top sellers','mod' => 'blockbestsellers'), $this);?>
</a></h4>
	<div class="block_content">
	<?php if (count($this->_tpl_vars['best_sellers']) > 0): ?>
		<ul class="product_images">
			<li><a href="<?php echo $this->_tpl_vars['best_sellers']['0']['link']; ?>
" title="<?php echo $this->_tpl_vars['best_sellers']['0']['legend']; ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['best_sellers']['0']['id_image']; ?>
-medium.jpg" alt="<?php echo $this->_tpl_vars['best_sellers']['0']['legend']; ?>
" /></a></li>
			<?php if (count($this->_tpl_vars['best_sellers']) > 1): ?><li><a href="<?php echo $this->_tpl_vars['best_sellers']['1']['link']; ?>
" title="<?php echo $this->_tpl_vars['best_sellers']['1']['legend']; ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['best_sellers']['1']['id_image']; ?>
-medium.jpg" alt="<?php echo $this->_tpl_vars['best_sellers']['1']['legend']; ?>
" /></a></li><?php endif; ?>
		</ul>
		<dl>
		<?php $_from = $this->_tpl_vars['best_sellers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['myLoop']['iteration']++;
?>
			<dt class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo $this->_tpl_vars['product']['name']; ?>
"><?php echo $this->_tpl_vars['product']['name']; ?>
</a></dt>
			<?php if ($this->_tpl_vars['product']['description_short']): ?><dd class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
</dd><?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</dl>
		<p><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php" title="<?php echo smartyTranslate(array('s' => 'All best sellers','mod' => 'blockbestsellers'), $this);?>
" class="button_large"><?php echo smartyTranslate(array('s' => 'All best sellers','mod' => 'blockbestsellers'), $this);?>
</a></p>
	<?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No best sellers at this time','mod' => 'blockbestsellers'), $this);?>
</p>
	<?php endif; ?>
	</div>
</div>
<!-- /MODULE Block best sellers -->