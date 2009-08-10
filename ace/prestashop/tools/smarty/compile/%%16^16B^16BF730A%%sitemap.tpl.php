<?php /* Smarty version 2.6.20, created on 2009-07-31 13:45:16
         compiled from /var/www/prestashop/themes/prestashop/sitemap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/themes/prestashop/sitemap.tpl', 1, false),array('modifier', 'escape', '/var/www/prestashop/themes/prestashop/sitemap.tpl', 39, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Sitemap'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Sitemap'), $this);?>
</h2>
<div id="sitemap_content">
	<div class="sitemap_block">
		<h3><?php echo smartyTranslate(array('s' => 'Information'), $this);?>
</h3>
		<ul>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php"><?php echo smartyTranslate(array('s' => 'Contact'), $this);?>
</a></li>
			<?php $_from = $this->_tpl_vars['cmslinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cmslink']):
?>
				<li><a href="<?php echo $this->_tpl_vars['cmslink']['link']; ?>
" title="<?php echo $this->_tpl_vars['cmslink']['meta_title']; ?>
"><?php echo $this->_tpl_vars['cmslink']['meta_title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
	<div class="sitemap_block">
		<h3><?php echo smartyTranslate(array('s' => 'Our offers'), $this);?>
</h3>
		<ul>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
new-products.php"><?php echo smartyTranslate(array('s' => 'New products'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
best-sales.php"><?php echo smartyTranslate(array('s' => 'Top sellers'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
prices-drop.php"><?php echo smartyTranslate(array('s' => 'Specials'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
manufacturer.php"><?php echo smartyTranslate(array('s' => 'Manufacturers'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
supplier.php"><?php echo smartyTranslate(array('s' => 'Suppliers'), $this);?>
</a></li>
		</ul>
	</div>
	<div class="sitemap_block">
		<h3><?php echo smartyTranslate(array('s' => 'Your Account'), $this);?>
</h3>
		<ul>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Your Account'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php"><?php echo smartyTranslate(array('s' => 'Personal information'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
addresses.php"><?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
</a></li>
			<?php if ($this->_tpl_vars['voucherAllowed']): ?><li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
discount.php"><?php echo smartyTranslate(array('s' => 'Discount'), $this);?>
</a></li><?php endif; ?>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php"><?php echo smartyTranslate(array('s' => 'Orders history'), $this);?>
</a></li>
		</ul>
	</div>
	<br class="clear" />
</div>
<div class="categTree">
	<h3><?php echo smartyTranslate(array('s' => 'Categories'), $this);?>
</h3>
	<div class="tree_top"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['categoriesTree']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></div>
	<ul class="tree">
	<?php $_from = $this->_tpl_vars['categoriesTree']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sitemapTree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sitemapTree']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['child']):
        $this->_foreach['sitemapTree']['iteration']++;
?>
		<?php if (($this->_foreach['sitemapTree']['iteration'] == $this->_foreach['sitemapTree']['total'])): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./category-tree-branch.tpl", 'smarty_include_vars' => array('node' => $this->_tpl_vars['child'],'last' => 'true')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./category-tree-branch.tpl", 'smarty_include_vars' => array('node' => $this->_tpl_vars['child'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>