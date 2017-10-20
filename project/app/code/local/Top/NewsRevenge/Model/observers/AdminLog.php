<?php

/**
 * Class Acierno_Coupon_Model_Observer
 */
class Top_NewsRevenge_Model_observers_Status extends Mage_Core_Model_Session_Abstract {

    /**
     * @param Varien_Event_Observer $event
     */
    public function adminLogged(Varien_Event_Observer $event){
        Mage::log("Admin has been logged.");
    }
}