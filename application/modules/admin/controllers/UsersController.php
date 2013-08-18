<?php

class Admin_UsersController extends Lja_Controller_Action_Member {
	
	public function insertAction() {
		$p = &$_POST;
		if ($p['Password']!=$p['Password2']) {
			$this->error('两次输入的密码不一致');
		}

		parent::insertAction();
	}	

	public function editAction() {
		parent::editAction();
		$this->view->vo->AuthMask = unserialize($this->view->vo->AuthMask);
	}

	public function updateAction() {
		$p = &$_POST;
		if ($p['Password']!=$p['Password2']) {
			$this->error('两次输入的密码不一致');
		}

		parent::updateAction();
	}
}

