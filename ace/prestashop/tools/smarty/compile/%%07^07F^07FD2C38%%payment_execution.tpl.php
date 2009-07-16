<?php /* Smarty version 2.6.20, created on 2009-07-16 11:34:40
         compiled from /home/sealence/local/ace/prestashop/modules/alipay/payment_execution.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/sealence/local/ace/prestashop/modules/alipay/payment_execution.tpl', 20, false),array('function', 'convertPriceWithCurrency', '/home/sealence/local/ace/prestashop/modules/alipay/payment_execution.tpl', 22, false),)), $this); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['shiping']; ?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['osumm']; ?>
</h2>

<?php $this->assign('current_step', 'payment'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_tpl_vars['apm']; ?>
</h3>

<form action="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
" method="post">
<p>
	<img src="<?php echo $this->_tpl_vars['this_path']; ?>
alipay.jpg" alt="<?php echo $this->_tpl_vars['apy']; ?>
" style="float:left; margin: 0px 10px 5px 0px;" />
	<?php echo $this->_tpl_vars['yhta']; ?>

	<br/><br />
	<?php echo $this->_tpl_vars['hsoy']; ?>

</p>
<p style="margin-top:20px;">
	- <?php echo $this->_tpl_vars['ttao']; ?>

	<?php if (count($this->_tpl_vars['currencies']) > 1): ?>
		<?php $_from = $this->_tpl_vars['currencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency']):
?>
			<span id="amount_<?php echo $this->_tpl_vars['currency']['id_currency']; ?>
" class="price" style="display:none;"><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['total'],'currency' => $this->_tpl_vars['currency']), $this);?>
</span>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<span id="amount_<?php echo $this->_tpl_vars['currencies']['0']['id_currency']; ?>
" class="price"><?php echo Product::convertPriceWithCurrency(array('price' => $this->_tpl_vars['total'],'currency' => $this->_tpl_vars['currencies']['0']), $this);?>
</span>
	<?php endif; ?>
</p>
<p>
	-
	<?php if (count($this->_tpl_vars['currencies']) > 1): ?>
		<?php echo $this->_tpl_vars['waca']; ?>

		<br /><br />
		<?php echo $this->_tpl_vars['coot']; ?>

		<select id="currency_payement" name="currency_payement" onChange="showElemFromSelect('currency_payement', 'amount_')">
		<?php $_from = $this->_tpl_vars['currencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency']):
?>
			<option value="<?php echo $this->_tpl_vars['currency']['id_currency']; ?>
" <?php if ($this->_tpl_vars['currency']['id_currency'] == $this->_tpl_vars['currency_default']->id): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['currency']['name']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		</select>
		<script language="javascript">showElemFromSelect('currency_payement', 'amount_');</script>
	<?php else: ?>
		<?php echo $this->_tpl_vars['wafb']; ?>
&nbsp;<b><?php echo $this->_tpl_vars['currencies']['0']['name']; ?>
</b>
		<input type="hidden" name="currency_payement" value="<?php echo $this->_tpl_vars['currencies']['0']['id_currency']; ?>
">
	<?php endif; ?>
</p>
<p>
	<?php echo $this->_tpl_vars['aaid']; ?>

	<br /><br />
	<b><?php echo $this->_tpl_vars['pcic']; ?>
.</b>
</p>
<p class="cart_navigation">
	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=3" class="button_large"><?php echo $this->_tpl_vars['opm']; ?>
</a>
	<input type="submit" name="submit" value="<?php echo $this->_tpl_vars['icmo']; ?>
" class="exclusive_large" />
</p>
</form>