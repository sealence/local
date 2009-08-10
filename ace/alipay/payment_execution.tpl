{capture name=path}{$shiping}{/capture}
{include file=$tpl_dir./breadcrumb.tpl}

<h2>{$osumm}</h2>

{assign var='current_step' value='payment'}
{include file=$tpl_dir./order-steps.tpl}

<h3>{$apm}</h3>

<form action="{$this_path_ssl}" method="post">
<p>
	<img src="{$this_path}alipay.jpg" alt="{$apy}" style="float:left; margin: 0px 10px 5px 0px;" />
	{$yhta}
	<br/><br />
	{$hsoy}
</p>
<p style="margin-top:20px;">
	- {$ttao}
	{if $currencies|@count > 1}
		{foreach from=$currencies item=currency}
			<span id="amount_{$currency.id_currency}" class="price" style="display:none;">{convertPriceWithCurrency price=$total currency=$currency}</span>
		{/foreach}
	{else}
		<span id="amount_{$currencies.0.id_currency}" class="price">{convertPriceWithCurrency price=$total currency=$currencies.0}</span>
	{/if}
</p>
<p>
	-
	{if $currencies|@count > 1}
		{$waca}
		<br /><br />
		{$coot}
		<select id="currency_payement" name="currency_payement" onChange="showElemFromSelect('currency_payement', 'amount_')">
		{foreach from=$currencies item=currency}
			<option value="{$currency.id_currency}" {if $currency.id_currency == $currency_default->id}selected="selected"{/if}>{$currency.name}</option>
		{/foreach}
		</select>
		<script language="javascript">showElemFromSelect('currency_payement', 'amount_');</script>
	{else}
		{$wafb}&nbsp;<b>{$currencies.0.name}</b>
		<input type="hidden" name="currency_payement" value="{$currencies.0.id_currency}">
	{/if}
</p>
<p>
	{$aaid}
	<br /><br />
	<b>{$pcic}.</b>
</p>
<p class="cart_navigation">
	<a href="{$base_dir_ssl}order.php?step=3" class="button_large">{$opm}</a>
	<input type="submit" name="submit" value="{$icmo}" class="exclusive_large" />
</p>
</form>