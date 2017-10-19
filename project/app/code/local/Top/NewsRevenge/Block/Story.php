<?php
/**
 * Top NewsRevenge
 */

/**
 * Top NewsRevenge Story Block
 *
 * Story Block.
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Block_Story extends Mage_Core_Block_Template {

    public function getStories(){
        //control if there are filter parameters
        if($this->getRequest()->getParam("category")){
            $stories = Mage::getModel("top_newsrevenge/story")->getCollection()  //prende tutta la tabella dichiarata nel model story.php
                                                                         ->addFieldToFilter("status", array("eq" => 1))
                                                                         ->addFieldToFilter("category_id", array("eq" => $this->getRequest()->getParam("category")));
            //->addFieldToFilter("updated_at", array("from" => "2017-10-10 00:00:00", "to" => "2017-10-12 06:00:00"));
            //->addFieldToSelect("campo") specifica le colonne della select invece
        } else {
            $stories = Mage::getModel("top_newsrevenge/story")->getCollection()
                                                                         ->addFieldToFilter("status", array("eq" => 1));  //aggiunge un filtro sui dati
        }
        return $stories;
    }
}