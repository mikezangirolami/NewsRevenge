<?php
/**
 * News Revenge
 */

/**
 * Nwews Revenge Category Grid Block
 *
 * Adminhtml block for category grid
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Block_Adminhtml_Category_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    /**
     * Top_NewsRevenge_Block_Adminhtml_Category constructor
     */
    public function __construct(){
        parent::__construct();
        
    }

    /**
     * _prepareCollection
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection(){
        $collection = Mage::getModel("top_newsrevenge/category")->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * _prepareColumns
     */
    protected function _prepareColumns(){
        $this->addColumn(
            "category_id", //setta questa colonna
            array(
                "index" => "category_id", //campo del db da utilizzare
                "header" => $this->__("ID"), //titolo del campo
                "width" => 50, //dimensione del campo in px
                "type" => "number" //specifica il tipo del campo per la ricerca
            )
        );

        $this->addColumn(
            "code",
            array(
                "index" => "code",
                "header" => $this->__("Code"),
                "width" => 250
            )
        );

        $this->addColumn(
            "name",
            array(
                "index" => "name",
                "header" => $this->__("Name")
            )
        );

        $this->addColumn(
            "status",
            array(
                "index" => "status",
                "header" => $this->__("Status"),
                "width" => 150,
                "type" => "options",
                "options" => Mage::getModel("top_newsrevenges/source_status")->toGridArray(),
                "renderer" => "top_newsrevenge/adminhtml_category_grid_renderer_status",
            )
        );

        //add actions to the last column
        $this->addColumn(
            "actions",
            array(
                "header" => $this->__("Actions"),
                "width" => 100,
                "type" => "action",
                "getter" => "getId", //get id che utilizza l'action
                "actions" => array(
                    array( //doppio array, per implementare più options
                        "caption" => $this->__("Edit"), //tasto edit che invia alla url sottospecificata
                        "url" => array("base" => "*/*/edit"), //si fa così, codice standard
                        "field" => "category_id"
                    ),
                    array(
                        "caption" => $this->__("Delete"),
                        "url" => array("base" => "*/*/delete"),
                        "field" => "category_id",
                        "confirm" => $this->__("Are you sure to delete this?")
                    )
                ),
                "filter" => false, //disabilita filtro per i due pulsanti: edit/delete
                "sortable" => false, //disabilita ordinamento per i due pulsanti: edit/delete
                "is_system" => true //specifica che sono colonne a parte, che non fanno parte della collection
            )
        );
        return parent::_prepareColumns();
    }
}