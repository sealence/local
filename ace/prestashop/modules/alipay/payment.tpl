<p class="payment_module">
	<a href="javascript:$('#alipay_form').submit();" title="{$payment}">
		<img src="{$this_path}alipay.jpg" alt="{$payment}" />
		{$payment}</a>
	
</p>
<form action="{$this_path_ssl}payment.php" method="post" id="alipay_form" class="hidden">
<input type="hidden" name="hiddenlink" id="hiddenlink" value="{$alipay_link}"/>
</form>
