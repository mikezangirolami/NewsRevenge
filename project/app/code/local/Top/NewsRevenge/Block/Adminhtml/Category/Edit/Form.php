<?php
/**
 * News Revenge
 */

/**
 * News Revenge Adminhtml Edit Form Block
 *
 * Category Edit Form Block
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Block_Adminhtml_Category_Edit_Form extends Mage_Adminhtml_Block_Widget_Form {

    /**
     * Top_NewsRevenge_Block_Adminhtml_Category_Edit_Form constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->setId("category_edit_form");
    }

    protected function _prepareForm(){
        //prepare form
        $form = new Varien_Data_Form(
            array(
                "id" => "edit_form",
                "method" => "post",
                "action" => $this->getUrl("*/*/save", array("category_id" => $this->getRequest()->getParam("category_id"))),
                "enctype" => "multipart/form-data"
            )
        );
        $form->setHtmlIdPrefix("category_");

        //add fields
        $fieldset = $form->addFieldset(
            "general",
            array(
                "legend" => $this->__("General Information"),
                "class" => "fieldset-wide"
            )
        );

        $fieldset->addField(  //non concatenabile
            "code",
            "text",
            array(
                "name" => "code",
                "label" => $this->__("Code"),
                "title" => $this->__("Code"),
                "required" => true
            )
        );
        $fieldset->addField(
            "name",
            "text",
            array(
                "name" => "name",
                "label" => $this->__("Name"),
                "title" => $this->__("Name"),
                "required" => true
            )
        );
        $fieldset->addField(
            "status",
            "select",
            array(
                "name" => "status",
                "label" => $this->__("Status"),
                "title" => $this->__("Status"),
                "values" => Mage::getModel("top_newsrevenge/source_status")->toOptionArray(),
                "required" => true
            )
        );

        //populate with category data
        if($this->getRequest()->getParam("category_id")){
            $model = Mage::getModel("top_newsrevenge/category")->load($this->getRequest()->getParam("category_id"));
            $form->setValues($model);
        }

        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}