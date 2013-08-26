<?php

class NewsController extends Lja_Controller_Action_Front {

	public function readAction() {
		$id = (int)$this->getRequest()->getParam('id');
		$news = Lja_Db::t('articles');
		$this->view->vo = $news->findById($id);
	}
}

