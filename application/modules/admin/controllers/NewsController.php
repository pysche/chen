<?php

class Admin_NewsController extends Lja_Controller_Action_Member {

	public function init() {
		parent::init();

		$this->mName = 'articles';
		$this->force_where = ' Category='.intval(Lja_Config::appConfig()->article_category->news);
	}

	public function editAction() {
		parent::editAction();

		$this->view->files = Lja_File::getByHash($this->view->vo->Hash);
	}

	public function addAction() {
		parent::addAction();

		if (!$_SESSION['new_article_hash']) {
			$this->view->Hash = $_SESSION['new_article_hash'] = md5(uniqid(rand()));
		} else {
			$this->view->Hash = $_SESSION['new_article_hash'];
		}
	}

	public function updateAction() {
		$p = &$_POST;
		Lja_Uploader::SaveFilesOrder($p['attach_list_orders']);

		parent::updateAction();
	}

	public function insertAction() {
		$p = &$_POST;
		Lja_Uploader::SaveFilesOrder($p['attach_list_orders']);
		
		if ($p['attach_list_orders']) {
			$tmp = explode(',', $p['attach_list_orders']);
			$_REQUEST['FirstAttach'] = $tmp[0];
		} else {
			if ($p['FirstAttach']) {
				$_REQUEST['FirstAttach'] = $p['FirstAttach'];
			} else {
				$files = Lja_File::getByHash($p['attach_hash']);
				if (count($files)>0) {
					$_REQUEST['FirstAttach'] = $files[0]['FileId'];
				}
			}
		}		

		parent::insertAction();
	}
}

