<?php

class Admin_LoginController extends Lja_Controller_Action_Dwz {

	public function indexAction() {
	}

	public function dologinAction() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$row = $this->u->u($username);
		if ($row['Password']==md5($password)) {
			$_SESSION['Uid'] = $row['id'];

			$params = array(
				'LastLogin' => time()
				);
			$this->u->update($params, " id='".$row['id']."'");

			$this->log(array(
				'Message' => '登录系统'
				));

			if ($this->isAjax()) {
				$this->success('登录成功');
			} else {
				$this->_helper->getHelper('Redirector')->gotoUrl($this->MODULE);
			}
		} else {
			if ($this->isAjax()) {
				$this->error('登录失败');
			} else {
				$this->_helper->getHelper('Redirector')->gotoUrl($this->MODULE.'/login');
			}
		}
	}

	public function logoutAction() {
		$this->log(array(
			'Message' => '退出系统'
			));
		
		$_SESSION['Uid'] = null;
		unset($_SESSION['Uid']);
		session_unset();

		$this->_helper->getHelper('Redirector')->gotoUrl($this->MODULE.'/login');
	}
}

