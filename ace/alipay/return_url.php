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
 //��ȡ֧�����ķ�������
   $dingdan=$_GET['out_trade_no'];   //��ȡ������
   $total_fee=$_GET['total_fee'];    //��ȡ�ܼ۸�
 
    $receive_name    =$_GET['receive_name'];   //��ȡ�ջ�������
	$receive_address =$_GET['receive_address']; //��ȡ�ջ��˵�ַ
	$receive_zip     =$_GET['receive_zip'];  //��ȡ�ջ����ʱ�
	$receive_phone   =$_GET['receive_phone']; //��ȡ�ջ��˵绰
	$receive_mobile  =$_GET['receive_mobile']; //��ȡ�ջ����ֻ�


if($verify_result) {

	$_html .= '<span style="font-size: 18px;font-weight: bold;">'. $alipay_class->getL('succeed')."</span><br /><br />";
	$_html .= $alipay_class->getL('Ordernumber').$dingdan."<br />";
	$_html .= $alipay_class->getL('Totalprice').$total."<br />";
	//����������Զ������,������ݲ�ͬ��trade_status���в�ͬ����
	log_result("verify_success"); //����֤��������ļ�	
}
else  {

	$_html .= '<span style="font-size: 18px;font-weight: bold;">'. $alipay_class->getL('failure')."</span><br /><br />";
	//����������Զ�����룬����������Զ������,������ݲ�ͬ��trade_status���в�ͬ����
	log_result ("verify_failed");
}
echo $_html;
//��־��Ϣ,��֧���������Ĳ�����¼����
function  log_result($word) { 
	$fp = fopen("log.txt","a");	
	flock($fp, LOCK_EX) ;
	fwrite($fp,$word."��ִ�����ڣ�".strftime("%Y%m%d%H%I%S",time())."\t\n");
	flock($fp, LOCK_UN); 
	fclose($fp);
}
include_once(dirname(__FILE__).'/../../footer.php');	
?>