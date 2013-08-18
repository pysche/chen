<?php

class Admin_IndexController extends Lja_Controller_Action_Member {
	
	public function init() {
		parent::init();
		$this->loginRequired();
	}
	
	public function indexAction() {

	}
}

