<?php

require_once 'Zend/Controller/Action.php';

class Lja_Controller_Action_Base extends Zend_Controller_Action {
	protected $isAjax = false;

	public function init() {
		parent::init();
		
		Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer')->setViewSuffix('php');
		$this->view->isAjax = $this->isAjax = $this->getRequest()->isXmlHttpRequest();
		$this->view->cName = $this->_request->getControllerName();
		
		session_start();
	}

	protected function M($m='') {
		$className = 'Lja_Db_Table_'.ucfirst( $m ? $m : $this->_request->getControllerName () );
		return new $className ();
	}
	
}