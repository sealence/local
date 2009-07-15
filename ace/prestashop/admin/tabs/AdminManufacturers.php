<?php

/**
  * Manufacturers tab for admin panel, AdminManufacturers.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.1
  *
  */

include_once(realpath(PS_ADMIN_DIR.'/../').'/classes/AdminTab.php');

class AdminManufacturers extends AdminTab
{
	protected $maxImageSize = 200000;

	/** @var array countries list */
	private $countriesArray = array();

	public function __construct()
	{
		global $cookie;

		$this->table = 'manufacturer';
		$this->className = 'Manufacturer';
		$this->lang = false;
		$this->edit = true;
	 	$this->delete = true;
		
		// Sub tab adresses
		$countries = Country::getCountries(intval($cookie->id_lang));
		foreach ($countries AS $country)
			$this->countriesArray[$country['id_country']] = $country['name'];
		$this->fieldsDisplayAdresses = array(
		'id_address' => array('title' => $this->l('ID'), 'align' => 'center', 'width' => 25),
		'm!manufacturer_name' => array('title' => $this->l('Manufacturer'), 'width' => 100),
		'firstname' => array('title' => $this->l('First name'), 'width' => 80),
		'lastname' => array('title' => $this->l('Last name'), 'width' => 100, 'filter_key' => 'a!name'),
		'postcode' => array('title' => $this->l('Post/Zip code'), 'align' => 'right', 'width' => 50),
		'city' => array('title' => $this->l('City'), 'width' => 150),
		'country' => array('title' => $this->l('Country'), 'width' => 100, 'type' => 'select', 'select' => $this->countriesArray, 'filter_key' => 'cl!id_country'));
		$this->_includeTabTitle = array($this->l('Manufacturers addresses'));
		$this->_joinAdresses = 'LEFT JOIN `'._DB_PREFIX_.'country_lang` cl ON 
		(cl.`id_country` = a.`id_country` AND cl.`id_lang` = '.intval($cookie->id_lang).') ';
	 	$this->_joinAdresses .= 'LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON (a.`id_manufacturer` = m.`id_manufacturer`)';
		$this->_selectAdresses = 'cl.`name` as country, m.`name` AS manufacturer_name';
		$this->_includeTab = array('Addresses' => array('addressType' => 'manufacturer', 'fieldsDisplay' => $this->fieldsDisplayAdresses, '_join' => $this->_joinAdresses, '_select' => $this->_selectAdresses));
		
		$this->view = true;
		$this->_select = 'COUNT(`id_product`) AS `products`, (SELECT COUNT(ad.`id_manufacturer`) as `addresses` FROM `'._DB_PREFIX_.'address` ad WHERE ad.`id_manufacturer` = a.`id_manufacturer` GROUP BY ad.`id_manufacturer`) as `addresses`';
		$this->_join = 'LEFT JOIN `'._DB_PREFIX_.'product` p ON (a.`id_manufacturer` = p.`id_manufacturer`)';
		$this->_joinCount = false;
		$this->_group = 'GROUP BY a.`id_manufacturer`';

		$this->fieldImageSettings = array('name' => 'logo', 'dir' => 'm');

		$this->fieldsDisplay = array(
			'id_manufacturer' => array('title' => $this->l('ID'), 'align' => 'center', 'width' => 25),
			'name' => array('title' => $this->l('Name'), 'width' => 200),
			'logo' => array('title' => $this->l('Logo'), 'align' => 'center', 'image' => 'm', 'orderby' => false, 'search' => false),
			'addresses' => array('title' => $this->l('Addresses'), 'align' => 'right', 'tmpTableFilter' => true, 'width' => 20),
			'products' => array('title' => $this->l('Products'), 'align' => 'right', 'tmpTableFilter' => true, 'width' => 20)
		);

		$countries = Country::getCountries(intval($cookie->id_lang));
		foreach ($countries AS $country)
			$this->countriesArray[$country['id_country']] = $country['name'];

		parent::__construct();
	}

	public function postProcess()
	{
		global $currentIndex;

		/* Generate image with differents size */
		if (($id_manufacturer = intval(Tools::getValue('id_manufacturer'))) AND isset($_FILES) AND file_exists(_PS_MANU_IMG_DIR_.$id_manufacturer.'.jpg'))
		{
			$imagesTypes = ImageType::getImagesTypes('manufacturers');
			foreach ($imagesTypes AS $k => $imageType)
			{
				$file['tmp_name'] = _PS_MANU_IMG_DIR_.$id_manufacturer.'.jpg';
				$file['type'] = 'image/jpg';
				imageResize($file, _PS_MANU_IMG_DIR_.$id_manufacturer.'-'.stripslashes($imageType['name']).'.jpg', intval($imageType['width']), intval($imageType['height']));
			}
		}
		parent::postProcess();
	}

	public function displayForm()
	{
		global $currentIndex;

		$manufacturer = $this->loadObject(true);
		$this->displayImage($manufacturer->id, _PS_MANU_IMG_DIR_.$manufacturer->id.'.jpg', 350);
		$defaultLanguage = intval(Configuration::get('PS_LANG_DEFAULT'));
		$languages = Language::getLanguages();

		echo '
		<script type="text/javascript">
			id_language = Number('.$defaultLanguage.');
		</script>
		<form action="'.$currentIndex.'&submitAdd'.$this->table.'=1&token='.$this->token.'" method="post" enctype="multipart/form-data" class="width3">
		'.($manufacturer->id ? '<input type="hidden" name="id_'.$this->table.'" value="'.$manufacturer->id.'" />' : '').'
			<fieldset><legend><img src="../img/admin/manufacturers.gif" />'.$this->l('Manufacturers').'</legend>
				<label>'.$this->l('Name:').' </label>
				<div class="margin-form">
					<input type="text" size="40" name="name" value="'.htmlentities(Tools::getValue('name', $manufacturer->name), ENT_COMPAT, 'UTF-8').'" /> <sup>*</sup>
					<span class="hint" name="help_box">'.$this->l('Invalid characters:').' <>;=#{}<span class="hint-pointer">&nbsp;</span></span>
				</div>
				<label>'.$this->l('Description:').' </label>
				<div class="margin-form">';
				foreach ($languages as $language)
					echo '
					<div id="description_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<input size="33" type="text" name="description_'.$language['id_lang'].'" value="'.htmlentities($this->getFieldValue($manufacturer, 'description', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8').'" />
						<span class="hint" name="help_box">'.$this->l('Invalid characters:').' <>;=#{}<span class="hint-pointer">&nbsp;</span></span>
						<p style="clear: both;">'.$this->l('Will appear in manufacturer list').'</p>
					</div>';
				$this->displayFlags($languages, $defaultLanguage, 'description', 'description');
		echo '	</div>
				<label>'.$this->l('Logo:').' </label>
				<div class="margin-form">
					<input type="file" name="logo" />
					<p>'.$this->l('Upload manufacturer logo from your computer').'</p>
				</div>
				<div class="margin-form">
					<input type="submit" value="'.$this->l('   Save   ').'" name="submitAdd'.$this->table.'" class="button" />
				</div>
				<div class="small"><sup>*</sup> '.$this->l('Required field').'</div>
			</fieldset>
		</form>';
	}

	public function viewmanufacturer()
	{
		global $cookie;
		$manufacturer = $this->loadObject();
		echo '<h2>'.$manufacturer->name.'</h2>';

		$products = $manufacturer->getProductsLite(intval($cookie->id_lang));
		$addresses = $manufacturer->getAddresses(intval($cookie->id_lang));
		
		echo '<h3>'.$this->l('Total addresses:').' '.sizeof($addresses).'</h3>';
		echo '<hr />';
		foreach ($addresses AS $addresse)
			echo '
				<h3></h3>
				<table border="0" cellpadding="0" cellspacing="0" class="table" style="width: 600px;">
					<tr>
						<th><b>'.$addresse['firstname'].' '.$addresse['lastname'].'</b></th>
					</tr>
					<tr>
						<td>
							<div style="padding:5px; float:left; width:350px;">
								'.$addresse['address1'].'<br />
								'.($addresse['address2'] ? $addresse['address2'].'<br />' : '').'
								'.$addresse['postcode'].' '.$addresse['city'].'<br />
								'.($addresse['state'] ? $addresse['state'].'<br />' : '').'
								<b>'.$addresse['country'].'</b><br />
								</div>
							<div style="padding:5px; float:left;">
								'.($addresse['phone'] ? $addresse['phone'].'<br />' : '').'
								'.($addresse['phone_mobile'] ? $addresse['phone_mobile'].'<br />' : '').'
							</div>
							'.($addresse['other'] ? '<div style="padding:5px; clear:both;"><br /><i>'.$addresse['other'].'</i></div>' : '').'
						</td>
					</tr>
				</table>';
		if (!sizeof($addresses))
			echo 'No adresse for this manufacturer.';
		echo '<br /><br />';
		echo '<h3>'.$this->l('Total products:').' '.sizeof($products).'</h3>';
		foreach ($products AS $product)
		{
			$product = new Product($product['id_product'], false, intval($cookie->id_lang));
			echo '<hr />';
			if (!$product->hasAttributes())
			{
				echo '
				<table border="0" cellpadding="0" cellspacing="0" class="table width3">
					<tr>
						<th>'.$product->name.'</th>
						'.(!empty($product->reference) ? '<th width="150">'.$this->l('Ref:').' '.$product->reference.'</th>' : '').'
						'.(!empty($product->ean13) ? '<th width="120">'.$this->l('EAN13:').' '.$product->ean13.'</th>' : '').'
						'.(Configuration::get('PS_STOCK_MANAGEMENT') ? '<th class="right" width="50">'.$this->l('Qty:').' '.$product->quantity.'</th>' : '').'
					</tr>
				</table>';
			}
			else
			{
				echo '
				<h3>'.$product->name.'</h3>
				<table>
					<tr>
						<td colspan="2">
		            		<table border="0" cellpadding="0" cellspacing="0" class="table" style="width: 600px;">
			                	<tr>
				                    <th>'.$this->l('Attribute name').'</th>
				                    <th width="80">'.$this->l('Reference').'</th>
				                    <th width="80">'.$this->l('EAN13').'</th>
				                   '.(Configuration::get('PS_STOCK_MANAGEMENT') ? '<th class="right" width="40">'.$this->l('Quantity').'</th>' : '').'
			                	</tr>';
			     	/* Build attributes combinaisons */
				$combinaisons = $product->getAttributeCombinaisons(intval($cookie->id_lang));
				foreach ($combinaisons AS $k => $combinaison)
				{
					$combArray[$combinaison['id_product_attribute']]['reference'] = $combinaison['reference'];
					$combArray[$combinaison['id_product_attribute']]['ean13'] = $combinaison['ean13'];
					$combArray[$combinaison['id_product_attribute']]['quantity'] = $combinaison['quantity'];
					$combArray[$combinaison['id_product_attribute']]['attributes'][] = array($combinaison['group_name'], $combinaison['attribute_name'], $combinaison['id_attribute']);
				}
				$irow = 0;
				foreach ($combArray AS $id_product_attribute => $product_attribute)
				{
					$list = '';
					foreach ($product_attribute['attributes'] AS $attribute)
						$list .= $attribute[0].' - '.$attribute[1].', ';
					$list = rtrim($list, ', ');
					echo '
					<tr'.($irow++ % 2 ? ' class="alt_row"' : '').' >
						<td>'.stripslashes($list).'</td>
						<td>'.$product_attribute['reference'].'</td>
						'.(Configuration::get('PS_STOCK_MANAGEMENT') ? '<td>'.$product_attribute['ean13'].'</td>' : '').'
						<td class="right">'.$product_attribute['quantity'].'</td>
					</tr>';
				}
				unset($combArray);
				echo '</table>';
			}
		}
	}
}
