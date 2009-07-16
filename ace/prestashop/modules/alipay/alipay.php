<?php

class Alipay extends PaymentModule
{
	private $_html = '';
	private $_postErrors = array();

	public  $partner;
	public  $security_code;
	public  $seller_email;
	public  $_input_charset = "utf-8"; 
	public  $sign_type = "MD5";
	public  $transport = "https";
	public  $notify_url = "modules/alipay/notify_url.php";
	public  $return_url = "modules/alipay/return_url.php";
	public  $show_url ="";
	public  $websiteurl;
	public  $notify_url_note = "modules/alipay/notify_url.php";
	public  $return_url_note = "modules/alipay/return_url.php";
	public	$currencies;	

	public function __construct()
	{
		$this->name = 'alipay';
		$this->tab = 'Payment';
		$this->version = 1.0;
		$config = Configuration::getMultiple(array('ALIPAY_PARTNER', 'ALIPAY_SECURITYCODE', 'ALIPAY_SELLEREMAIL', 'ALIPAY_INPUTCHARSET', 'ALIPAY_SIGNTYPE', 'ALIPAY_TRANSPORT', 'ALIPAY_NOTIFYURL', 'ALIPAY_RETURNURL', 'ALIPAY_SHOWURL', 'ALIPAY_WEBSITEURL', 'ALIPAY_CURRENCIES'));
		if (isset($config['ALIPAY_PARTNER']))
			$this->partner = $config['ALIPAY_PARTNER'];
		if (isset($config['ALIPAY_SECURITYCODE']))
			$this->security_code = $config['ALIPAY_SECURITYCODE'];
		if (isset($config['ALIPAY_SELLEREMAIL']))
			$this->seller_email = $config['ALIPAY_SELLEREMAIL'];
		if (isset($config['ALIPAY_INPUTCHARSET']))
			$this->_input_charset = $config['ALIPAY_INPUTCHARSET'];
		if (isset($config['ALIPAY_SIGNTYPE']))
			$this->sign_type = $config['ALIPAY_SIGNTYPE'];
		if (isset($config['ALIPAY_TRANSPORT']))
			$this->transport = $config['ALIPAY_TRANSPORT'];
		if (isset($config['ALIPAY_NOTIFYURL']))
			$this->notify_url = $config['ALIPAY_NOTIFYURL'];
		if (isset($config['ALIPAY_RETURNURL']))
			$this->return_url = $config['ALIPAY_RETURNURL'];
		if (isset($config['ALIPAY_SHOWURL']))
			$this->show_url = $config['ALIPAY_SHOWURL'];
		if (isset($config['ALIPAY_WEBSITEURL']))
			$this->websiteurl = $config['ALIPAY_WEBSITEURL'];	
		if (isset($config['ALIPAY_CURRENCIES']))
			$this->currencies = $config['ALIPAY_CURRENCIES'];	

		parent::__construct(); /* The parent construct is required for translations */

		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('Alipay');
		$this->description = $this->l('Accept payments by Alipay');
		$this->confirmUninstall = $this->l('Are you sure you want to delete your details ?');
		if (!isset($this->partner) OR !isset($this->security_code) OR !isset($this->seller_email) OR !isset($this->_input_charset) OR !isset($this->sign_type) OR !isset($this->transport) OR !isset($this->notify_url) OR !isset($this->return_url) OR !isset($this->websiteurl))
			$this->warning = $this->l('Account owner and details must be configured in order to use this module correctly');
	}

	public function install()
	{
		if (!parent::install() OR !$this->registerHook('payment') OR !$this->registerHook('paymentReturn'))
			return false;
	}
	public function uninstall()
	{
		if (!Configuration::deleteByName('ALIPAY_PARTNER')
				OR !Configuration::deleteByName('ALIPAY_SECURITYCODE')
				OR !Configuration::deleteByName('ALIPAY_SELLEREMAIL')
				OR !Configuration::deleteByName('ALIPAY_INPUTCHARSET')
				OR !Configuration::deleteByName('ALIPAY_SIGNTYPE')
				OR !Configuration::deleteByName('ALIPAY_TRANSPORT')
				OR !Configuration::deleteByName('ALIPAY_NOTIFYURL')
				OR !Configuration::deleteByName('ALIPAY_RETURNURL')
				OR !Configuration::deleteByName('ALIPAY_SHOWURL')
				OR !Configuration::deleteByName('ALIPAY_WEBSITEURL')
				OR !Configuration::deleteByName('ALIPAY_CURRENCIES')
				OR !parent::uninstall())
			return false;
	}

	//提交表单错误提示信息
	private function _postValidation()
	{
		if (isset($_POST['btnSubmit']))
		{
			if (empty($_POST['seller_email']))
				$this->_postErrors[] = $this->l('Account details are required.');
			elseif (empty($_POST['security_code']))
				$this->_postErrors[] = $this->l('Check the safety of transactions must be completed code.');
			elseif (empty($_POST['partner']))
				$this->_postErrors[] = $this->l('ID required to fill in as partners.');
			elseif (empty($_POST['websiteurl']))
				$this->_postErrors[] = $this->l('Web site domain name must fill out complete.');
		}
		elseif (isset($_POST['currenciesSubmit']))
		{
			$currencies = Currency::getCurrencies();
			$authorized_currencies = array();
			foreach ($currencies as $currency)
				if (isset($_POST['currency_'.$currency['id_currency']]) AND $_POST['currency_'.$currency['id_currency']])
					$authorized_currencies[] = $currency['id_currency'];
			if (!sizeof($authorized_currencies))
				$this->_postErrors[] = $this->l('at least one currency is required.');
		}
	}
	//将表单中提交的数据处理后写入数据库
	private function _postProcess()
	{
		if (isset($_POST['btnSubmit']))
		{
			Configuration::updateValue('ALIPAY_PARTNER', $_POST['partner']);
			Configuration::updateValue('ALIPAY_SECURITYCODE', $_POST['security_code']);
			Configuration::updateValue('ALIPAY_SELLEREMAIL', $_POST['seller_email']);
			Configuration::updateValue('ALIPAY_INPUTCHARSET', $this->_input_charset);
			Configuration::updateValue('ALIPAY_SIGNTYPE', $this->sign_type);
			
			Configuration::updateValue('ALIPAY_TRANSPORT', $this->transport);
			Configuration::updateValue('ALIPAY_NOTIFYURL', $_POST['websiteurl'].$this->notify_url_note);
			Configuration::updateValue('ALIPAY_RETURNURL', $_POST['websiteurl'].$this->return_url_note);
			Configuration::updateValue('ALIPAY_SHOWURL', $this->show_url);
			Configuration::updateValue('ALIPAY_WEBSITEURL', $_POST['websiteurl']);
		}
		elseif (isset($_POST['currenciesSubmit']))
		{
			$currencies = Currency::getCurrencies();
			$authorized_currencies = array();
			foreach ($currencies as $currency)
				if (isset($_POST['currency_'.$currency['id_currency']]) AND $_POST['currency_'.$currency['id_currency']])
					$authorized_currencies[] = $currency['id_currency'];
			Configuration::updateValue('ALIPAY_CURRENCIES', implode(',', $authorized_currencies));
		}
		$this->_html .= '<div class="conf confirm"><img src="../img/admin/ok.gif" alt="'.$this->l('ok').'" /> '.$this->l('Settings updated').'</div>';
	}
	//编辑账户信息时显示表单上面的支付形式LOGO和一些提示信息
	private function _displayBankWire()
	{
		$this->_html .= '<img src="../modules/alipay/alipay.jpg" style="float:left; margin-right:15px;"><br /><br />
		'.'<br />
		<br /><br /><br />';
	}
	//显示配置信息表单
	private function _displayForm()
	{
		$this->_html .=
		'<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset>
			<legend><img src="../img/admin/contact.gif" />'.$this->l('Configuration information').'</legend>
				<table border="0" width="500" cellpadding="0" cellspacing="0" id="form">
					<tr><td colspan="2">'.$this->l('Please enter the alipay configuration information').'.<br /><br /></td></tr>
				<tr>
				  <td width="130" style="height: 35px;">'.$this->l('seller email').'</td>
				  <td><input type="text" name="seller_email" value="'.htmlentities(Tools::getValue('seller_email', $this->seller_email), ENT_COMPAT, 'UTF-8').'" style="width: 300px;" /></td></tr>   
				<tr><td width="130" style="height: 35px;">'.$this->l('security code').'</td><td><input type="text" name="security_code" value="'.htmlentities(Tools::getValue('security_code', $this->security_code), ENT_COMPAT, 'UTF-8').'" style="width: 300px;" /></td></tr>
                 <tr><td width="130" style="height: 35px;">'.$this->l('partner ID').'</td><td><input type="text" name="partner" value="'.htmlentities(Tools::getValue('partner', $this->partner), ENT_COMPAT, 'UTF-8').'" style="width: 300px;" /></td></tr>
					<tr>
					<td width="130" style="height: 35px;">'.$this->l('websiteurl').'</td>
					<td><input type="text" name="websiteurl" value="'.htmlentities(Tools::getValue('websiteurl', $this->websiteurl), ENT_COMPAT, 'UTF-8').'" style="width: 300px;" />
                     <p>'.$this->l('For example: http://www.baidu.com/ (must backslash "/" end)').'</p></td></tr>
					
					<tr><td colspan="2" align="center"><input class="button" name="btnSubmit" value="'.$this->l('Update settings').'" type="submit" /></td></tr>
				</table>
  </fieldset>
</form>
<br /><br />
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset>
			<legend><img src="../img/t/15.gif" />'.$this->l('Authorized currencies').'</legend>
				<table border="0" width="500" cellpadding="0" cellspacing="0" id="form">
					<tr><td colspan="2">'.$this->l('Currencies authorized for alipay payment. Customers will be able to send wires using these currencies').'.<br /><br />
					'.$this->l('Warning: Alipay only accept RMB').'
					<br /><br /></td></tr>
					<tr>
						<td width="130" style="height: 35px; vertical-align:top">'.$this->l('Currencies').'</td>
						<td>';
						$currencies = Currency::getCurrencies();
						$authorized_currencies = array_flip(explode(',', Configuration::get('ALIPAY_CURRENCIES')));
						foreach ($currencies as $currency)
							$this->_html .= '<label style="float:none; "><input type="checkbox" value="true" name="currency_'.$currency['id_currency'].'"'.(isset($authorized_currencies[$currency['id_currency']]) ? ' checked="checked"' : '').' />&nbsp;<span style="font-weight:bold;">'.$currency['name'].'</span> ('.$currency['sign'].')</label><br />';
			$this->_html .='
						</td>
					</tr>
					<tr><td colspan="2" align="center"><br /><input class="button" name="currenciesSubmit" value="'.$this->l('Update settings').'" type="submit" /></td></tr>
				</table>
			</fieldset>
		</form>';
	}
	//通过这个方法来协调该调用哪些方法进行显示或处理数据
	public function getContent()
	{
		$this->_html = '<h2>'.$this->displayName.'</h2>';

		if (!empty($_POST))
		{
			$this->_postValidation();
			if (!sizeof($this->_postErrors))
				$this->_postProcess();
			else
				foreach ($this->_postErrors AS $err)
					$this->_html .= '<div class="alert error">'. $err .'</div>';
		}
		else
			$this->_html .= '<br />';

		$this->_displayBankWire();
		$this->_displayForm();

		return $this->_html;
	}

	public function execPayment($cart,$hiddenlink)
	{
		global $cookie, $smarty;

		$currencies = Currency::getCurrencies();
		$authorized_currencies = array_flip(explode(',', $this->currencies));
		$currencies_used = array();
		foreach ($currencies as $key => $currency)
			if (isset($authorized_currencies[$currency['id_currency']]))
				$currencies_used[] = $currencies[$key];
		$smarty->assign(array(
			'currency_default' => new Currency(Configuration::get('PS_CURRENCY_DEFAULT')),
			'currencies' => $currencies_used,
			'total' => number_format($cart->getOrderTotal(true, 3), 2, '.', ''),
			'isoCode' => Language::getIsoById(intval($cookie->id_lang)),
			'alipayDetails' => nl2br2($this->details),
			'alipayAddress' => nl2br2($this->address),
			'alipayOwner' => $this->owner,
			'this_path' => $this->_path,
			'this_path_ssl' => $hiddenlink,
            //Added By: HH.Sun 200811181525
            'shiping'=>$this->l('Shipping'),
            'osumm'=>$this->l('Order summary'),
            'apm'=>$this->l('Alipay payment'),
            'apy'=>$this->l('alipay'),
            'yhta'=>$this->l('You have chosen to pay by alipay.'),
            'hsoy'=>$this->l('Here is a short summary of your order:'),
            'ttao'=>$this->l('The total amount of your order is'),
            'waca'=>$this->l('We accept several currencies to be sent by alipay.'),
            'coot'=>$this->l('Choose one of the following:'),
            'wafb'=>$this->l('We accept the following currency to be sent by alipay:'),
            'aaid'=>$this->l('alipay account information will be displayed on the next page.'),
            'pcic'=>$this->l('Please confirm your order by clicking \'I confirm my order\''),
            'opm'=>$this->l('Other payment methods'),
            'icmo'=>$this->l('I confirm my order')
		));

		return $this->display(__FILE__, 'payment_execution.tpl');
	}

	public function lianjie($params)
	{
		//print_r($params);exit();
		require_once("alipay_service.php");
		//组合支付宝链接
		if (!intval($params['cart']->id_currency))
			$currency = new Currency(intval($params['cookie']->id_currency));
		else
			$currency = new Currency(intval($params['cart']->id_currency));
		if (!Validate::isLoadedObject($currency))
			$currency = new Currency(intval(Configuration::get('PS_DEFAULT_CURRENCY')));
		
		//这段是调出购物车的商品内容
		$pric=$params['cart']->getOrderTotal();
		$productsinfo = $params['cart']->getProducts(true);
		//这段是调出物流费用的
		$shipping_cost="0";
		$parameter = array(
		"service" => "trade_create_by_buyer", //交易类型，必填实物交易＝trade_create_by_buyer（需要填写物流）
		"partner" => $this->partner,  //合作商户号
		"return_url" => $this->return_url,  //同步返回
		//"notify_url" => $this->notify_url,  //异步返回
		"_input_charset" => $this->_input_charset,                                //字符集，默认为GBK
		"subject" => date(Ymdhms),                                                //商品名称，必填
		"body" => $productsinfo[0][description_short],                                           //商品描述，必填
		"out_trade_no" => date(Ymdhms),                      //商品外部交易号，必填,每次测试都须修改
		"logistics_fee"=>$shipping_cost,                       //物流配送费用
		"logistics_payment"=>'BUYER_PAY',               // 物流配送费用付款方式：SELLER_PAY(卖家支付)、BUYER_PAY(买家支付)、BUYER_PAY_AFTER_RECEIVE(货到付款)
		"logistics_type"=>'EXPRESS', //物流配送方式：POST(平邮)、EMS(EMS)、EXPRESS(其他快递)
		
		"price" => $pric, //商品单价，必填
		"payment_type"=>"1",                             // 默认为1,不需要修改
		//"quantity" => $productsinfo[0][cart_quantity],  //商品数量，必填
		"quantity" => "1",
		"show_url" => $this->show_url,            //商品相关网站
		"seller_email" => $this->seller_email                //卖家邮箱，必填
		);
		
		$alipay = new alipay_service($parameter,$this->security_code,$this->sign_type);
		$link=$alipay->create_url();
		//$link="http://www.baidu.com";
		return $link;
	}

	public function hookPayment($params)
	{
		global $smarty;
        $smarty->assign('payment',$this->l('Pay by Alipay'));    
		$smarty->assign(array(
			'link' => $this->lianjie($params),
			'this_path' => $this->_path,
			'this_path_ssl' => (Configuration::get('PS_SSL_ENABLED') ? 'https://' : 'http://').htmlspecialchars($_SERVER['HTTP_HOST'], ENT_COMPAT, 'UTF-8').__PS_BASE_URI__.'modules/'.$this->name.'/'));
		return $this->display(__FILE__, 'payment.tpl');
	}

	public function hookPaymentReturn($params)
	{
		global $smarty;
		$state = $params['objOrder']->getCurrentState();
		if ($state == _PS_OS_BANKWIRE_ OR $state == _PS_OS_OUTOFSTOCK_)
			$smarty->assign(array(
				'total_to_pay' => Tools::displayPrice($params['total_to_pay'], $params['currencyObj'], false, false),
				'alipayDetails' => nl2br2($this->details),
				'alipayAddress' => nl2br2($this->address),
				'alipayOwner' => $this->owner,
				'status' => 'ok',
				'id_order' => $params['objOrder']->id
			));
		else
			$smarty->assign('status', 'failed');
		
		$smarty->assign('fjs', 'fjsfjs');
        
        //ADDED BY:HH.Sun 200811171314
        $smarty->assign(array(
        'yoo'          =>$this->l('Your order on'),
        'complete'    =>$this->l('is complete.'),
        'sbww'       =>$this->l('Please send us a bank wire with:'),
        'aao'         =>$this->l('an amout of'),
        'taoo'        =>$this->l('to the account owner of'),
        'wtd'         =>$this->l('with theses details'),
        'ttb'          =>$this->l('to this bank'),
        'dfiyn'       =>$this->l('don\'t forget to insert your order number #'),
        'isofybw'    =>$this->l('in the subjet of your bank wire'),
        'send_info'  =>$this->l('An e-mail has been sent to you with this information.'),
        'recset'      =>$this->l('Your order will be sent as soon as we receive your settlement.'),
        'contact_out'=>$this->l('For any questions or for further information, please contact our'),
        'customer_support'=>$this->l('customer support'),
        'error'=>$this->l('We noticed a problem with your order. If you think this is an error, you can contact our')
        ));
		return $this->display(__FILE__, 'payment_return.tpl');
	}
	public function getL($key)
	{
		$translations = array(
			'Ordernumber' => $this->l('Order number : '),
			'Totalprice' => $this->l('Total price : '),
			'succeed' => $this->l('We have received your order and payment, Thank you for your order, we will immediately deal with '),
			'failure' => $this->l('The failure of payment, please try again or contact administrator ')
		);
		return $translations[$key];
	}


}

?>