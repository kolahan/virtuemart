<?php
/**
 * Shipping Carrier table
 *
 * @package	VirtueMart
 * @subpackage ShippingCarrier
 * @author RickG 
 * @copyright Copyright (c) 2009 VirtueMart Team. All rights reserved.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

/**
 * Shipping Rate table class
 * The class is is used to manage the shipping rates in the shop.
 *
 * @author RickG
 * @package	VirtueMart
 */
class TableShipping_Rate extends JTable
{
	/** @var int Primary key */
	var $shipping_rate_id			= 0;
	/** @var string Shipping Rate name*/
	var $shipping_rate_name      	= '';					
	/** @var string Shipping Rate name*/
	var $shipping_rate_carrier_id   = 0;
		/** @var string Shipping Rate name*/
	var $shipping_rate_country      	= '';
		/** @var string Shipping Rate name*/
	var $shipping_rate_zip_start   	= '';
	/** @var string Shipping Rate name*/
	var $shipping_rate_zip_end      	= '';
		/** @var string Shipping Rate name*/
	var $shipping_rate_weight_start      	= '';	
		/** @var string Shipping Rate name*/
	var $shipping_rate_weight_end      	= '';
		/** @var string Shipping Rate name*/
	var $shipping_rate_value      	= '';
		/** @var string Shipping Rate name*/
	var $shipping_rate_package_fee      	= '';
		/** @var string Shipping Rate name*/
	var $shipping_rate_currency_id      	= '';
		/** @var string Shipping Rate name*/
	var $shipping_rate_vat_id      	= '';
		/** @var string Shipping Rate name*/
	var $shipping_rate_list_order      	= '';

	/**
	 * @author RickG
	 * @param $db A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__vm_shipping_rate', 'shipping_rate_id', $db);
	}


	/**
	 * Validates the shipping rate record fields.
	 *
	 * @author RickG
	 * @return boolean True if the table buffer is contains valid data, false otherwise.
	 */
	function check() 
	{
        if (!$this->shipping_rate_name) {
			$this->setError(JText::_('Shipping Rate records must contain a rate name.'));
			return false;
		}

		if (($this->shipping_rate_name) && ($this->shipping_rate_id == 0)) {
		    $db =& JFactory::getDBO();
		    
			$q = 'SELECT count(*) FROM `#__vm_shipping_rate` ';
			$q .= 'WHERE `shipping_rate_name`="' .  $this->shipping_rate_name . '"';
            $db->setQuery($q);        
		    $rowCount = $db->loadResult();		
			if ($rowCount > 0) {
				$this->setError(JText::_('The given shipping rate name already exists.'));
				return false;
			}
		}
		
		return true;
	}
	
	
	

}
?>
