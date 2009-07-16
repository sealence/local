<?php /* Smarty version 2.6.20, created on 2009-07-15 13:16:29
         compiled from /home/sealence/local/ace/prestashop/modules/blocknewproducts/blocknewproducts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/modules/blocknewproducts/blocknewproducts.tpl', 3, false),array('modifier', 'escape', '/home/sealence/local/ace/prestashop/modules/blocknewproducts/blocknewproducts.tpl', 7, false),array('modifier', 'strip_tags', '/home/sealence/local/ace/prestashop/modules/blocknewproducts/blocknewproducts.tpl', 13, false),array('modifier', 'truncate', '/home/sealence/local/ace/prestashop/modules/blocknewproducts/blocknewproducts.tpl', 13, false),)), $this); ?>
<!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<h4><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title="<?php echo smartyTranslate(array('s' => 'New products','mod' => 'blocknewproducts'), $this);?>
"><?php echo smartyTranslate(array('s' => 'New products','mod' => 'blocknewproducts'), $this);?>
</a></h4>
	<div class="block_content">
	<?php if ($this->_tpl_vars['new_products']): ?>
		<ul class="product_images">
			<li><a href="<?php echo $this->_tpl_vars['new_products']['0']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['0']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['new_products']['0']['id_image']; ?>
-medium.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['0']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></li>
			<li><a href="<?php echo $this->_tpl_vars['new_products']['1']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['1']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['new_products']['1']['id_image']; ?>
-medium.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['new_products']['1']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></li>
		</ul>
		<dl class="products">
		<?php $_from = $this->_tpl_vars['new_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['myLoop']['iteration']++;
?>
			<dt class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></dt>
			<?php if ($this->_tpl_vars['product']['description_short']): ?><dd class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
</a>&nbsp;<a href="<?php echo $this->_tpl_vars['product']['link']; ?>
"><img alt=">>" src="<?php echo $this->_tpl_vars['img_dir']; ?>
bullet.gif"/></a></dd><?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</dl>
		<p><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php" title="<?php echo smartyTranslate(array('s' => 'All new products','mod' => 'blocknewproducts'), $this);?>
" class="button_large"><?php echo smartyTranslate(array('s' => 'All new products','mod' => 'blocknewproducts'), $this);?>
</a></p>
	<?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No new product at this time','mod' => 'blocknewproducts'), $this);?>
</p>
	<?php endif; ?>
	</div>
</div>
<!-- /MODULE Block new products -->