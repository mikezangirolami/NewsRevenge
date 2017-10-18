<?php

/**
 * News Revenge
 */

/**
 * Top News Revenge Model Resource Category Collection
 *
 * Category Resource Collection Model.
 *
 * @method Top_NewsRevenge_Model_Category getCode()
 * @method setcode(string $code)
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package cms
 */

class Top_NewsRevenge_Model_Resource_Category_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    /**
     * _construct
     */
    public function _construct(){ //Construct di Variant
        $this->_init("top_newsrevenge/category");
    }
}