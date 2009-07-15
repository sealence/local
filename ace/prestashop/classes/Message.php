<?php

/**
  * Message class, Message.php
  * Messages management
  * @category classes
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.1
  *
  */
  
class		Message extends ObjectModel
{
	public 		$id;
	
	/** @var string message content */
	public 		$message;
	
	/** @var integer Cart ID (if applicable) */
	public		$id_cart;
	
	/** @var integer Order ID (if applicable) */
	public		$id_order;
	
	/** @var integer Customer ID (if applicable) */
	public		$id_customer;
	
	/** @var integer Employee ID (if applicable) */
	public		$id_employee;
	
	/** @var boolean Message is not displayed to the customer */
	public		$private;
	
	/** @var string Object creation date */
	public 		$date_add;
	
	protected	$fieldsRequired = array('message');
	protected	$fieldsSize = array('message' => 600);
	protected	$fieldsValidate = array(
		'message' => 'isMessage', 'id_cart' => 'isUnsignedId', 'id_order' => 'isUnsignedId',
		'id_customer' => 'isUnsignedId', 'id_employee' => 'isUnsignedId', 'private' => 'isBool');
	
	protected 	$table = 'message';
	protected 	$identifier = 'id_message';

	public function getFields()
	{
		parent::validateFields();
		
		$fields['message'] = pSQL($this->message, true);
		$fields['id_cart'] = intval($this->id_cart);
		$fields['id_order'] = intval($this->id_order);
		$fields['id_customer'] = intval($this->id_customer);
		$fields['id_employee'] = intval($this->id_employee);
		$fields['private'] = intval($this->private);
		$fields['date_add'] = pSQL($this->date_add);
				
		return $fields;
	}

	/**
	  * Return name from Cart ID
	  *
	  * @param integer $id_cart Cart ID
	  * @return array Messages
	  */
	static public function getMessageByCartId($id_cart)
	{
		$db = Db::getInstance();
		$result = $db->getRow('
		SELECT *
		FROM `'._DB_PREFIX_.'message`
		WHERE `id_cart` = '.intval($id_cart));
		
		return $result;
	}
	
	/**
	  * Return name from Order ID
	  *
	  * @param integer $id_order Order ID
	  * @param boolean $private return only private messages
	  * @return array Messages
	  */
	static public function getMessagesByOrderId($id_order, $private = false)
	{
	 	if (!Validate::isBool($private))
	 		die(Tools::displayError());

		$result = Db::getInstance()->ExecuteS('
		SELECT m.*, c.`firstname` AS cfirstname, c.`lastname` AS clastname, e.`firstname` AS efirstname, e.`lastname` AS elastname
		FROM `'._DB_PREFIX_.'message` m
		LEFT JOIN `'._DB_PREFIX_.'customer` c ON m.`id_customer` = c.`id_customer`
		LEFT OUTER JOIN `'._DB_PREFIX_.'employee` e ON e.`id_employee` = m.`id_employee`
		WHERE `id_order` = '.intval($id_order).'
		'.($private ? ' AND m.`private` = 0' : '').'
		ORDER BY `date_add` ASC');
	
		return $result;
	}
}

?>
