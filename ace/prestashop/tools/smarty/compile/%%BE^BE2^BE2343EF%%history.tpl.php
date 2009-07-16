<?php /* Smarty version 2.6.20, created on 2009-07-15 16:38:47
         compiled from /home/sealence/local/ace/prestashop/themes/ace/history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/home/sealence/local/ace/prestashop/themes/ace/history.tpl', 1, false),array('function', 'dateFormat', '/home/sealence/local/ace/prestashop/themes/ace/history.tpl', 28, false),array('function', 'displayPrice', '/home/sealence/local/ace/prestashop/themes/ace/history.tpl', 29, false),array('modifier', 'intval', '/home/sealence/local/ace/prestashop/themes/ace/history.tpl', 26, false),array('modifier', 'string_format', '/home/sealence/local/ace/prestashop/themes/ace/history.tpl', 26, false),array('modifier', 'escape', '/home/sealence/local/ace/prestashop/themes/ace/history.tpl', 30, false),)), $this); ?>
<?php ob_start(); ?><a href="my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a><span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span><?php echo smartyTranslate(array('s' => 'Order history'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo smartyTranslate(array('s' => 'Order history'), $this);?>
</h2>
<p><?php echo smartyTranslate(array('s' => 'Here are the orders you have placed since the creation of your account'), $this);?>
.</p>

<div class="block-center" id="block-history">
	<?php if ($this->_tpl_vars['orders'] && count ( $this->_tpl_vars['orders'] )): ?>
	<table id="order-list" class="std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s' => 'Order'), $this);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s' => 'Date'), $this);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s' => 'Total price'), $this);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s' => 'Payment'), $this);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s' => 'Status'), $this);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s' => 'Invoice'), $this);?>
</th>
				<th class="last_item">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order']):
        $this->_foreach['myLoop']['iteration']++;
?>
			<tr class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if (($this->_foreach['myLoop']['iteration']-1) % 2): ?>alternate_item<?php endif; ?>">
				<td class="history_link bold">
					<?php if ($this->_tpl_vars['order']['invoice'] && $this->_tpl_vars['order']['virtual']): ?><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s' => 'Product(s) to download'), $this);?>
" title="<?php echo smartyTranslate(array('s' => 'Product(s) to download'), $this);?>
" /><?php endif; ?>
					<a class="color-myaccount" href="javascript:showOrder(1, <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
, 'order-detail');"><?php echo smartyTranslate(array('s' => '#'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%06d") : smarty_modifier_string_format($_tmp, "%06d")); ?>
</a>
				</td>
				<td class="history_date bold"><?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['order']['date_add'],'full' => 0), $this);?>
</td>
				<td class="history_price"><span class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['order']['total_paid_real'],'currency' => $this->_tpl_vars['order']['id_currency'],'no_utf8' => false,'convert' => false), $this);?>
</span></td>
				<td class="history_method"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['payment'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
				<td class="history_state"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['order_state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
				<td class="history_invoice">
				<?php if (( $this->_tpl_vars['order']['invoice'] || $this->_tpl_vars['order']['invoice_number'] ) && $this->_tpl_vars['invoiceAllowed']): ?>
					<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
pdf-invoice.php?id_order=<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'Invoice'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/pdf.gif" alt="<?php echo smartyTranslate(array('s' => 'Invoice'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="icon" /></a>
					<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
pdf-invoice.php?id_order=<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" title="<?php echo smartyTranslate(array('s' => 'Invoice'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo smartyTranslate(array('s' => 'PDF'), $this);?>
</a>
				<?php else: ?>-<?php endif; ?>
				</td>
				<td class="history_detail"><a class="color-myaccount" href="javascript:showOrder(1, <?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
, 'order-detail');"><?php echo smartyTranslate(array('s' => 'details'), $this);?>
</a></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
	<div id="block-order-detail" class="hidden">&nbsp;</div>
	<?php else: ?>
		<p class="warning"><?php echo smartyTranslate(array('s' => 'You have not placed any orders.'), $this);?>
</p>
	<?php endif; ?>
</div>

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