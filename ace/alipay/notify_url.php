<?php
/* SSL Management */
$useSSL = true;

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/alipay.php');
include(dirname(__FILE__).'/alipay_notify.php');

$_html = '';

$alipay_class = new Alipay();

$alipay = new alipay_notify($alipay_class->partner,$alipay_class->security_code,$alipay_class->sign_type,$alipay_class->_input_charset,$alipay_class->transport);
$verify_result = $alipay->notify_verify();

if($verify_result) {

 //��ȡ֧�����ķ�������

  $dingdan=$_POST['out_trade_no'];    //��ȡ֧�������ݹ����Ķ�����
  $total=$_POST['total_fee'];    //��ȡ֧�������ݹ������ܼ۸�

    $receive_name    =$_POST['receive_name'];   //��ȡ�ջ�������
	$receive_address =$_POST['receive_address']; //��ȡ�ջ��˵�ַ
	$receive_zip     =$_POST['receive_zip'];  //��ȡ�ջ����ʱ�
	$receive_phone   =$_POST['receive_phone']; //��ȡ�ջ��˵绰
	$receive_mobile  =$_POST['receive_mobile']; //��ȡ�ջ����ֻ�


  $trade_status=$_POST['trade_status'];    //��ȡ֧��������������״̬,���ݲ�ͬ��״̬���������ݿ� WAIT_BUYER_PAY(��ʾ�ȴ���Ҹ���);WAIT_SELLER_SEND_GOODS(��ʾ��Ҹ���ɹ�,�ȴ����ҷ���);WAIT_BUYER_CONFIRM_GOODS(�����Ѿ������ȴ����ȷ��);TRADE_FINISHED(��ʾ�����Ѿ��ɹ�����)

 

if($_POST['trade_status'] == 'WAIT_SELLER_SEND_GOODS' and $_POST['trade_status'] == 'TRADE_FINISHED') 
{
   //����������Զ������,������ݲ�ͬ��trade_status���в�ͬ����
	$_html .= '<span style="font-size: 18px;font-weight: bold;">'. $alipay_class->getL('succeed')."</span><br /><br />";
	$_html .= $alipay_class->getL('Ordernumber').$dingdan."<br />";
	$_html .= $alipay_class->getL('Totalprice').$total."<br />";
}
	
	log_result("verify_success"); //����֤��������ļ�	
}
else  {
	$_html .= '<span style="font-size: 18px;font-weight: bold;">'. $alipay_class->getL('failure')."</span><br /><br />";
	//����������Զ�����룬����������Զ������,������ݲ�ͬ��trade_status���в�ͬ����
	log_result ("verify_failed");
}

echo $_html;

function  log_result($word) {
	$fp = fopen("log.txt","a");	
	flock($fp, LOCK_EX) ;
	fwrite($fp,$word."��ִ�����ڣ�".strftime("%Y%m%d%H%I%S",time())."\t\n");
	flock($fp, LOCK_UN); 
	fclose($fp);
}
include_once(dirname(__FILE__).'/../../footer.php');
?>