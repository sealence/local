<?php /* Smarty version 2.6.20, created on 2009-07-15 16:32:43
         compiled from /home/sealence/local/ace/prestashop/modules/blockcart/blockcart-json.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'addslashes', '/home/sealence/local/ace/prestashop/modules/blockcart/blockcart-json.tpl', 8, false),array('modifier', 'html_entity_decode', '/home/sealence/local/ace/prestashop/modules/blockcart/blockcart-json.tpl', 10, false),array('modifier', 'truncate', '/home/sealence/local/ace/prestashop/modules/blockcart/blockcart-json.tpl', 11, false),array('modifier', 'cat', '/home/sealence/local/ace/prestashop/modules/blockcart/blockcart-json.tpl', 57, false),array('function', 'displayWtPrice', '/home/sealence/local/ace/prestashop/modules/blockcart/blockcart-json.tpl', 10, false),array('function', 'convertPrice', '/home/sealence/local/ace/prestashop/modules/blockcart/blockcart-json.tpl', 61, false),)), $this); ?>
{
'products': [
<?php if ($this->_tpl_vars['products']): ?><?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
<?php $this->assign('productId', $this->_tpl_vars['product']['id_product']); ?>
<?php $this->assign('productAttributeId', $this->_tpl_vars['product']['id_product_attribute']); ?>
	{
		'id':            <?php echo $this->_tpl_vars['product']['id_product']; ?>
,
		'link':          '<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
',
		'quantity':      <?php echo $this->_tpl_vars['product']['cart_quantity']; ?>
,
		'priceByLine':   '<?php echo ((is_array($_tmp=Product::displayWtPrice(array('p' => $this->_tpl_vars['product']['price_wt']*$this->_tpl_vars['product']['cart_quantity']), $this))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, 'UTF-8') : html_entity_decode($_tmp, 2, 'UTF-8'));?>
',
		'name':          '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 16) : smarty_modifier_truncate($_tmp, 16)); ?>
',
		'price':         '<?php echo ((is_array($_tmp=Product::displayWtPrice(array('p' => $this->_tpl_vars['product']['price_wt']), $this))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, 'UTF-8') : html_entity_decode($_tmp, 2, 'UTF-8'));?>
',
		'idCombination': <?php if (isset ( $this->_tpl_vars['product']['attributes_small'] )): ?><?php echo $this->_tpl_vars['productAttributeId']; ?>
<?php else: ?>0<?php endif; ?>,
<?php if (isset ( $this->_tpl_vars['product']['attributes_small'] )): ?>
		'hasAttributes': true,
		'attributes':    '<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes_small'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
',
<?php else: ?>
		'hasAttributes': false,
<?php endif; ?>
		'hasCustomizedDatas': <?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?>true<?php else: ?>false<?php endif; ?>,

		'customizedDatas':[
		<?php $_from = $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_customization'] => $this->_tpl_vars['customization']):
?>{

			'customizationId':	<?php echo $this->_tpl_vars['id_customization']; ?>
,
			'quantity':			<?php echo $this->_tpl_vars['customization']['quantity']; ?>
,
			'datas': [
<?php $_from = $this->_tpl_vars['customization']['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['datas']):
?>
				{
					'type':	<?php echo $this->_tpl_vars['type']; ?>
,
					'datas':
					[
<?php $_from = $this->_tpl_vars['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['data']):
?>

						{
						'index':			<?php echo $this->_tpl_vars['index']; ?>
,
						'value':			'<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['value'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
',
						'truncatedValue':	'<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['value'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 28) : smarty_modifier_truncate($_tmp, 28)))) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
'
						},
					<?php endforeach; endif; unset($_from); ?>]
				},
				<?php endforeach; endif; unset($_from); ?>
			]
		},<?php endforeach; endif; unset($_from); ?>
		]


	},
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
],

'discounts': [
<?php if ($this->_tpl_vars['discounts']): ?><?php $_from = $this->_tpl_vars['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['discounts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['discounts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['discount']):
        $this->_foreach['discounts']['iteration']++;
?>
	{
		'id':              '<?php echo $this->_tpl_vars['discount']['id_discount']; ?>
',
		'name':            '<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['discount']['name'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' : ') : smarty_modifier_cat($_tmp, ' : ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['discount']['description']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['discount']['description'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, 18, '...', true, false) : smarty_modifier_truncate($_tmp, 18, '...', true, false)))) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
',
		'description':     '<?php echo ((is_array($_tmp=$this->_tpl_vars['discount']['description'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
',
		'nameDescription': '<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['discount']['name'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' : ') : smarty_modifier_cat($_tmp, ' : ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['discount']['description']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['discount']['description'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, 18, '...', true, false) : smarty_modifier_truncate($_tmp, 18, '...', true, false)); ?>
',
		'link':            '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?deleteDiscount=<?php echo $this->_tpl_vars['discount']['id_discount']; ?>
',
		'price':           '-<?php echo ((is_array($_tmp=Product::convertPrice(array('price' => $this->_tpl_vars['discount']['value_real']), $this))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, 'UTF-8') : html_entity_decode($_tmp, 2, 'UTF-8'));?>
'
	}
	<?php if (! ($this->_foreach['discounts']['iteration'] == $this->_foreach['discounts']['total'])): ?>,<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
],

'shippingCost': '<?php echo ((is_array($_tmp=$this->_tpl_vars['shipping_cost'])) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, 'UTF-8') : html_entity_decode($_tmp, 2, 'UTF-8')); ?>
',
'wrappingCost': '<?php echo ((is_array($_tmp=$this->_tpl_vars['gift_wrapping_price'])) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, 'UTF-8') : html_entity_decode($_tmp, 2, 'UTF-8')); ?>
',
'nbTotalProducts': '<?php echo $this->_tpl_vars['nb_total_products']; ?>
',
'total': '<?php echo ((is_array($_tmp=$this->_tpl_vars['total'])) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, 'UTF-8') : html_entity_decode($_tmp, 2, 'UTF-8')); ?>
',
'productTotal': '<?php echo ((is_array($_tmp=$this->_tpl_vars['product_total'])) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp, 2, 'UTF-8') : html_entity_decode($_tmp, 2, 'UTF-8')); ?>
',

<?php if (isset ( $this->_tpl_vars['errors'] ) && $this->_tpl_vars['errors']): ?>
'hasError' : true,
errors : [
<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['errors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['errors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
        $this->_foreach['errors']['iteration']++;
?>
	'<?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
'
	<?php if (! ($this->_foreach['errors']['iteration'] == $this->_foreach['errors']['total'])): ?>,<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
]
<?php else: ?>
'hasError' : false
<?php endif; ?>

}