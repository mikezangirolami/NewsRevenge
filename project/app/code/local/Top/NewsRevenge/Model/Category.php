<?php
/**
 * News Revenge
 */

/**
 * News Revenge Model Data
 *
 * Category Model.
 *
 * @method Top_NewsRevenge_Model_Category getCode()
 * @method setCode(string $code)
 * @method Top_NewsRevenge_Model_Category getName()
 * @method setName(string $name)
 * @method Top_NewsRevenge_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Top_NewsRevenge_Model_Category getCreatedAt()
 * @method Top_NewsRevenge_Model_Category getUpdatedAt()
 * @method setUpdateAt(string $updatedAt)
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package cms
 */

class Top_NewsRevenge_Model_Category extends Mage_Core_Model_Abstract {

    /**
     * _construct
     */

    public function _construct(){ //Construct di Varien
        $this->_init("top_newsrevenge/category");
    }

    protected function _beforeSave(){
        parent::_beforeSave();
        $this->setUpdateAt(Mage::getSingleton("core/date")->gmtDate());
        return $this;
    }
}