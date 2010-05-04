<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

/**
*
* @version 
* @package VirtueMart
* @subpackage Report
* @copyright Copyright (C) VirtueMart Team - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.org
*/

/**
 * Report table class
 * 
 * @package	VirtueMart
 * @subpackage Report
 * @author Wicksj 
 */
class TableReport extends JTable {
			
	/**
	 * Constructor for report table class
	 * @param $db Database connector object 
	 */
	function __construct(&$db){
		parent::__construct('#__{vm}_orders', 'order_id', $db);
	}
}
?>