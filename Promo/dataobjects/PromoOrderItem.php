<?php

require_once 'Store/dataobjects/StoreOrderItem.php';

/**
 * Promo specific order item
 *
 * @package   Promo
 * @copyright 2011-2016 silverorange
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 */
class PromoOrderItem extends StoreOrderItem
{
	// {{{ public properties

	public $promotion_discount;

	// }}}
}

?>
