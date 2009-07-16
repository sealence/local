<?php /* Smarty version 2.6.20, created on 2009-07-15 13:30:31
         compiled from /home/sealence/local/ace/prestashop/modules/blockviewed/blockviewed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/modules/blockviewed/blockviewed.tpl', 3, false),array('function', 'm', '/home/sealence/local/ace/prestashop/modules/blockviewed/blockviewed.tpl', 10, false),array('modifier', 'escape', '/home/sealence/local/ace/prestashop/modules/blockviewed/blockviewed.tpl', 8, false),array('modifier', 'truncate', '/home/sealence/local/ace/prestashop/modules/blockviewed/blockviewed.tpl', 9, false),array('modifier', 'strip_tags', '/home/sealence/local/ace/prestashop/modules/blockviewed/blockviewed.tpl', 10, false),)), $this); ?>
<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block products_block">
	<h4><?php echo smartyTranslate(array('s' => 'Viewed products','mod' => 'blockviewed'), $this);?>
</h4>
	<div class="block_content">
		<ul class="products">
		<?php $_from = $this->_tpl_vars['productsViewedObj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['viewedProduct']):
        $this->_foreach['myLoop']['iteration']++;
?>
			<li class="<?php if (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php else: ?>item<?php endif; ?>">
				<a href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['viewedProduct']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockviewed'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['viewedProduct']->cover; ?>
-medium.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->legend)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a>
				<h5><a href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['viewedProduct']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockviewed'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25) : smarty_modifier_truncate($_tmp, 25)); ?>
</a></h5>
				<p><?php echo smartyMaxWords(array('s' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['viewedProduct']->description_short)) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 44) : smarty_modifier_truncate($_tmp, 44)),'n' => 12), $this);?>
<a href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['viewedProduct']); ?>
" title="<?php echo smartyTranslate(array('s' => 'More about','mod' => 'blockviewed'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['viewedProduct']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
bullet.gif" alt="&gt;&gt;" /></a></p>
			</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
</div>