<?php
/**
 * News Revenge
 */

/**
 * News Revenge Adminhtml Controller
 * Backend Category Controller
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action {

    /**
     * indexAction
     */
    public function indexAction(){
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * _isAllowed
     * @return bool
     */
    protected function _isAllowed(){
        return Mage::getSingleton("admin/session")->isAllowed("top_newsrevenge");
    }
}