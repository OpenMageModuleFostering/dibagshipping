<?php

/**
 * Baggage Freight Module 
 *
 * @category   DI
 * @package    DI_Bagshipping
 * @author     DI Dev Team
 * @website    http://www.di.net.au/
 */
class Di_Bagshipping_Model_Mysql4_Bagshipping_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('bagshipping/bagshipping');
    }

    public function addProductFilter($productId) {
        $this->getSelect()
                ->where('pid = ?', $productId);
        return $this;
    }

}