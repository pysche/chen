<?php

class CooperateController extends Lja_Controller_Action_Front {

	public function readAction() {
		$id = (int)$this->getRequest()->getParam('id');
		$news = Lja_Db::t('cooperate');
		$this->view->vo = $news->findById($id);

		$this->view->files = Lja_File::getByHash($this->view->vo->Hash);
	}

	public function indexAction() {

		$model = &Lja_Db::t('cooperate');

		$order = array('SortNum ASC', 'CreateTime DESC');
		
		$numPerPage = 10;
		$offset = 0;
		$pageNum = $_REQUEST ['pageNum'];
		if (! empty ( $pageNum ) && $pageNum > 0) {
			$offset = ($pageNum - 1) * $numPerPage;
		}

		$where = ' PubFlag=1 ';

		$totalCount = $model->getAdapter ()->fetchOne ( 'select count(*) as count from ' . $model->info ( 'name' ) . ' where '.$where );

		$this->view->list = $model->fetchAll ( $where, $order, $numPerPage, $offset );
		$this->view->totalCount = $totalCount;
		$this->view->numPerPage = $numPerPage;
		$this->view->currentPage = $pageNum > 0 ? $pageNum : 1;
	}
}

