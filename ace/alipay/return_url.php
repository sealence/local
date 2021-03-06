<?php
/* SSL Management */
$useSSL = true;

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/alipay.php');
include(dirname(__FILE__).'/alipay_notify.php');

$_html = '';
$alipay_class = new Alipay();


$alipay = new alipay_notify($alipay_class->partner,$alipay_class->security_code,$alipay_class->
sign_type,$alipay_class->_input_charset,$alipay_class->transport);

$verify_result = $alipay->notify_verify();
 //获取支付宝的反馈参数
   $dingdan=$_GET['out_trade_no'];   //获取订单号
   $total_fee=$_GET['total_fee'];    //获取总价格
 
    $receive_name    =$_GET['receive_name'];   //获取收货人姓名
	$receive_address =$_GET['receive_address']; //获取收货人地址
	$receive_zip     =$_GET['receive_zip'];  //获取收货人邮编
	$receive_phone   =$_GET['receive_phone']; //获取收货人电话
	$receive_mobile  =$_GET['receive_mobile']; //获取收货人手机


if($verify_result) {

	$_html .= '<span style="font-size: 18px;font-weight: bold;">'. $alipay_class->getL('succeed')."</span><br /><br />";
	$_html .= $alipay_class->getL('Ordernumber').$dingdan."<br />";
	$_html .= $alipay_class->getL('Totalprice').$total."<br />";
	//这里放入你自定义代码,比如根据不同的trade_status进行不同操作
	log_result("verify_success"); //将验证结果存入文件	
}
else  {

	$_html .= '<span style="font-size: 18px;font-weight: bold;">'. $alipay_class->getL('failure')."</span><br /><br />";
	//这里放入你自定义代码，这里放入你自定义代码,比如根据不同的trade_status进行不同操作
	log_result ("verify_failed");
}
echo $_html;
//日志消息,把支付宝反馈的参数记录下来
function  log_result($word) { 
	$fp = fopen("log.txt","a");	
	flock($fp, LOCK_EX) ;
	fwrite($fp,$word."：执行日期：".strftime("%Y%m%d%H%I%S",time())."\t\n");
	flock($fp, LOCK_UN); 
	fclose($fp);
}
include_once(dirname(__FILE__).'/../../footer.php');	
?>