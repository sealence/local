<?php /* Smarty version 2.6.20, created on 2009-07-15 17:18:15
         compiled from /home/sealence/local/ace/prestashop/themes/ace/order-payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/themes/ace/order-payment.tpl', 1, false),array('function', 'convertPrice', '/home/sealence/local/ace/prestashop/themes/ace/order-payment.tpl', 12, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your payment method'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Choose your payment method'), $this);?>
</h2>

<?php $this->assign('current_step', 'payment'); ?>
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

<?php if ($this->_tpl_vars['HOOK_PAYMENT']): ?>
	<h4><?php echo smartyTranslate(array('s' => 'Please choose the payment method you want to use to pay the amount of'), $this);?>
&nbsp;<span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_price']), $this);?>
</span></h4><br />
	<?php echo $this->_tpl_vars['HOOK_PAYMENT']; ?>

<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No payment modules have been installed yet.'), $this);?>
</p>
<?php endif; ?>

<p class="cart_navigation"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=2" title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" class="button">&laquo; <?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a></p>