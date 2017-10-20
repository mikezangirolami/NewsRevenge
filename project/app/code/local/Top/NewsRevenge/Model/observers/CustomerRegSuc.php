<?php

/**
 * Class Top_NewsRevenge_Model_obersvers_CustomerRegSuc
 */
class Top_NewsRevenge_Model_observers_CustomerRegSuc extends Mage_Core_Model_Session_Abstract {
    /**
     * @param Varien_Event_Observer $event
     */
    public function grabData(Varien_Event_Observer $event){
        $customerName = $event->getCustomer()->getFirstname();
        $customerSurname = $event->getCustomer()->getLastname();
        $customerEmail = $event->getCustomer()->getEmail();
        $customerPwdHash = $event->getCustomer()->getPasswordHash();
        Mage::log("Name: " . $customerName);
        Mage::log("Surname: " . $customerSurname);
        Mage::log("Email: " . $customerEmail);
        Mage::log("Password Hash: " . $customerPwdHash);
    }
}