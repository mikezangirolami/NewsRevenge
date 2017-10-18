<?php
/**
 * News Revenge
 */

/**
 * News Revenge Model Resource Story Collection
 *
 * Story Resource Collection Model.
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package cms
 */

class Top_NewsRevenge_Model_Resource_Story_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    /**
     * _construct
     */
    public function _construct(){ //Construct di Variant
        $this->_init("top_newsrevenge/story");
    }
}