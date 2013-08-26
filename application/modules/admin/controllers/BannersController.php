<?php

class Admin_BannersController extends Lja_Controller_Action_Member {

	public function init() {
		$this->mName = 'attachment';
		parent::init();
	}

	public function indexAction() {
		
		$this->view->files = Lja_File::getByHash(md5('lja'));
	}

	public function updateAction() {
		$p = &$_POST;
		Lja_Uploader::SaveFilesOrder($p['attach_list_orders']);

		$this->success('保存成功');
	}
}