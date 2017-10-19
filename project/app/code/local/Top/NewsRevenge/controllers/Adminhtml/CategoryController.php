<?php
/**
 * News Revenge
 */

/**
 * News Revenge Adminhtml Controller
 * Backend Category Controller
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Top_NewsRevenge_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action {

    /**
     * indexAction
     */
    public function indexAction(){
        $this->loadLayout()
             ->renderLayout();
    }

    /**
     * newAction
     */
    public function newAction(){  //Il pulsante add sarà sempre newAction
        $this->_forward("edit"); //rimbalza a editAction
    }

    /**
     * editAction
     */
    public function editAction(){
        $this->loadLayout()
            ->renderLayout();
    }

    /**
     * saveAction
     */
    public function saveAction(){
        //prepare model
        if($this->getRequest()->getParam("category_id")){  //se c'è category_id nella url...
            $model = Mage::getModel("top_newsrevenge/category")->load($this->getRequest()->getParam("category_id"));
            if(!$model || !$model->getId()){
                Mage::getSingleton("adminhtml/session")->addError($this->__("There was an error when loading the category"));
                return $this->_redirect("*/*/");
            }
        } else {
            $model = Mage::getModel("top_newsrevenge/category");  //creo nuovo model
        }

        //verify code and name
        if(!$this->getRequest()->getParam("code") || !$this->getRequest()->getParam("name")){
            Mage::getSingleton(("adminhtml/session"))->addError($this->__("Some required fileds are missing"));
            return $this->_redirect("*/*/edit/", array("category_id" => $this->getRequest()->getParam("category_id")));
        }

        //save the object
        try {
            $model->setCode($this->getRequest()->getParam("code"));
            $model->setName($this->getRequest()->getParam("name"));
            $model->setStatus($this->getRequest()->getParam("status") == 1 ? 1 : 0);
            $model->save();
        } catch(Exception $e){
            Mage::logException($e); //invia sui log exception l'errore
            Mage::getSingleton("adminhtml/session")->addError($this->__("There was an error when saving the category"));
            return $this->_redirect("*/*/edit/", array("category_id" => $this->getRequest()->getParam("category_id")));
        }

        Mage::getSingleton("adminhtml/session")->addSuccess($this->__("The category was successfully saved."));
        return $this->_redirect("*/*/");
    }

    /**
     * deleteAction
     */
    public function deleteAction(){
        //load object
        $category = Mage::getModel("top_newsrevenge/category")->load($this->getRequest()->getParam("category_id"));

        if(!$category || !$category->getId()){
            Mage::getSingleton("adminhtml/session")->addError($this->__("There was an error when loading the category"));
            return $this->_redirect("*/*/");
        }

        //delete the category
        try {
            $category->delete();
        } catch(Exception $e){
            Mage::logException($e); //invia sui log exception l'errore
            Mage::getSingleton("adminhtml/session")->addError($this->__("There was an error when deleting the category"));
            return $this->_redirect("*/*/");
        }

        Mage::getSingleton("adminhtml/session")->addSuccess($this->__("The category was successfully deleted."));
        return $this->_redirect("*/*/");
    }

    /**
     * _isAllowed
     * @return bool
     */
    protected function _isAllowed(){
        return Mage::getSingleton("admin/session")->isAllowed("top_newsrevenge");
    }
}