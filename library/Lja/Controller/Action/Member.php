<?php

class Lja_Controller_Action_Member extends Lja_Controller_Action_Dwz {

	public function init() {
		parent::init();
		
		$this->loginRequired();

		$this->view->member = $this->member;
	}
}