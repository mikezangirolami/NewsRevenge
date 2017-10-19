<?php
/**
 * News Revenge
 */

/**
 * Top News Revenge Status Model
 *
 * Options to Status
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Model_Source_Status {
/**
 * toOptionArray
 * @return array
 */
    public function toOptionArray(){ //si usa per i select nei form
        return array(
            array("value" => 0, "label" => Mage::helper("top_newsrevenge")->__("Disabled")),
            array("value" => 1, "label" => Mage::helper("top_newsrevenge")->__("Enabled"))
        );
    }

    /**
     * toGridArray
     * @return array
     */
    public function toGridArray(){ //si usa per i select nella griglia
        $array = array();
        foreach ($this->toOptionArray() as $option){
            $array[$option['value']] = $option['label'];
        }
        return $array;
    }
}