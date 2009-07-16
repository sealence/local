<?php

/* SSL Management */
$useSSL = true;

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/alipay.php');

if (!$cookie->isLogged())
    Tools::redirect('authentication.php?back=order.php');
	
if($_POST['hiddenlink']!="")
{
	$hiddenlink=$_POST['hiddenlink'];
}	
	
	
$alipay = new Alipay();
echo $alipay->execPayment($cart,$hiddenlink);

include_once(dirname(__FILE__).'/../../footer.php');

?>