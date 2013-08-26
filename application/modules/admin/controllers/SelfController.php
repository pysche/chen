<?php

class Admin_SelfController extends Lja_Controller_Action_Member {

	public function indexAction() {

	}

	public function updateAction() {
		$p = &$_POST;
		if ($p['Password']!=$p['Password2']) {
			$this->error('两次输入的密码不一致');
		}

		$m = new Lja_Db_Table_Users();
		$m->updatePassword($p['Password'], $this->member['id']);

		$this->success('密码修改成功');
	}
}