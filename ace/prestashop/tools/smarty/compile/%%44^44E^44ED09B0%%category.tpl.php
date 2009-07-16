<?php /* Smarty version 2.6.20, created on 2009-07-15 14:11:15
         compiled from /home/sealence/local/ace/prestashop/themes/ace/category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/sealence/local/ace/prestashop/themes/ace/category.tpl', 8, false),array('modifier', 'intval', '/home/sealence/local/ace/prestashop/themes/ace/category.tpl', 9, false),array('function', 'l', '/home/sealence/local/ace/prestashop/themes/ace/category.tpl', 9, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['category']->active): ?>

<h2 class="category_title">
	<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

	<span><?php echo ((is_array($_tmp=$this->_tpl_vars['nb_products'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&nbsp;<?php if ($this->_tpl_vars['nb_products'] > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?></span>
</h2>

<?php if ($this->_tpl_vars['scenes']): ?>
	<!-- Scenes -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./scenes.tpl", 'smarty_include_vars' => array('scenes' => $this->_tpl_vars['scenes'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<!-- Category image -->
	<?php if ($this->_tpl_vars['category']->id_image): ?>
		<img src="<?php echo $this->_tpl_vars['img_cat_dir']; ?>
<?php echo $this->_tpl_vars['category']->id_image; ?>
-category.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" id="categoryImage" />
	<?php endif; ?>
<?php endif; ?>	

  <?php if ($this->_tpl_vars['category']->description): ?>
    <div class="cat_desc"><?php echo $this->_tpl_vars['category']->description; ?>
</div>
  <?php endif; ?>
  
	<?php if (isset ( $this->_tpl_vars['subcategories'] )): ?>
	<!-- Subcategories -->
	<div id="subcategories">
		<h3><?php echo smartyTranslate(array('s' => 'Subcategories'), $this);?>
</h3>
		<ul class="inline_list">
		<?php $_from = $this->_tpl_vars['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subcategory']):
?>
			<li>
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['subcategory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
					<img src="<?php echo $this->_tpl_vars['img_cat_dir']; ?>
<?php if ($this->_tpl_vars['subcategory']['id_image']): ?><?php echo $this->_tpl_vars['subcategory']['id_image']; ?>
<?php else: ?>default<?php endif; ?>-medium.jpg" alt="" />
				</a>
				<br />
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['subcategory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
			</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		<br class="clear"/>
	</div>
	<?php endif; ?>

  <?php if ($this->_tpl_vars['products']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif (! isset ( $this->_tpl_vars['subcategories'] )): ?>
		<p class="warning"><?php echo smartyTranslate(array('s' => 'There is no product in this category.'), $this);?>
</p>
	<?php endif; ?>
<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'This category is currently unavailable.'), $this);?>
</p>
<?php endif; ?>