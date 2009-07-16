{if $status == 'ok'}
	<p>{$yoo} <span class="bold">{$shop_name}</span> {$complete}
		<br /><br />
		{$sbww}
		<br /><br />- {$aao} <span class="price">{$total_to_pay}</span>
		<br /><br />- {$taoo} <span class="bold">{if $alipayOwner}{$alipayOwner}{else}___________{/if}</span>
		<br /><br />- {$wtd} <span class="bold">{if $alipayDetails}{$alipayDetails}{else}___________{/if}</span>
		<br /><br />- {$ttb} <span class="bold">{if $alipayAddress}{$alipayAddress}{else}___________{/if}</span>
		<br /><br />- {$dfiyn} <span class="bold">{$id_order}</span> {$isofybw}
		<br /><br />{$send_info}
		<br /><br /><span class="bold">{$recset}</span>
		<br /><br />{$contact_out} <a href="{$base_dir}contact-form.php">{$customer_support}</a>.
	</p>
{else}
	<p class="warning">
		{$error} 
		<a href="{$base_dir}contact-form.php">{customer_support}</a>.
	</p>
{/if}
