<?php
/**
 * News Revenge
 */

/**
 * Top NewsRevenge Adminhtml Edit Block
 *
 * Category Edit Block
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Block_Adminhtml_Category_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

    public function __construct(){
        parent::__construct();
        $this->setId("category_edit_tabs");
        $this->setDestElementId("category_edit_form");  //la destinazione avrà questo file qui, include il form
    }

    protected function _beforeToHtml(){
        $this->addTab(
            "Category Details",
            array(
                "label" => $this->__("Details"),
                "title" => $this->__("Details")
            )
        );
        parent::_beforeToHtml();
    }
}