<?php
/**
 * News Revenge
 */

/**
 * News Revenge Adminhtml Edit Block
 *
 * Backend Category Controller
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    /**
     * Top_NewsRevenge_Block_Adminhtml_Category_Edit constructor.
     */
    public function __construct(){
        $this->_objectId = "category_id";
        $this->_blockGroup = "top_newsrevenge";
        $this->_controller = "adminhtml_category";

        parent::__construct();
    }

    /**
     * @return string
     */
    public function getHeaderText(){
        return $this->__("Category Details");
    }

}