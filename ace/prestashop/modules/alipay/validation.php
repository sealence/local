<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/alipay.php');

$currency = new Currency(intval(isset($_POST['currency_payement']) ? $_POST['currency_payement'] : $cookie->id_currency));
$total = floatval(number_format($cart->getOrderTotal(true, 3), 2, '.', ''));
$alipay = new Alipay();
$alipay->validateOrder($cart->id, _PS_OS_PAYMENT_, $total, $alipay->displayName);
$order = new Order($alipay->currentOrder);
Tools::redirectLink($_POST['hiddenlink']);
?>