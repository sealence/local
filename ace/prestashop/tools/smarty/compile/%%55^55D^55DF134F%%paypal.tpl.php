<?php /* Smarty version 2.6.20, created on 2009-07-15 16:38:01
         compiled from /home/sealence/local/ace/prestashop/modules/paypal/paypal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/modules/paypal/paypal.tpl', 2, false),array('function', 'counter', '/home/sealence/local/ace/prestashop/modules/paypal/paypal.tpl', 21, false),)), $this); ?>
<p class="payment_module">
	<a href="javascript:$('#paypal_form').submit();" title="<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypal'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['module_template_dir']; ?>
paypal.gif" alt="<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypal'), $this);?>
" />
		<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypal'), $this);?>

	</a>
</p>

<form action="<?php echo $this->_tpl_vars['paypalUrl']; ?>
" method="post" id="paypal_form" class="hidden">
	<input type="hidden" name="upload" value="1" />
	<input type="hidden" name="first_name" value="<?php echo $this->_tpl_vars['address']->firstname; ?>
" />
	<input type="hidden" name="last_name" value="<?php echo $this->_tpl_vars['address']->lastname; ?>
" />
	<input type="hidden" name="address1" value="<?php echo $this->_tpl_vars['address']->address1; ?>
" />
	<?php if (! empty ( $this->_tpl_vars['address']->address2 )): ?><input type="hidden" name="address2" value="<?php echo $this->_tpl_vars['address']->address2; ?>
" /><?php endif; ?>
	<input type="hidden" name="city" value="<?php echo $this->_tpl_vars['address']->city; ?>
" />
	<input type="hidden" name="zip" value="<?php echo $this->_tpl_vars['address']->postcode; ?>
" />
	<input type="hidden" name="country" value="<?php echo $this->_tpl_vars['country']->iso_code; ?>
" />
	<input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['amount']; ?>
" />
	<input type="hidden" name="email" value="<?php echo $this->_tpl_vars['customer']->email; ?>
" />
<?php if (! $this->_tpl_vars['discounts']): ?>
	<input type="hidden" name="shipping_1" value="<?php echo $this->_tpl_vars['shipping']; ?>
" />
	<?php echo smarty_function_counter(array('assign' => 'i'), $this);?>

	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
	<input type="hidden" name="item_name_<?php echo $this->_tpl_vars['i']; ?>
" value="<?php echo $this->_tpl_vars['product']['name']; ?>
<?php if (isset ( $this->_tpl_vars['product']['attributes'] )): ?> - <?php echo $this->_tpl_vars['product']['attributes']; ?>
<?php endif; ?>" />
	<input type="hidden" name="amount_<?php echo $this->_tpl_vars['i']; ?>
" value="<?php echo $this->_tpl_vars['product']['paypalAmount']; ?>
" />
	<input type="hidden" name="quantity_<?php echo $this->_tpl_vars['i']; ?>
" value="<?php echo $this->_tpl_vars['product']['quantity']; ?>
" />
	<?php echo smarty_function_counter(array('print' => false), $this);?>

	<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
	<input type="hidden" name="item_name_1" value="<?php echo smartyTranslate(array('s' => 'My cart','mod' => 'paypal'), $this);?>
" />
	<input type="hidden" name="amount_1" value="<?php echo $this->_tpl_vars['total']; ?>
" />
	<input type="hidden" name="quantity_1" value="1" />
<?php endif; ?>
	<input type="hidden" name="business" value="<?php echo $this->_tpl_vars['business']; ?>
" />
	<input type="hidden" name="receiver_email" value="<?php echo $this->_tpl_vars['business']; ?>
" />
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="charset" value="utf-8" />
	<input type="hidden" name="currency_code" value="<?php echo $this->_tpl_vars['currency']->iso_code; ?>
" />
	<input type="hidden" name="payer_id" value="<?php echo $this->_tpl_vars['customer']->id; ?>
" />
	<input type="hidden" name="payer_email" value="<?php echo $this->_tpl_vars['customer']->email; ?>
" />
	<input type="hidden" name="custom" value="<?php echo $this->_tpl_vars['id_cart']; ?>
" />
	<input type="hidden" name="return" value="<?php echo $this->_tpl_vars['goBackUrl']; ?>
" />
	<input type="hidden" name="notify_url" value="<?php echo $this->_tpl_vars['returnUrl']; ?>
" />
    <input type="hidden" name="rm" value="1" />
	<input type="hidden" name="bn" value="PRESTASHOP_WPS" />
</form>