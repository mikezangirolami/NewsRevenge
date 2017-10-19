<?php
/**
 * News Revenge
 */

/**
 * News Rwevenge Category Block
 * Adminhtml block for category grid
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container {

    /**
     * Top_NewsRevenge_Block_Adminhtml_Category constructor
     */
    public function __construct(){
        $this->_blockGroup = "top_newsrevenge"; //quale sarà il gruppo di block da utilizzare
        $this->_controller = "adminhtml_category"; //quale controller sarà utilizzato
        $this->_headerText = $this->__("News Categories");
        parent::__construct();
    }
}