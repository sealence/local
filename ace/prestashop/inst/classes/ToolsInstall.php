<?php
class ToolsInstall
{
	public static function checkDB ($srv, $login, $password, $name, $posted = true)
	{
		include_once(INSTALL_PATH.'/../classes/Validate.php');
		include_once(INSTALL_PATH.'/../classes/Db.php');
		include_once(INSTALL_PATH.'/../classes/MySQL.php');
		
		if($posted)
		{
			// Check POST data...
			$data_check = array(
				!isset($_GET['server']) OR empty($_GET['server']),
				!Validate::isMailName($_GET['server']),
				!isset($_GET['type']) OR empty($_GET['type']),
				!Validate::isMailName($_GET['type']),
				!isset($_GET['name']) OR empty($_GET['name']),
				!Validate::isMailName($_GET['name']),
				!isset($_GET['login']) OR empty($_GET['login']),
				!Validate::isMailName($_GET['login']),
				!isset($_GET['password'])
			);
			foreach ($data_check AS $data)
				if ($data)
					return 8;
		}

		switch(MySQL::tryToConnect($srv, $login, $password, $name))
		{
			case 0:
				if (MySQL::tryUTF8($srv, $login, $password))
					return true;
				return 49;
			break;
			
			case 1:
				return 25;
			break;
			
			case 2:
				return 24;
			break;
		}
	}
	
	public static function sendMail($smtpChecked, $smtpServer, $content, $subject, $type, $to, $from, $smtpLogin, $smtpPassword, $smtpPort = 25, $smtpEncryption)
	{
		include(INSTALL_PATH.'/../tools/swift/Swift.php');
		include(INSTALL_PATH.'/../tools/swift/Swift/Connection/SMTP.php');
		include(INSTALL_PATH.'/../tools/swift/Swift/Connection/NativeMail.php');
		
		$swift = NULL;
		$result = NULL;
		try
		{
			
			if($smtpChecked)
			{
				
				$smtp = new Swift_Connection_SMTP($smtpServer, $smtpPort, ($smtpEncryption == "off") ? Swift_Connection_SMTP::ENC_OFF : (($smtpEncryption == "tls") ? Swift_Connection_SMTP::ENC_TLS : Swift_Connection_SMTP::ENC_SSL));
				$smtp->setUsername($smtpLogin);
				$smtp->setpassword($smtpPassword);
				$smtp->setTimeout(5);
				$swift = new Swift($smtp);
			}
			else
			{
				$swift = new Swift(new Swift_Connection_NativeMail());
			}
			
			$message = new Swift_Message($subject, $content, $type);
			
			if ($swift->send($message, $to, $from))
			{
				$result = true;
			}
			else
			{
				$result = 999;
			}
			$swift->disconnect();
		}
		catch (Swift_Connection_Exception $e)
		{
		 $result = $e->getCode();
		}
		catch (Swift_Message_MimeException $e)
		{
		 $result = $e->getCode();
		}
		return $result;	
	}
	
	public static function getNotificationMail($shopName, $shopUrl, $shopLogo, $firstname, $lastname, $password, $email)
	{
		$iso_code = $_GET['isoCodeLocalLanguage'];
		$pathTpl = INSTALL_PATH.'/../mails/en/employee_password.html';
		$pathTplLocal = INSTALL_PATH.'/../mails/'.$iso_code.'/employee_password.html';
		
		$content = (file_exists($pathTplLocal)) ? file_get_contents($pathTplLocal) : file_get_contents($pathTpl);
		$content = str_replace('{shop_name}', $shopName, $content);
		$content = str_replace('{shop_url}', $shopUrl, $content);
		$content = str_replace('{shop_logo}', $shopLogo, $content);
		$content = str_replace('{firstname}', $firstname, $content);
		$content = str_replace('{lastname}', $lastname, $content);
		$content = str_replace('{passwd}', $password, $content);
		$content = str_replace('{email}', $email, $content);
		return $content;
	}
	
	public static function getLangString($idLang)
	{
		switch ($idLang)
		{
			case 'en' : return 'English (English)';
			case 'fr' : return 'Français (French)';
		}
	}

	static function strtolower($str)
	{
		if (function_exists('mb_strtolower'))
			return mb_strtolower($str, 'utf-8');
		return strtolower($str);
	}

	static function strtoupper($str)
	{
		if (function_exists('mb_strtoupper'))
			return mb_strtoupper($str, 'utf-8');
		return strtoupper($str);
	}
	
	static function ucfirst($str)
	{
		return self::strtoupper(self::substr($str, 0, 1)).self::substr($str, 1);
	}
	
	static function substr($str, $start, $length = false, $encoding = 'utf-8')
	{
		if (function_exists('mb_substr'))
			return mb_substr($str, $start, ($length === false ? self::strlen($str) : $length), $encoding);
		return substr($str, $start, $length);
	}
	
	static function strlen($str)
	{
		if (function_exists('mb_strlen'))
			return mb_strlen($str, 'utf-8');
		return strlen($str);
	}
}
?>