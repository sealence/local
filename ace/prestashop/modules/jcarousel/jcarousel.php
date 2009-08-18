<?php

class JCarousel extends Module
{
	function __construct()
	{
		$this->name = 'jcarousel';
		$this->tab = 'Home';
		$this->version = 1.0;

		parent::__construct(); // The parent construct is required for translations

		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('jcarousel module');
		$this->description = $this->l('Static images carousel by (www.marghoobsuleman.com | www.giftlelo.com). A big thanks to  Jan Sorgalla');
	}

	function install()
	{
		if (!parent::install())
			return false;
		if (!$this->registerHook('home'))
			return false;
		return true;
	}

	/**
	* Returns module content
	*
	* @param array $params Parameters
	* @return string Content
	*/
	function hookHome($params)
	{
		global $smarty;
		return $this->display(__FILE__, 'jcarousel.tpl');
	}

}

?>