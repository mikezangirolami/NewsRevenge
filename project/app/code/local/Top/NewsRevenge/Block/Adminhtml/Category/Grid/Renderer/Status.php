<?php
/**
 * News Revenge
 */

/**
 * News Revenge Category Grid Status Renderer
 * Status renderer for category grid
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Block_Adminhtml_Category_Grid_Renderer_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {

    /**
     * render
     *
     * Render status as enabled or disabled
     * @param Varien_Object $row
     * @return string
     */
    public function render(Varien_Object $row){
        if($row->getData("status") == 0) {
            return "<span class='grid-severity-minor'><span>" . $this->__("Disabled") . "</span></span>";
        }
        if($row->getData("status") == 1) {
            return "<span class='grid-severity-notice'><span>" . $this->__("Enabled") . "</span></span>";
        }
        return "<span class='grid-severity-major'><span>" . $this->__("Error") . "</span></span>"; //come se fosse un else
    }
}