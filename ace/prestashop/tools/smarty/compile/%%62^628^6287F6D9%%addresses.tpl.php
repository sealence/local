<?php /* Smarty version 2.6.20, created on 2009-08-04 18:23:43
         compiled from /var/www/prestashop/themes/prestashop/addresses.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/themes/prestashop/addresses.tpl', 7, false),array('modifier', 'intval', '/var/www/prestashop/themes/prestashop/addresses.tpl', 29, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a><span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span><?php echo smartyTranslate(array('s' => 'My addresses'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'My addresses'), $this);?>
</h2>
<p><?php echo smartyTranslate(array('s' => 'Configure your billing and delivery addresses that will be preselected by default when you make an order. You can also add additional addresses, which can be useful for sending gifts or receiving your order at the office.'), $this);?>
</p>

<?php if ($this->_tpl_vars['addresses']): ?>
<div class="addresses">
	<h3><?php echo smartyTranslate(array('s' => 'Your addresses are listed below.'), $this);?>
</h3>
	<p><?php echo smartyTranslate(array('s' => 'Be sure to update them if they have changed.'), $this);?>
</p>

	<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['address']):
        $this->_foreach['myLoop']['iteration']++;
?>
	<ul class="address <?php if (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php endif; ?> <?php if (($this->_foreach['myLoop']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
		<li class="address_title"><?php echo $this->_tpl_vars['address']['alias']; ?>
</li>
		<?php if ($this->_tpl_vars['address']['company']): ?><li class="address_company"><?php echo $this->_tpl_vars['address']['company']; ?>
</li><?php endif; ?>
		<li class="address_name"><?php echo $this->_tpl_vars['address']['firstname']; ?>
 <?php echo $this->_tpl_vars['address']['lastname']; ?>
</li>
		<li class="address_address1"><?php echo $this->_tpl_vars['address']['address1']; ?>
</li>
		<?php if ($this->_tpl_vars['address']['address2']): ?><li class="address_address2"><?php echo $this->_tpl_vars['address']['address2']; ?>
</li><?php endif; ?>
		<li class="address_city"><?php echo $this->_tpl_vars['address']['postcode']; ?>
 <?php echo $this->_tpl_vars['address']['city']; ?>
</li>
		<li class="address_country"><?php echo $this->_tpl_vars['address']['country']; ?>
<?php if (isset ( $this->_tpl_vars['address']['state'] )): ?> (<?php echo $this->_tpl_vars['address']['state']; ?>
)<?php endif; ?></li>
		<?php if ($this->_tpl_vars['address']['phone']): ?><li class="address_phone"><?php echo $this->_tpl_vars['address']['phone']; ?>
</li><?php endif; ?>
		<?php if ($this->_tpl_vars['address']['phone_mobile']): ?><li class="address_phone_mobile"><?php echo $this->_tpl_vars['address']['phone_mobile']; ?>
</li><?php endif; ?>
		<li class="address_update"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'Update'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Update'), $this);?>
</a></li>
		<li class="address_delete"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;delete" onclick="return confirm('<?php echo smartyTranslate(array('s' => 'Are you sure?'), $this);?>
');" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
</a></li>
	</ul>
	<?php endforeach; endif; unset($_from); ?>
	<p class="clear" />
</div>
<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No addresses available.'), $this);?>
&nbsp;<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php"><?php echo smartyTranslate(array('s' => 'add a new one!'), $this);?>
</a></p>
<?php endif; ?>

<div class="clear address_add"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php" title="<?php echo smartyTranslate(array('s' => 'Add an address'), $this);?>
" class="button_large"><?php echo smartyTranslate(array('s' => 'Add an address'), $this);?>
</a></div>

<ul class="footer_links">
	<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/my-account.gif" alt="" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Back to Your Account'), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.gif" alt="" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></li>
</ul>