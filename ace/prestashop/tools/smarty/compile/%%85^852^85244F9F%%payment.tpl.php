<?php /* Smarty version 2.6.20, created on 2009-07-16 16:51:01
         compiled from /home/sealence/local/ace/prestashop/modules/alipay/payment.tpl */ ?>
<p class="payment_module">
	<a href="javascript:$('#alipay_form').submit();" title="<?php echo $this->_tpl_vars['payment']; ?>
">
		<img src="<?php echo $this->_tpl_vars['this_path']; ?>
alipay.jpg" alt="<?php echo $this->_tpl_vars['payment']; ?>
" />
		<?php echo $this->_tpl_vars['payment']; ?>
</a>
	
</p>
<form action="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
payment.php" method="post" id="alipay_form" class="hidden">
<input type="hidden" name="hiddenlink" id="hiddenlink" value="<?php echo $this->_tpl_vars['alipay_link']; ?>
"/>
</form>