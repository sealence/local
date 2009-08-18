<?php

class JGalleryview extends Module
{
	function __construct()
	{
		$this->name = 'jgalleryview';
		$this->tab = 'Home';
		$this->version = 2.0;

		parent::__construct(); // The parent construct is required for translations

		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('jgalleryview module');
		$this->description = $this->l('A JavaScript image rotating gallery (http://spaceforaname.com/galleryview). A big thanks to  Jack Anderson !');
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
		return $this->display(__FILE__, 'jgalleryview.tpl');
	}

}

?>
