<?php /* Smarty version 2.6.20, created on 2009-08-04 18:18:38
         compiled from /var/www/prestashop/themes/prestashop/my-account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/themes/prestashop/my-account.tpl', 7, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
-->
</script>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</h2>
<h4><?php echo smartyTranslate(array('s' => 'Welcome to your account. Here you can manage your addresses and orders.'), $this);?>
</h4>
<ul>
	<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php" title="<?php echo smartyTranslate(array('s' => 'Orders'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s' => 'Orders'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php" title="<?php echo smartyTranslate(array('s' => 'Orders'), $this);?>
"><?php echo smartyTranslate(array('s' => 'History and details of your orders'), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['returnAllowed']): ?>
		<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-follow.php" title="<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/return.gif" alt="<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-follow.php" title="<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
</a></li>
	<?php endif; ?>
	<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-slip.php" title="<?php echo smartyTranslate(array('s' => 'Orders'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/slip.gif" alt="<?php echo smartyTranslate(array('s' => 'Orders'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-slip.php" title="<?php echo smartyTranslate(array('s' => 'Credit slips'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Credit slips'), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
addresses.php" title="<?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/addrbook.gif" alt="<?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
addresses.php" title="<?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Your addresses'), $this);?>
</a></li>
	<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" title="<?php echo smartyTranslate(array('s' => 'Information'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/userinfo.gif" alt="<?php echo smartyTranslate(array('s' => 'Information'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" title="<?php echo smartyTranslate(array('s' => 'Information'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['voucherAllowed']): ?>
		<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
discount.php" title="<?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/voucher.gif" alt="<?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
discount.php" title="<?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Your vouchers'), $this);?>
</a></li>
	<?php endif; ?>
	<?php echo $this->_tpl_vars['HOOK_CUSTOMER_ACCOUNT']; ?>

</ul>
<p><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.gif" alt="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
" class="icon" /></a><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></p>