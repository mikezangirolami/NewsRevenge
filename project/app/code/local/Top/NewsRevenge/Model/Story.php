<?php
/**
 * News Revenge
 */

/**
 * Top NewsRevenge Model Data
 *
 * Story Model.
 *
 * @method Top_NewsRevenge_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Top_NewsRevenge_Model_Story getContent()
 * @method setContent(string $content)
 * @method Top_NewsRevenge_Model_Story getStatus()
 * @method setStatus (bool $status)
 * @method Top_NewsRevenge_Model_Story getCategoryId()
 * @method setCategoryId (int $categoryId)
 * @method Top_NewsRevenge_Model_Story getCreatedAt()
 * @method Top_NewsRevenge_Model_Story getUpdatedAt()
 * @method setUpdateAt(string $updatedAt)
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package cms
 */

class Top_NewsRevenge_Model_Story extends Mage_Core_Model_Abstract {

    /**
     * _construct
     */
    public function _construct(){ //Construct di Variant
        $this->_init("top_newsrevenge/story");
    }

    protected function _beforeSave(){
        parent::_beforeSave();
        $this->setUpdateAt(Mage::getSingleton("core/date")->gmtDate());
        return $this;
    }
}